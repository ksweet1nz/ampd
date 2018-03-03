<?php include('../admin/runtime.php'); ?>
<?php
$post_slug = perch_get('s');
?>
<!doctype html>
<html lang="en">
  <?php perch_layout('global.head', [
    'title' => 'Home',
  ]); ?>
  <body>
    <?php perch_layout('global.topofpage'); ?>
    <main>
      <?php perch_blog_post($post_slug); ?>
    </main>
    <?php perch_layout('global.footer'); ?>
  </body>
</html>
