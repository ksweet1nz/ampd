<?php include('admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Projects',
]); ?>
<body>
  <div class="container">
    <?php perch_layout('global.header'); ?>
    <main>
        <?php perch_gallery_album_images(perch_get('s'), [
          'template' => 'project_list_image.html',
        ]); ?>
    </main>
    <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
