<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Projects',
]); ?>
<body>
  <?php perch_layout('global.nav'); ?>
  <main>
    <?php perch_content('Archive'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
</body>
</html>
