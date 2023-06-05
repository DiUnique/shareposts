<div class="container">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="<?= URLROOT ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <?= SITENAME ?>
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <li><a href="<?= URLROOT ?>" class="nav-link px-2 text-secondary">Home</a></li>
      <li><a href="<?= URLROOT ?>/pages/about" class="nav-link px-2 text-white">About</a></li>
      <li><a href="<?= URLROOT ?>/posts/index" class="nav-link px-2 text-white">Blog</a></li>
    </ul>

    <div class="text-end">
      <?php if (isset($_SESSION['user_id'])) : ?>
        <p>Welcome, <?= $_SESSION['user_name'] ?>!</p>
        <button type="button" class="btn btn-outline-light me-2">
          <a href="<?= URLROOT; ?>/users/logout" class="text-reset text-decoration-none">Logout</a>
        </button>
      <?php else : ?>
        <button type="button" class="btn btn-outline-light me-2">
          <a href="<?= URLROOT; ?>/users/login" class="text-reset text-decoration-none">Login</a>
        </button>
        <button type="button" class="btn btn-warning">
          <a href="<?= URLROOT; ?>/users/register" class="text-reset text-decoration-none">Sign-up</a>
        </button>
      <?php endif; ?>
    </div>
  </div>
</div>