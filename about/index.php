<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'About',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
    <?php perch_content('About'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
</body>
</html>
