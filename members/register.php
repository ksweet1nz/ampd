<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Member Registration',
]); ?>
<body>
  <?php perch_layout('global.topofpage'); ?>
	<main>

	<?php
		if (perch_member_logged_in()) {
			echo '<p>You are already logged in.</p>';
		}else{
			echo '<h2>Register for AMPD</h2>';
			perch_member_form('register.html');
		}

	?>
	</main>
	<?php perch_layout('global.footer'); ?>
</body>
</html>
