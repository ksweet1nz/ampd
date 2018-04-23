<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Facilities',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
      <h1>AMPD/VUW Facilities</h1>
      <?php perch_content('Facilities'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
</body>
</html>
