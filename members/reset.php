<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Reset Password',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
  	<?php
  		if (perch_member_logged_in()) {
  			echo '<p>You are already logged in.</p>';
  		}else{
  			echo '<h1>Get a new password</h1>';
  			perch_member_form('reset_password.html');
  		}
  	?>
  </main>
  <?php perch_layout('global.footer'); ?>
  </body>
</html>
