<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <div class="row my-4">
    <div class="col-xs-12 offset-sm-3 col-sm-6 offset-md-4 col-md-4">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <form action="<?= URLROOT; ?>/users/register" method="post">
        <div class="form-floating mb-2">
          <input type="text" name="name" class="form-control <?= (!empty($data['name_err'])) ? 'is-inivalid' : '' ?>" id="floatingName" placeholder="Name" value="<?= $data['name']; ?>">
          <span class="invalid-feedback"><?= $data['name_err']; ?></span>
          <label for="floatingName">Name</label>
        </div>
        <div class="form-floating mb-2">
          <input type="email" name="email" class="form-control <?= (!empty($data['email_err'])) ? 'is-inivalid' : '' ?>" id="floatingEmail" placeholder="name@example.com" value="<?= $data['email']; ?>">
          <span class="invalid-feedback"><?= $data['email_err']; ?></span>
          <label for="floatingEmail">Email</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" name="password" class="form-control <?= (!empty($data['password_err'])) ? 'is-inivalid' : '' ?>" id="floatingPassword" placeholder="Password" value="<?= $data['password']; ?>">
          <span class="invalid-feedback"><?= $data['password_err']; ?></span>
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" name="confirm_password" class="form-control <?= (!empty($data['confirm_password_err'])) ? 'is-inivalid' : '' ?>" id="floatingConfirmPassword" placeholder="Confirm password" value="<?= $data['confirm_password']; ?>">
          <span class="invalid-feedback"><?= $data['confirm_password_err']; ?></span>
          <label for="floatingPassword">Confirm password</label>
        </div>

        <div class="row">
          <div class="col">
            <button class="btn btn-outline-dark" type="submit">Sign in</button>
          </div>
          <div class="col">
            <a href="<?= URLROOT; ?>/users/login" class="btn">Have an account? Login</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>