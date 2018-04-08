<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Readings',
]); ?>
<body>
  <div class="container">
  	<?php perch_layout('member.header'); ?>
    <main>
      <div class="member-article">
        <h1>Suggested References</h1>
        <p>
          This is an organic list that will grow as I add to it. I am doing my best to categorize them and allow you to filter the list based on those categories. Hopefully in the future I can also provide a direct link to any content available online or to the library.
        </p>
        <div class="categories">
          <?php perch_categories([
            'set' => 'Readings',
            'template' => 'ampd_category.html',
          ]);
          ?>
        </div>
        <hr  />
        <div id="readings" class="readings">
          <?php
            perch_content_custom('Readings2', [
              'page' => '/students/readings.php',
              'template' => ('readings2.html'),
              'category' => perch_get('item'),
            ]);
          ?>
        </div>
      </div>
    </main>
    <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
