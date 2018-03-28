<?php include('../../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'The Triple Constraint',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
    <div class="project-article bottom-small">
      <h1>The Triple Constraint</h1>
        <?php perch_content('Triple Constraint'); ?>
    </div>
    <?php perch_layout('member.nav'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
