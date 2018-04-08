<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Student Projects',
]); ?>
<body>
  <div class="container">
  	<?php perch_layout('member.header'); ?>
    <main>
      <div class="member-article">
        <h1>Current Projects</h1>
        <?php perch_content('Current Projects'); ?>
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
