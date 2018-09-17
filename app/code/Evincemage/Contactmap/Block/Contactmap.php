<?php

namespace Evincemage\Contactmap\Block;
use Magento\Framework\View\Element\Template;


class Contactmap extends  Template
{
    public function __construct(Template\Context $context, \Evincemage\Contactmap\Helper\Data $contactmaphelper, array $data = [])
    {
        parent::__construct($context, $data);
        $this->contactmaphelper = $contactmaphelper;
        $this->_isScopePrivate = true;
    }

    public function getApiKey(){ 
    	$store_config_data = $this->contactmaphelper->storeConfigData();
    	return trim($store_config_data['api_url']);
    }
    
    public function getStoreAddress(){ 
    	$store_config_data = $this->contactmaphelper->storeConfigData();
    	return $store_config_data['store_address'];
    }

    public function getMapHeight(){ 
    	$store_config_data = $this->contactmaphelper->storeConfigData();
        if(trim($store_config_data['map_height']) == ""){
        return 400;    
        }
    	return trim($store_config_data['map_height']);
    }

    public function getMarkerImage(){ 
    	$store_config_data = $this->contactmaphelper->storeConfigData();
    	return $store_config_data['marker_image'];
    }

    public function getDefaultAddress(){ 
    	return  __('Evince Development Pvt. Ltd., Sarkhej - Gandhinagar Highway, Vishwas City 1, Sola, Ahmedabad, Gujarat');
    }
}
