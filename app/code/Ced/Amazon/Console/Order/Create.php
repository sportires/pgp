<?php

/**
 * CedCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End User License Agreement (EULA)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://cedcommerce.com/license-agreement.txt
 *
 * @category    Ced
 * @package     Ced_Amazon
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright © 2018 CedCommerce. All rights reserved.
 * @license     EULA http://cedcommerce.com/license-agreement.txt
 */

namespace Ced\Amazon\Console\Order;

class Create extends \Ced\Integrator\Console\Base
{
    const CLI_NAME = self::CLI_PREFIX . 'amazon:order:create';

    protected function configure()
    {
        $this->setName(self::CLI_NAME);
        $this->setDescription('Create orders in Amazon Table via cli');
        $this->addOption(
            'account_ids',
            'a',
            \Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL,
            'Amazon account ids',
            ''
        );

        $this->addOption(
            'log',
            'd',
            \Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL,
            'Log in File',
            '0'
        );

        parent::configure();
    }

    protected function execute(
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    ) {
        parent::execute($input, $output);

        $log = $input->getOption('log');

        $accountIds = $input->getOption('account_ids');
        $accountIds = !empty($accountIds) ? explode(",", $accountIds) : [];

        $rows = 2;
        /** @var \Symfony\Component\Console\Helper\ProgressBar $progress */
        $progress = $this->om->create(
            \Symfony\Component\Console\Helper\ProgressBar::class,
            ['output' => $output, 'rows' => $rows]
        );
        $progress->setBarCharacter('<fg=magenta>=</>');
        $progress->start();
        usleep(300000);
        /** @var \Ced\Amazon\Cron\Order\Create $processor */
        $processor = $this->om->create(\Ced\Amazon\Cron\Order\Create::class);
        $processor->setAccountIds($accountIds);
        $processor->execute();

        if ($log) {
            /** @var \Ced\Amazon\Helper\File\Logger $logger */
            $logger = $this->om->create(\Ced\Amazon\Helper\File\Logger::class);
            $logger->info("Order create in Amazon Table cron run by schedule.");
        }

        $progress->advance();
        usleep(300000);
        $progress->finish();
        $output->writeln("");
    }
}
