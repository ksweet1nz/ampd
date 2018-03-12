<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Student Projects',
]); ?>
<body>
  <?php perch_layout('global.header'); ?>
  <main>
    <div class="project-article">
      <h1>Current Projects</h1>
      <ul>
        <?php
         perch_content_custom('Projects',[
            'page' => '/projects/index.php',
            'template' => 'current_projects.html',
          ]);
        ?>
      </ul>
    </div>
  </main>
  <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
