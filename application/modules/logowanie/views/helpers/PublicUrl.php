<?php

class Zend_View_Helper_PublicUrl extends Zend_View_Helper_Abstract {

    public function publicUrl() {
		$config = Zend_Controller_Front::getInstance()->getParam('bootstrap');
		$configUrl = $config->getOption('resources');
		$baseUrl = $configUrl['frontController']['baseUrl'];

        $url = $baseUrl.'/public';
        return $url;
    }
}