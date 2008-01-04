<?php head(array('title' => 'Site Notes', 'body_class' => 'sitenotes-plugin')); ?>

<div id="primary">
	<h1>Sitenotes</h1>
	<form id="sitenotes-form" style="float:left; width: 600px;">
		<fieldset>
			<label for="sitenotes-text">Enter your notes</label>
			<textarea id="sitenotes-text" rows="30" cols="100">Go for it</textarea>
		</fieldset>
		<p id="submits"
		<input type="submit" value="Save" class="submitinput" /> or <a href="#">Cancel</a>
		</p>
	</form>
	<div id="sitenotes-history" style="float:right; width: 280px;">
		<h2>History</h2>
		<ul>
			<li><a href="#">20 December 07</a></li>
			<li><a href="#">20 December 07</a></li>
			<li><a href="#">20 December 07</a></li>
			<li><a href="#">20 December 07</a></li>
		</ul>
	</div>	
	
</div>

<?php foot(); ?>