<?php
namespace Magento\Framework\Webapi\ServiceInputProcessor;

/**
 * Interceptor class for @see \Magento\Framework\Webapi\ServiceInputProcessor
 */
class Interceptor extends \Magento\Framework\Webapi\ServiceInputProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Reflection\TypeProcessor $typeProcessor, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Api\AttributeValueFactory $attributeValueFactory, \Magento\Framework\Webapi\CustomAttributeTypeLocatorInterface $customAttributeTypeLocator, \Magento\Framework\Reflection\MethodsMap $methodsMap, ?\Magento\Framework\Webapi\ServiceTypeToEntityTypeMap $serviceTypeToEntityTypeMap = null, ?\Magento\Framework\ObjectManager\ConfigInterface $config = null, array $customAttributePreprocessors = [])
    {
        $this->___init();
        parent::__construct($typeProcessor, $objectManager, $attributeValueFactory, $customAttributeTypeLocator, $methodsMap, $serviceTypeToEntityTypeMap, $config, $customAttributePreprocessors);
    }

    /**
     * {@inheritdoc}
     */
    public function process($serviceClassName, $serviceMethodName, array $inputArray)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        if (!$pluginInfo) {
            return parent::process($serviceClassName, $serviceMethodName, $inputArray);
        } else {
            return $this->___callPlugins('process', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertValue($data, $type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertValue');
        if (!$pluginInfo) {
            return parent::convertValue($data, $type);
        } else {
            return $this->___callPlugins('convertValue', func_get_args(), $pluginInfo);
        }
    }
}
