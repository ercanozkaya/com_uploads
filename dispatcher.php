<?php

class ComUploadsDispatcher extends ComDefaultDispatcher
{
	protected function _initialize(KConfig $config)
    {
        $config->append(array(
        	'request' => array(
        		'view' => 'manage'
        	)
        ));
        parent::_initialize($config);
    }
}