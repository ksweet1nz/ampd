<?php include('../admin/runtime.php'); ?>
<!doctype html>
<html lang="en">
<?php perch_layout('global.head', [
  'title' => 'Conferences',
]); ?>
<body>
  <div class="container">
  	<?php perch_layout('member.header'); ?>
    <main>
      <div class="member-article">
        <h1>Publication Opportunities</h1>
        <ul>
          <?php perch_content('Conferences'); ?>
        </ul>
      </div>
    </main>
    <?php perch_layout('global.footer'); ?>
  </div>
</body>
</html>
