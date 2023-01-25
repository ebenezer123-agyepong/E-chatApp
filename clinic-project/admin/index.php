<?php
  use utility\Globals;
  use model\User;
  use model\Region;
  use model\Donor;
  include('../public/partials/head.php');
?>

<main class="main">
  <?php
    $page = 'overview'; 
    include('../public/partials/side-drawer.php'); 
  ?>
  <section class="main__content">
    <?php 
      $pageHeading = 'System Overview';
      include('../public/partials/page-header.php'); 

      Globals::print('message');
    ?>

    <!-- Overview specific layout -->
    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-3 col-md-2">
            <div class="border rounded d-flex bg-white p-3 shadow-sm">
              <i class="fa-solid fa-map fa-2x"></i>
              <div class="ml-2">
                <h6 class="text-dark">Region</h6>
                <h4 class="text-info m-0"><?php echo count(Region::all())?></h4>
              </div>
            </div>
          </div>
          <div class="col-3 col-md-2">
            <div class="border rounded d-flex bg-white p-3 shadow-sm">
              <i class="fa-solid fa-user-plus fa-2x"></i>
              <div class="ml-2">
                <h6 class="text-dark">Donors</h6>
                <h4 class="text-info m-0"><?php echo count(Donor::all())?></h4>
              </div>
            </div>
          </div>
          <div class="col-3 col-md-2">
            <div class="border rounded d-flex bg-white p-3 shadow-sm">
              <i class="fa-solid fa-user-shield fa-2x"></i>
              <div class="ml-2">
                <h6 class="text-dark">Users</h6>
                <h4 class="text-info m-0"><?php echo count(User::all())?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </section>
</main>

<?php include('../public/partials/footer.php'); ?>