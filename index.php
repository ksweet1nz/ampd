<?php include('admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Home',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>

  <div id="videoDiv">
    <div id="videoBlock">
      <video preload="preload" id="video" autoplay="autoplay" loop="loop">
        <source src="images/RobotVideo2.mp4" type="video/mp4"></source>
      </video>
      <div id="videoMessage">
        <?php perch_content('Banner'); ?>
      </div>
    </div>
  </div>
  <main>

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
