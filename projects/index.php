<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Projects',
]); ?>
<body>
  <div class="container">
    <?php perch_layout('global.header'); ?>
    <main>
      <article class="project-article">
        <h1>2018 Projects</h1>
        <ul class="project-list">
          <?php
            perch_content_custom('Projects', array(
              'template'=>'project-list.html',
              'page'=>'/projects/index.php'
            ));
          ?>
        </ul>
      </article>
      <?php perch_content('Projects'); ?>
    </main>
    <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
