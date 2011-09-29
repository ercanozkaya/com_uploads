
<?= @helper('behavior.keepalive') ?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route('view=upload') ?>" method="post" class="-koowa-form" enctype="multipart/form-data">
	
    <div id="main" class="grid_8">
        <div class="panel title clearfix">
	        
			<?= @helper('com://admin/files.template.helper.listbox.parent', array(
				'model' => 'folders',
				'text' => 'path',
				'value' => 'path',
				'prompt' => @text('- Folder -'),
				'filter' => array(
					'container' => 'uploads-manage'
				)
			)); ?>
			
        	<input type="file" name="file" />
        	
        	<button>Upload</button>
        </div>
    </div>
</form>
