<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Member Login',
]); ?>
<body>
	<?php perch_layout('global.topofpage'); ?>
	<main>
		<?php
			if (perch_member_logged_in()) {
				echo '<h3>Welcome back, '.perch_member_get('first_name').'.</h3>';
			}else{
				echo '<h2>AMPD Member Login</h2>';
				echo '<p>Members will have access to current project pages and any information that is relevant to on going research but might not be ready for public viewing.</p>';
				echo '<p>You are not logged in. Please login or <a href="/members/register.php">register</a>.</p>';
			}
		?>
			<?php
				if (perch_member_logged_in()) {
			?>
				<ul>
					<li><a href="myproject.php">Project Page</a></li>
					<li><a href="profile.php">Edit profile</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			<?php
				}else{
					perch_members_login_form();
				}
			?>
	</main>
  <?php perch_layout('global.footer'); ?>
</body>
</html>
