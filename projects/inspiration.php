<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Inspiration',
]); ?>
<body>
  <div class="container">
  <?php perch_layout('global.header'); ?>
  <main>
    <h1>Projects We Like</h1>
        <?php perch_content('Inspiration'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
