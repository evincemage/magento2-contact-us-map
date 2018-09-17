<?php

namespace Evincemage\Contactmap\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	public function __construct(
    	\Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
	 public function storeConfigData(){
	        $data = array();

	        $data['api_url'] = $this->scopeConfig->getValue('contactmap/active_display/api_url', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

	        $data['store_address'] = $this->scopeConfig->getValue('contactmap/active_display/store_address', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

	        $data['marker_image'] = $this->scopeConfig->getValue('contactmap/active_display/marker_image', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

	        $data['map_height'] = $this->scopeConfig->getValue('contactmap/active_display/map_height', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

	        return $data;
	    }
}