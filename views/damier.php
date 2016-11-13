<?php ob_start() ; ?>
<div class="col-md-12 center">

	<svg width="350" height="350" class="center">
		
		<?php lign_damier($_GET['nb']); ?>

	</svg>

</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>