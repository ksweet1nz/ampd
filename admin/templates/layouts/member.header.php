<header class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="/"><img src="/images/AMPDBannerLogo.svg" /></a>
    </div>
  </div>
  <?php
    perch_layout('global.navigation');
    if (perch_member_logged_in()) {
        perch_layout('member.nav');
      }
  ?>
</header>
