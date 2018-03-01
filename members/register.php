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
			echo '<h2>Register</h2>';
			perch_member_form('register.html');
		}

	?>
			<?php
				if (perch_member_logged_in()) {
			?>
				<ul>
					<li><a href="profile.php">Edit profile</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>

			<?php
				}else{
					perch_members_login_form();
				}
			?>
	</main>
</body>
</html>
