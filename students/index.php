<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Student Home',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
    <div class="project-article">
      <h1>Publication Opportunities</h1>
      <ul>
        <?php if (perch_member_has_tag('student')) {
          perch_content('Conferences');
        };
        ?>
      </ul>
    </div>
    <div class="project-article">
      <h1>Readings</h1>
      <ul>
        <?php if (perch_member_has_tag('student')) {
          perch_content('Readings');
        };
        ?>
      </ul>
    </div>

  </main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
