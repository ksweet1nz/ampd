<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Member Login',
]); ?>
<body>
	<div class="container">
	<?php perch_layout('global.header'); ?>
	<main>
		<div class="project-article bottom-small">
		<?php
			if (perch_member_logged_in()) {
				echo '<h2>Welcome back, '.perch_member_get('first_name').'.</h2>';
        echo '<p>What would you like to do today?</p>';
			}else{
				echo '<h2>AMPD Member Login</h2>';
				echo '<p>Members will have access to current project pages and any information that is relevant to on going research but might not be ready for public viewing.</p>';
				echo '<p>You are not logged in. Please login or <a href="/members/register.php">register</a>.</p>';
			}
		?>
			<?php
				if (perch_member_logged_in()) {
			?>
			</div>
			<div class="member-menu">
				<ul>
					<li><a href="/students/">Projects</a></li>
					<li><a href="profile.php">Edit profile</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</div>
			<?php
				}else{
					perch_members_login_form();
				}
			?>
	</main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
