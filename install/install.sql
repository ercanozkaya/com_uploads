/*              
KFactory::get('com://admin/files.controller.container')->add(array(
	'title' => 'Demo Container for Uploads',
	'slug' => 'uploads-manage',
	'path' => 'images',
	'parameters' => (object) array(
		'upload_extensions' => 'jpg,jpeg,png,gif,pdf,txt',
		'upload_maxsize' => 10485760,
		'check_mime' => 0
	)
)); */

INSERT INTO `jos_files_containers` (`files_container_id`, `slug`, `title`, `path`, `parameters`)
VALUES
	(NULL, 'uploads-manage', 'Demo Container for Uploads', 'images', '{\"upload_extensions\":\"jpg,jpeg,png,gif,pdf,txt\",\"upload_maxsize\":10485760,\"check_mime\":0}');
