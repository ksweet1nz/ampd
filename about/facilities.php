<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Inspiration',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
      <h1>AMPD Facilities</h1>
      <?php perch_content('Facilities'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
</body>
</html>
