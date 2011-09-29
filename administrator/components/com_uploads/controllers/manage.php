<?php

class ComUploadsControllerManage extends ComDefaultControllerResource
{
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'request' => array(
				'view' => 'manage',
				'layout' => 'default'
			)
		));
		
		parent::_initialize($config);
	}
}