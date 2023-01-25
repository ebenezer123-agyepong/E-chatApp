<?php 
  include('../public/partials/head.php');
  use model\Region;
  use utility\Globals;
?>
  
<main class="main">
  <?php 
    $page = 'donor';
    include('../public/partials/side-drawer.php');

    Globals::print('message');
  ?>

  <section class="main__content">
    <?php 
      $pageHeading = 'Donor';
      include('../public/partials/page-header.php');
    ?>

      <!-- Donor specific layout -->
    <section class="py-3">
      <div class="container">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="m-0 text-dark">All Donors</h6>
            <button class="btn btn-info btn-sm toggle-custom-modal">Add Donor</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover display" id="table_id">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Region</th>
                    <th>Blood Group</th>
                    <th></th>
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
        <h5 class="m-0 text-dark">Create donor info</h5>
        <button class="custom-modal__close">
          <i class="fa-solid fa-times"></i>
        </button>
      </div>
      <div class="custom-modal__body">
        <form action="../controller/admin/donor/index.php" method="post">
          <input type="hidden" name="__token" value="$2y$10$v8ZOxda7RwgXAaOib7kvu.MYVjbtcAo6e9G615zBekfMjPiMwmDdG">
          <div class="form-group">
            <label for="first_name" class="mb-1 text-secondary">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name">
          </div>
          <div class="form-group">
            <label for="last_name" class="mb-1 text-secondary">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
          </div>
          <div class="form-group">
            <label for="region" class="mb-1 text-secondary">Region</label>
            <?php
              $regions = Region::all();
              if (count($regions) > 0):
            ?>
              <select name="region" id="region" class="form-control">
                <?php foreach($regions as $region): ?>  
                  <option value="<?php echo $region->id?>"><?php echo $region->name?></option>
                <?php endforeach; ?>
              </select>
            <?php else: ?>
              <p class="m-0">No region available at the moment</p>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="blood_group" class="mb-1 text-secondary">Blood Group</label>
            <select name="blood_group" id="blood_group" class="form-control">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
              <option value="O">O</option>
            </select>
          </div>
          <button class="btn btn-success" type="submit">Save</button>
        </form>
      </div>
    </div>
  </section>
</main>

<script src="../public/js/admin/donor.js"></script>
<?php include('../public/partials/footer.php'); ?>