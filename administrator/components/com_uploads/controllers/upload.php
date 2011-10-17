<?php

class ComUploadsControllerUpload extends ComDefaultControllerDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->registerCallback('before.add', array($this, 'beforeAdd'));
	}

	public function beforeAdd(KCommandContext $context)
	{
		$context->data->file = KRequest::get('files.file.tmp_name', 'raw');
		$context->data->path = KRequest::get('files.file.name', 'koowa:filter.filename');
	}
	
	protected function _actionAdd(KCommandContext $context)
	{
		$controller = $this->getService('com://admin/files.controller.file', array('request' => array('container' => 'uploads-manage')));
		
		try {
			$data = $controller->add(array(
				'file' => $context->data->file,
				'path' => $context->data->path,
				'parent' => $context->data->parent
			));
			$context->status = KHttpResponse::CREATED;
		}
		catch (KControllerException $e) {
			$context->setError($e);
		}

		$folder = $data->parent ? $data->parent : 'the root folder';
		
		$this->_redirect_message = sprintf('%s is successfully uploaded to %s', $data->name, $folder);
		
		return $data;
	}	
}
