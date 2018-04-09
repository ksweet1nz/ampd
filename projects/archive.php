<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Projects',
]); ?>
<body>
  <div class="container">
  <?php perch_layout('global.header'); ?>
  <main>
        <?php perch_content('Archive'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
