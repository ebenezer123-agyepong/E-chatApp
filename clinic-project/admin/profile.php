<?php 
  include('../public/partials/head.php'); 
  use model\User;
  use utility\Globals;
  
  $user = User::find($_SESSION['user_id']);
?>

<main class="main">
  <?php
    $page = 'profile';
    include('../public/partials/side-drawer.php');
  ?>
  <section class="main__content">
    <?php 
      $pageHeading = 'Profile';
      include('../public/partials/page-header.php');

      Globals::print('message');
    ?>

    <div class="container mt-3">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h6 class="m-0 text-dark">Profile Information</h6>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $user->name; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $user->username; ?>" readonly>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h6 class="m-0 text-dark">Change Password</h6>
            </div>
            <div class="card-body">
              <form action="../controller/admin/user/change-password.php" method="POST">
                <input type="hidden" name="__token" value="$2y$10$v8ZOxda7RwgXAaOib7kvu.MYVjbtcAo6e9G615zBekfMjPiMwmDdG">
                <div class="form-group">
                  <label for="current_password">Current Password</label>
                  <input type="password" name="current_password" id="current_password" class="form-control">
                  <small class="text-danger">
                    <?php echo Globals::session('current_password_err'); ?>
                  </small>
                </div>
                <div class="form-group">
                  <label for="new_password">New Password</label>
                  <input type="password" name="new_password" id="new_password" class="form-control">
                  <small class="text-danger">
                    <?php echo Globals::session('new_password_err'); ?>
                  </small>
                </div>
                <div class="form-group">
                  <label for="confirm_password">Confirm New Password</label>
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                  <small class="text-danger">
                    <?php echo Globals::session('confirm_password_err'); ?>
                  </small>
                </div>
                <input type="submit" value="Submit" class="btn btn-success">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include('../public/partials/footer.php'); ?>