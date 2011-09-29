<?php

class ComUploadsViewManageHtml extends ComDefaultViewHtml
{
	protected function _initialize(KConfig $config) 
	{
		$config->append(array(
			'auto_assign' => false,
			'layout' => 'default'
		));
		
		parent::_initialize($config);
	}
}