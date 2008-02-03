<?php head(array('title' => 'Site Notes', 'body_class' => 'sitenotes-plugin')); ?>

<div id="primary">
	
	<h1 style="display:block; float:left; width: 6em; margin-bottom:0;">Sitenotes</h1>
	<?php if(has_permission('super')): ?>
	
	<a href="sitenotes/edit/" class="edit" style="padding:6px 18px; display:block;float:right; margin-right: 244px;border-top:1px solid #bbb; border-left:1px solid #bbb; border-right: 1px solid #ccc; border-bottom:1px solid #ccc; width: 4em; font-size:1.2em; background-color:#eee; text-align:center; margin-bottom:1em;background-color:#f5f5f5;
    border:1px solid #dedede;
    border-top:1px solid #eee;
    border-left:1px solid #eee; background-position: 4px 50%;">Edit</a>
	<?php endif; ?>
	<div id="sitenotes" style="width: 600px; clear:both;padding:36px; margin-bottom:36px; border:1px solid #dedede;">
		
	<?php $notes = get_option('sitenotes_text');
	
	echo $notes; ?>
		
	</div>
	
</div>

<?php foot(); ?>