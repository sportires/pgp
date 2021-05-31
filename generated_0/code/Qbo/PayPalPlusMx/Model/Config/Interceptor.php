<?php
namespace Qbo\PayPalPlusMx\Model\Config;

/**
 * Interceptor class for @see \Qbo\PayPalPlusMx\Model\Config
 */
class Interceptor extends \Qbo\PayPalPlusMx\Model\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Payment\Model\Source\CctypeFactory $cctypeFactory, \Magento\Paypal\Model\CertFactory $certFactory, \Magento\Framework\App\ProductMetadataInterface $metadataInterface, $params = [])
    {
        $this->___init();
        parent::__construct($scopeConfig, $directoryHelper, $storeManager, $cctypeFactory, $certFactory, $metadataInterface, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryMethods($countryCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountryMethods');
        if (!$pluginInfo) {
            return parent::getCountryMethods($countryCode);
        } else {
            return $this->___callPlugins('getCountryMethods', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBuildNotationCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBuildNotationCode');
        if (!$pluginInfo) {
            return parent::getBuildNotationCode();
        } else {
            return $this->___callPlugins('getBuildNotationCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isMethodAvailable($methodCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isMethodAvailable');
        if (!$pluginInfo) {
            return parent::isMethodAvailable($methodCode);
        } else {
            return $this->___callPlugins('isMethodAvailable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportedMerchantCountryCodes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSupportedMerchantCountryCodes');
        if (!$pluginInfo) {
            return parent::getSupportedMerchantCountryCodes();
        } else {
            return $this->___callPlugins('getSupportedMerchantCountryCodes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportedBuyerCountryCodes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSupportedBuyerCountryCodes');
        if (!$pluginInfo) {
            return parent::getSupportedBuyerCountryCodes();
        } else {
            return $this->___callPlugins('getSupportedBuyerCountryCodes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantCountry()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMerchantCountry');
        if (!$pluginInfo) {
            return parent::getMerchantCountry();
        } else {
            return $this->___callPlugins('getMerchantCountry', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isMethodSupportedForCountry($method = null, $countryCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isMethodSupportedForCountry');
        if (!$pluginInfo) {
            return parent::isMethodSupportedForCountry($method, $countryCode);
        } else {
            return $this->___callPlugins('isMethodSupportedForCountry', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPayPalBasicStartUrl($token)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPayPalBasicStartUrl');
        if (!$pluginInfo) {
            return parent::getPayPalBasicStartUrl($token);
        } else {
            return $this->___callPlugins('getPayPalBasicStartUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOrderReviewStepDisabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOrderReviewStepDisabled');
        if (!$pluginInfo) {
            return parent::isOrderReviewStepDisabled();
        } else {
            return $this->___callPlugins('isOrderReviewStepDisabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutStartUrl($token)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutStartUrl');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutStartUrl($token);
        } else {
            return $this->___callPlugins('getExpressCheckoutStartUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutOrderUrl($orderId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutOrderUrl');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutOrderUrl($orderId);
        } else {
            return $this->___callPlugins('getExpressCheckoutOrderUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutEditUrl($token)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutEditUrl');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutEditUrl($token);
        } else {
            return $this->___callPlugins('getExpressCheckoutEditUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutCompleteUrl($token)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutCompleteUrl');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutCompleteUrl($token);
        } else {
            return $this->___callPlugins('getExpressCheckoutCompleteUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStartBillingAgreementUrl($token)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStartBillingAgreementUrl');
        if (!$pluginInfo) {
            return parent::getStartBillingAgreementUrl($token);
        } else {
            return $this->___callPlugins('getStartBillingAgreementUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaypalUrl(array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaypalUrl');
        if (!$pluginInfo) {
            return parent::getPaypalUrl($params);
        } else {
            return $this->___callPlugins('getPaypalUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPayPalIpnUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPayPalIpnUrl');
        if (!$pluginInfo) {
            return parent::getPayPalIpnUrl();
        } else {
            return $this->___callPlugins('getPayPalIpnUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function areButtonsDynamic()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'areButtonsDynamic');
        if (!$pluginInfo) {
            return parent::areButtonsDynamic();
        } else {
            return $this->___callPlugins('areButtonsDynamic', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutShortcutImageUrl($localeCode, $orderTotal = null, $pal = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutShortcutImageUrl');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutShortcutImageUrl($localeCode, $orderTotal, $pal);
        } else {
            return $this->___callPlugins('getExpressCheckoutShortcutImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutInContextImageUrl($localeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutInContextImageUrl');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutInContextImageUrl($localeCode);
        } else {
            return $this->___callPlugins('getExpressCheckoutInContextImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentMarkImageUrl($localeCode, $orderTotal = null, $pal = null, $staticSize = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentMarkImageUrl');
        if (!$pluginInfo) {
            return parent::getPaymentMarkImageUrl($localeCode, $orderTotal, $pal, $staticSize);
        } else {
            return $this->___callPlugins('getPaymentMarkImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentMarkWhatIsPaypalUrl(?\Magento\Framework\Locale\ResolverInterface $localeResolver = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentMarkWhatIsPaypalUrl');
        if (!$pluginInfo) {
            return parent::getPaymentMarkWhatIsPaypalUrl($localeResolver);
        } else {
            return $this->___callPlugins('getPaymentMarkWhatIsPaypalUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSolutionImageUrl($localeCode, $isVertical = false, $isEcheck = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSolutionImageUrl');
        if (!$pluginInfo) {
            return parent::getSolutionImageUrl($localeCode, $isVertical, $isEcheck);
        } else {
            return $this->___callPlugins('getSolutionImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentFormLogoUrl($localeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentFormLogoUrl');
        if (!$pluginInfo) {
            return parent::getPaymentFormLogoUrl($localeCode);
        } else {
            return $this->___callPlugins('getPaymentFormLogoUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalOptionsLogoTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalOptionsLogoTypes');
        if (!$pluginInfo) {
            return parent::getAdditionalOptionsLogoTypes();
        } else {
            return $this->___callPlugins('getAdditionalOptionsLogoTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalOptionsLogoUrl($localeCode, $type = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalOptionsLogoUrl');
        if (!$pluginInfo) {
            return parent::getAdditionalOptionsLogoUrl($localeCode, $type);
        } else {
            return $this->___callPlugins('getAdditionalOptionsLogoUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutButtonFlavors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutButtonFlavors');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutButtonFlavors();
        } else {
            return $this->___callPlugins('getExpressCheckoutButtonFlavors', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutButtonTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutButtonTypes');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutButtonTypes();
        } else {
            return $this->___callPlugins('getExpressCheckoutButtonTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentActions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentActions');
        if (!$pluginInfo) {
            return parent::getPaymentActions();
        } else {
            return $this->___callPlugins('getPaymentActions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequireBillingAddressOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequireBillingAddressOptions');
        if (!$pluginInfo) {
            return parent::getRequireBillingAddressOptions();
        } else {
            return $this->___callPlugins('getRequireBillingAddressOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentAction');
        if (!$pluginInfo) {
            return parent::getPaymentAction();
        } else {
            return $this->___callPlugins('getPaymentAction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutSolutionTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutSolutionTypes');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutSolutionTypes();
        } else {
            return $this->___callPlugins('getExpressCheckoutSolutionTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressCheckoutBASignupOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpressCheckoutBASignupOptions');
        if (!$pluginInfo) {
            return parent::getExpressCheckoutBASignupOptions();
        } else {
            return $this->___callPlugins('getExpressCheckoutBASignupOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function shouldAskToCreateBillingAgreement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldAskToCreateBillingAgreement');
        if (!$pluginInfo) {
            return parent::shouldAskToCreateBillingAgreement();
        } else {
            return $this->___callPlugins('shouldAskToCreateBillingAgreement', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWpsPaymentDeliveryMethods()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWpsPaymentDeliveryMethods');
        if (!$pluginInfo) {
            return parent::getWpsPaymentDeliveryMethods();
        } else {
            return $this->___callPlugins('getWpsPaymentDeliveryMethods', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWppCcTypesAsOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWppCcTypesAsOptionArray');
        if (!$pluginInfo) {
            return parent::getWppCcTypesAsOptionArray();
        } else {
            return $this->___callPlugins('getWppCcTypesAsOptionArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWppPeCcTypesAsOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWppPeCcTypesAsOptionArray');
        if (!$pluginInfo) {
            return parent::getWppPeCcTypesAsOptionArray();
        } else {
            return $this->___callPlugins('getWppPeCcTypesAsOptionArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPayflowproCcTypesAsOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPayflowproCcTypesAsOptionArray');
        if (!$pluginInfo) {
            return parent::getPayflowproCcTypesAsOptionArray();
        } else {
            return $this->___callPlugins('getPayflowproCcTypesAsOptionArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCurrencyCodeSupported($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCurrencyCodeSupported');
        if (!$pluginInfo) {
            return parent::isCurrencyCodeSupported($code);
        } else {
            return $this->___callPlugins('isCurrencyCodeSupported', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function exportExpressCheckoutStyleSettings(\Magento\Framework\DataObject $to)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'exportExpressCheckoutStyleSettings');
        if (!$pluginInfo) {
            return parent::exportExpressCheckoutStyleSettings($to);
        } else {
            return $this->___callPlugins('exportExpressCheckoutStyleSettings', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiAuthenticationMethods()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiAuthenticationMethods');
        if (!$pluginInfo) {
            return parent::getApiAuthenticationMethods();
        } else {
            return $this->___callPlugins('getApiAuthenticationMethods', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiCertificate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiCertificate');
        if (!$pluginInfo) {
            return parent::getApiCertificate();
        } else {
            return $this->___callPlugins('getApiCertificate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBmlPublisherId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBmlPublisherId');
        if (!$pluginInfo) {
            return parent::getBmlPublisherId();
        } else {
            return $this->___callPlugins('getBmlPublisherId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBmlDisplay($section)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBmlDisplay');
        if (!$pluginInfo) {
            return parent::getBmlDisplay($section);
        } else {
            return $this->___callPlugins('getBmlDisplay', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBmlPosition($section)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBmlPosition');
        if (!$pluginInfo) {
            return parent::getBmlPosition($section);
        } else {
            return $this->___callPlugins('getBmlPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBmlSize($section)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBmlSize');
        if (!$pluginInfo) {
            return parent::getBmlSize($section);
        } else {
            return $this->___callPlugins('getBmlSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMethodInstance($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMethodInstance');
        if (!$pluginInfo) {
            return parent::setMethodInstance($method);
        } else {
            return $this->___callPlugins('setMethodInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMethod');
        if (!$pluginInfo) {
            return parent::setMethod($method);
        } else {
            return $this->___callPlugins('setMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethodCode');
        if (!$pluginInfo) {
            return parent::getMethodCode();
        } else {
            return $this->___callPlugins('getMethodCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        if (!$pluginInfo) {
            return parent::setStoreId($storeId);
        } else {
            return $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValue($key, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        if (!$pluginInfo) {
            return parent::getValue($key, $storeId);
        } else {
            return $this->___callPlugins('getValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMethodCode($methodCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMethodCode');
        if (!$pluginInfo) {
            return parent::setMethodCode($methodCode);
        } else {
            return $this->___callPlugins('setMethodCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPathPattern($pathPattern)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPathPattern');
        if (!$pluginInfo) {
            return parent::setPathPattern($pathPattern);
        } else {
            return $this->___callPlugins('setPathPattern', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function shouldUseUnilateralPayments()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldUseUnilateralPayments');
        if (!$pluginInfo) {
            return parent::shouldUseUnilateralPayments();
        } else {
            return $this->___callPlugins('shouldUseUnilateralPayments', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isWppApiAvailabe()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isWppApiAvailabe');
        if (!$pluginInfo) {
            return parent::isWppApiAvailabe();
        } else {
            return $this->___callPlugins('isWppApiAvailabe', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isWppApiAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isWppApiAvailable');
        if (!$pluginInfo) {
            return parent::isWppApiAvailable();
        } else {
            return $this->___callPlugins('isWppApiAvailable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isMethodActive($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isMethodActive');
        if (!$pluginInfo) {
            return parent::isMethodActive($method);
        } else {
            return $this->___callPlugins('isMethodActive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatPrice');
        if (!$pluginInfo) {
            return parent::formatPrice($price);
        } else {
            return $this->___callPlugins('formatPrice', func_get_args(), $pluginInfo);
        }
    }
}
