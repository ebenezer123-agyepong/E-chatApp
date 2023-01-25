<!-- Page Header -->
<header class="p-3 border-bottom d-flex justify-content-between align-items-center">
  <h5 class="m-0 text-info">
    <i class="fa-solid fa-map"></i>&nbsp;<?php echo $pageHeading; ?>
  </h5>
  <div class="main__content-collapse d-flex">
    <button class="main__link main__link-btn" id="toggle-collapse">
      <i class="fa-solid fa-user"></i>&nbsp;<i class="fa-solid fa-caret-down"></i>
    </button>
    <button class="main__link main__link-btn main__link-drawer" id="toggle-side-drawer">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="main__collapse" id="collapse">
      <a href="./profile.php" class="main__link">
        <i class="fa-solid fa-user-cog"></i>&nbsp;Profile
      </a>
      <form action="../controller/admin/logout.php" method="post">
        <button type="submit" class="main__link main__link-form-btn">
          <i class="fa-solid fa-sign-out-alt"></i>&nbsp;Logout
        </button>
      </form>
    </div>
  </div>
</header>