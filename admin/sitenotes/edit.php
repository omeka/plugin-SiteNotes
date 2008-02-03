<?php head(array('title' => 'Site Notes | Edit', 'body_class' => 'sitenotes-plugin')); ?>

<div id="primary">
	<h1>Sitenotes | Edit</h1>
	<?php echo flash(); ?>

	<form id="sitenotes-form" style="float:left; width: 600px;" method="post">
		<fieldset>
			<?php textarea(array('id'=>'sitenotes_text','name'=>'sitenotes_text','rows'=>'20','cols'=>'80'), $notes, 'Edit Your Notes'); ?>
		</fieldset>
		<p id="submits">
		<?php submit()?>
		</p>
	</form>
	
	
</div>


<?php foot(); ?>