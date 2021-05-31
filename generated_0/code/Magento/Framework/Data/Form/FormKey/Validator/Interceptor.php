<?php
namespace Magento\Framework\Data\Form\FormKey\Validator;

/**
 * Interceptor class for @see \Magento\Framework\Data\Form\FormKey\Validator
 */
class Interceptor extends \Magento\Framework\Data\Form\FormKey\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($formKey);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($request);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }
}
