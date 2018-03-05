<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Member Profile',
]); ?>
<body>
  <div class="container">
	<?php perch_layout('global.header'); ?>
	<main>
		<div class="project-article bottom-small">
  		<?php
  			if (perch_member_logged_in()) {
   				echo '<h2>Hi, '.perch_member_get('first_name').'!</h2> This is your profile';
  				perch_member_form('profile.html');

  				echo '<h3>Update your password</h3>';
  				perch_member_form('password.html');
  			}else{
  				echo '<a href="/members/">Please log in</a>';
  			}
  		?>
	  </div>
  	<div class="member-menu">
  			<?php
  				if (perch_member_logged_in()) {
  			?>
  				<ul>
            <li><a href="profile.php">Projects</a></li>
  					<li><a href="profile.php">Edit profile</a></li>
  					<li><a href="logout.php">Log out</a></li>
  				</ul>
  			<?php
  				}else{
  					perch_members_login_form();
  				}
  			?>
  		</div>
	</main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
