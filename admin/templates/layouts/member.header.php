<header class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="/"><img src="/images/AMPDBannerLogo.svg" /></a>
    </div>
  </div>
  <nav>
    <div class="nav-mobile">
      <a id="nav-toggle" href="#!"><span></span></a>
    </div>
    <ul class="nav-list">
      <li><a href="/">Home</a></li>
      <li><a href="#!">About</a>
        <ul class="nav-dropdown">
          <li><a href="/about/">Facilities</a></li>
          <li><a href="/about/contact.php">Contact</a></li>
          <li><a href="/about/inspiration.php">Inspiration</a></li>
        </ul>
      </li>
      <li><a href="#!">Projects</a>
        <ul class="nav-dropdown">
          <li><a href="/projects/">Current</a></li>
          <li><a href="/projects/archive.php">Archive</a></li>
        </ul>
      </li>
      <li><a href="/members/">Members</a></li>
    </ul>
  </nav>
  <?php
    if (perch_member_logged_in()) {
        perch_layout('member.nav');
      }
  ?>
</header>
