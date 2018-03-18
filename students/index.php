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
    <div class="project-article bottom-small">
      <h1>Readings</h1>
      <div class="categories">
        <?php perch_categories([
          'set' => 'Readings',
          'template' => 'ampd_category.html',
        ]);
        ?>
      </div>
      <div id="readings" class="readings">
        <?php if (perch_member_has_tag('student')) {
          perch_content_custom('Readings2', [
            'page' => '/students/index.php',
            'template' => ('readings2.html'),
            'category' => perch_get('item'),
          ]);
        };
        ?>
      </div>
    </div>
    <?php perch_layout('member.nav'); ?>
  </main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
