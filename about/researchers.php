<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Researchers',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
      <h1>AMPD Researchers</h1>
      <?php perch_content('Researchers'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
</body>
</html>
