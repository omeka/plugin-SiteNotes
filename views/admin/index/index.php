<?php head(array('title' => 'Site Notes', 'body_class' => 'sitenotes-plugin')); ?>
<h1>Sitenotes</h1>
<p class="add-button"><a href="<?php echo uri('site-notes/edit'); ?>" class="edit">Edit</a></p>

<div id="primary">
	
	<div id="sitenotes">
		
	<?php echo get_option('site_notes_content'); ?>
		
	</div>
	
</div>

<?php foot(); ?>