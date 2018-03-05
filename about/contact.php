<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Contact',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
    <?php perch_content('Contact Form'); ?>
    <?php perch_content('Contact'); ?>
    <?php perch_content('Map'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
</body>
</html>
