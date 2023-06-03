<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <div class="row my-4">
    <div class="col-xs-12 offset-sm-3 col-sm-6 offset-md-4 col-md-4">
      <?php flash('register_success'); ?>
      <h1 class="h3 mb-3 fw-normal">Please login</h1>
      <form action="<?= URLROOT; ?>/users/login" method="post">
        <div class="form-floating mb-2">
          <input type="email" name="email" class="form-control <?= (!empty($data['email_err'])) ? 'is-ivalid' : '' ?>" id="floatingEmail" placeholder="name@example.com" value="<?= $data['email']; ?>">
          <span class="invalid-feedback"><?= $data['email_err']; ?></span>
          <label for="floatingEmail">Email</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" name="password" class="form-control <?= (!empty($data['password_err'])) ? 'is-ivalid' : '' ?>" id="floatingPassword" placeholder="Password" value="<?= $data['password']; ?>">
          <span class="invalid-feedback"><?= $data['password_err']; ?></span>
          <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Remember me
          </label>
        </div>

        <div class="row">
          <div class="col">
            <button class="btn btn-outline-dark" type="submit">Log in</button>
          </div>
          <div class="col">
            <a href="<?= URLROOT; ?>/users/register" class="btn">Have not an account yet? Sign-up</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>