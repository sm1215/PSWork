<?php //logout.php
	require_once 'header.php';

	logout();
?>

	<div id="main">
		<div class="col-280 logout">
			<p>You have been successfully logged out!</p><br/>
			<?php $webpath = get_webpath(); ?>
			<a href="<?php echo $webpath; ?>/main.php">Click here to go back to the main page</a>
		</div>
	</div>