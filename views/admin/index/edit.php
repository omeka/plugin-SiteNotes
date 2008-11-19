<?php head(array('title' => 'Site Notes | Edit', 'body_class' => 'site-notes')); ?>
<h1>Site Notes | Edit</h1>

<div id="primary">
	<form method="post" id="site-notes-form">
		<div class="field">
			<label for="site_notes_content">Note Content</label>
			<div class="inputs">
			<textarea name="site_notes_content" id="site_notes_content" rows="20" cols="64"><?php echo get_option('site_notes_content'); ?></textarea>
			</div>
		</div>
		<input type="submit" class="submit submit-medium" value="Save Note" />
	</form>
</div>

<?php foot(); ?>