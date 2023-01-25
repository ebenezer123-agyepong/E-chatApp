<!-- Side Drawer with navigation -->
<aside class="main__side-drawer" id="side-drawer">
  <div class="p-3 rounded d-flex align-items-center mb-4">
    <img src="../public/img/logo.png" alt="Blood Bank Logo">
    <h5 class="m-0">Blood Bank Center</h5>
  </div>
  <h6 class="mb-3">Browse Menu</h6>
  <div class="main__navigation">
    <a href="./" class="main__link <?php echo $page === 'overview' ? 'active': null; ?>">
      <i class="fa-solid fa-chart-line"></i>&nbsp;System Overview
    </a>
    <a href="./region.php" class="main__link <?php echo $page === 'region' ? 'active': null; ?>">
      <i class="fa-solid fa-map"></i>&nbsp;Region
    </a>
    <a href="./donor.php" class="main__link <?php echo $page === 'donor' ? 'active': null; ?>">
      <i class="fa-solid fa-user-plus"></i>&nbsp;Donors
    </a>
    <a href="./user-management.php" class="main__link <?php echo $page === 'user' ? 'active': null; ?>">
      <i class="fa-solid fa-user-cog"></i>&nbsp;User Management
    </a>
  </div>
</aside>