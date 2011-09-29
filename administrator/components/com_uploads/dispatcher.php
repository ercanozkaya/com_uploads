<?php

class ComUploadsDispatcher extends ComDefaultDispatcher
{
	protected function _initialize(KConfig $config)
    {
        $config->append(array(
        	'controller' => 'manage'
        ));
        parent::_initialize($config);
    }
}