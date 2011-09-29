<?php

class ComUploadsViewManageHtml extends ComDefaultViewHtml
{
	protected function _initialize(KConfig $config) 
	{
		$config->append(array(
			'auto_assign' => false
		));
		
		parent::_initialize($config);
	}
}