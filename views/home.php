<?php ob_start() ; ?>
<div class="col-md-12">
	<form action="/index.php/damier" method="get">
		<h3>Taille</h3>
		<input type="number" value="1" min="1" max="50" name="nb">
		<input type="submit" value="generate" class="btn btn-default">
	</form>
</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>