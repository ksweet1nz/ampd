<?php include('admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Home',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
    <?php perch_content('Banner'); ?>
    <?php perch_blog_custom([
      'count'      => 10,
      'template'   => 'ampd_post_in_list.html',
      'sort'       => 'postDateTime',
      'sort-order' => 'DESC',
    ]); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
