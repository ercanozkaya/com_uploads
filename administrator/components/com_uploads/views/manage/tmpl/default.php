<?= KFactory::get('com://admin/files.controller.file')
	->container('uploads-manage')
	->display(); ?>

<script>
window.addEvent('domready', function() {
	var logger = new Element('ul').inject($('files-containertree'), 'bottom');
	 
	Files.app.addEvent('beforeNavigate', function(path) {
		logger.adopt(new Element('li', {
			text: 'you are navigating to: '+path
		}));
	});
});
</script>