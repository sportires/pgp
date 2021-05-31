<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Security
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\ProductFeed\Console\Command;

use Magento\Framework\App\Config\Storage\Writer;
use Mageplaza\ProductFeed\Helper\Data;
use Mageplaza\ProductFeed\Model\FeedFactory;
use Mageplaza\ProductFeed\Model\ResourceModel\Feed\CollectionFactory;
use mysql_xdevapi\Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Reset
 * @package Mageplaza\ProductFeed\Console\Command
 */
class Generate extends Command
{
    /**
     * @var Writer
     */
    protected $_writer;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var Data
     */
    protected $helper;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var FeedFactory
     */
    protected $feedFactory;

    /**
     * Generate constructor.
     *
     * @param Writer $writer
     * @param Data $helper
     * @param LoggerInterface $logger
     * @param FeedFactory $feedFactory
     * @param CollectionFactory $collectionFactory
     * @param null $name
     */
    public function __construct(
        Writer $writer,
        Data $helper,
        LoggerInterface $logger,
        FeedFactory $feedFactory,
        CollectionFactory $collectionFactory,
        $name = null
    ) {
        $this->_writer = $writer;
        $this->collectionFactory = $collectionFactory;
        $this->helper = $helper;
        $this->logger = $logger;
        $this->feedFactory = $feedFactory;

        parent::__construct($name);
    }

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this->setName('mp-productfeed:generate')
            ->setDescription('Generate Feed via command line')
            ->setDefinition([
                new InputArgument(
                    'ids',
                    InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
                    'Space-separated list of index types or omit to apply to all indexes.'
                )
            ]);

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Running...</info>');
        if ($input->getArgument('ids')) {
            $requestedTypes = $input->getArgument('ids');
            $feedIDs = array_filter(array_map('trim', $requestedTypes), 'strlen');
            foreach ($feedIDs as $feedID) {
                try {
                    $feed = $this->feedFactory->create()->load($feedID);
                    if (!$feed->getId()) {
                        $output->writeln("<error>The feed does not exist</error>");

                        return false;
                    }
                    $this->helper->generateAndDeliveryFeed($feed, 0, 1);
                    $output->writeln('<info>The feed ID ' . $feedID . ' generated Successfully!</info>');
                } catch (Exception $exception) {
                    $output->writeln("<error>{$exception->getMessage()}</error>");
                }
            }
        } else {
            $collection = $this->collectionFactory->create()
                ->addFieldToFilter('status', 1);
            $collection->walk([$this, 'generate']);
            $output->writeln('<info>All feed generated Successfully!</info>');
        }

        return true;
    }

    /**
     * @param $feed
     *
     * @throws \Exception
     */
    public function generate($feed)
    {
        try {
            $this->helper->generateAndDeliveryFeed($feed, 0, 1);
        } catch (Exception $exception) {
            $this->logger->critical($exception);
        }
    }
}
