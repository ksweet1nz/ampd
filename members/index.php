
<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">

<?php perch_layout('global.head', [
  'title' => 'Members',
]); ?>

<body>
  <?php perch_layout('global.nav'); ?>
  <main>
    <?php perch_members_form('register.php'); ?>

  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/navmenu.js"></script>
<?php PerchUtil::output_debug(); ?>
</body>

</html>
