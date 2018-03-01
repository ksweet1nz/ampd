<?php include('admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Home',
]); ?>
<body>
  <?php perch_layout('global.topofpage'); ?>
  <main>
    <img src="/images/AMPD_Logo.svg" />
    <?php perch_content('Intro'); ?>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/navmenu.js"></script>

</body>

</html>
