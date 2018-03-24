<?php include('admin/runtime.php'); ?>
<?php
  $bg = array('RobotClip_01.mp4','RobotClip_02.mp4','RobotClip_03.mp4' );
  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
 ?>
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
        <source src="images/<?php echo $selectedBg ?>" type="video/mp4"></source>
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
