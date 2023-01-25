<?php

use utility\Globals;

 include('../public/partials/head.php'); ?>
<body>
  <main class="main">
    <?php
      $page = 'user';
      include('../public/partials/side-drawer.php');
    ?>  

    <section class="main__content">
      <?php
        $pageHeading = 'Users';
        include('../public/partials/page-header.php');

        Globals::print('message');
      ?>

       <!-- Donor specific layout -->
      <section class="py-3">
        <div class="container">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h6 class="m-0 text-dark">All Users</h6>
              <button class="btn btn-info btn-sm toggle-custom-modal">Add admin user</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover display" id="table_id">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Username</th>
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
          <h5 class="m-0 text-dark">Create admin user</h5>
          <button class="custom-modal__close">
            <i class="fa-solid fa-times"></i>
          </button>
        </div>
        <div class="custom-modal__body">
          <form action="../controller/admin/user/index.php" method="post">
            <input type="hidden" name="__token" value="$2y$10$v8ZOxda7RwgXAaOib7kvu.MYVjbtcAo6e9G615zBekfMjPiMwmDdG">
            <div class="form-group">
              <label for="name" class="mb-1 text-secondary">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="username" class="mb-1 text-secondary">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password" class="mb-1 text-secondary">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="confirm_password" class="mb-1 text-secondary">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password">
            </div>
            <button class="btn btn-success" type="submit">Save</button>
          </form>
        </div>
      </div>
    </section>

  </main>

<script src="../public/js/admin/user.js"></script>
<?php include('../public/partials/footer.php'); ?>