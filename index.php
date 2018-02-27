<?php include('admin/runtime.php'); ?>
<!doctype html>
<html lang="en">

<?php perch_layout('global.head', [
  'title' => 'Home',
]); ?>

<body>
  <section class="navigation">
    <div class="nav-container">
        <div class="brand">
          <?php perch_layout('global.logo'); ?>
        </div>
    </div>
    <?php perch_layout('global.nav'); ?>
  </section>
  <main>
    <img src="/images/AMPD_Logo.svg" />
    <?php perch_content('Intro'); ?>
        <?php PerchUtil::output_debug(); ?>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/navmenu.js"></script>

</body>

</html>
