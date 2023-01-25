<?php 
include('../public/partials/head.php'); 
use utility\Globals;
?>

<main class="main">
  <?php 
    $page = 'region';
    include('../public/partials/side-drawer.php'); 
  ?>
  
  <!-- Main Content -->
  <section class="main__content">
    <?php
      $pageHeading = 'Region';
      include('../public/partials/page-header.php');

      Globals::print('message');
    ?>

    <!-- Region Specific Layout -->
    <section class="py-3">
      <div class="container">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="m-0 text-dark">All Regions</h6>
            <button class="btn btn-info btn-sm toggle-custom-modal">Add Region</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover display" id="table_id">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                  </tr>
                </thead>
                <tbody class="text-secondary"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <section class="custom-modal">
    <div class="custom-modal__container">
      <div class="custom-modal__header">
        <h5 class="m-0 text-dark">Create region</h5>
        <button class="custom-modal__close">
          <i class="fa-solid fa-times"></i>
        </button>
      </div>
      <div class="custom-modal__body">
        <form action="../controller/admin/region/index.php" method="post">
          <input type="hidden" name="__token" value="$2y$10$v8ZOxda7RwgXAaOib7kvu.MYVjbtcAo6e9G615zBekfMjPiMwmDdG">
          <div class="form-group">
            <label for="name" class="mb-1 text-secondary">Name</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>
          <button class="btn btn-success" type="submit">Save</button>
        </form>
      </div>
    </div>
  </section>
</main>

<script src="../public/js/admin/region.js"></script>
<?php include('../public/partials/footer.php'); ?>