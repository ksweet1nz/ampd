<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Projects',
]); ?>
<body>
  <div class="container">
  	<?php perch_layout('member.header'); ?>
    <main>
      <h1><?php perch_content('Member Page Heading'); ?></h1>
    </main>
    <?php perch_layout('global.footer'); ?>
  </div>
</body>
</body>
</html>
