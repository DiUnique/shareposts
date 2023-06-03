<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <div class="row my-4">
    <div class="col-xs-12 offset-sm-3 col-sm-6 offset-md-4 col-md-4">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <form>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="floatingName" placeholder="Name">
          <label for="floatingName">Name</label>
        </div>
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
          <label for="floatingEmail">Email</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm password">
          <label for="floatingPassword">Confirm password</label>
        </div>

        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Remember me
          </label>
        </div>
        <button class="btn btn-outline-dark w-100 py-2" type="submit">Sign in</button>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>