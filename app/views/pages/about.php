<?php require APPROOT . '/views/inc/header.php'; ?>

	<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold"><?= $data['title']; ?></h1>
      <p class="col-md-8 fs-4"><?= $data['description']; ?></p>
      <p class="col-md-8 fs-4">Version: <span class="fw-bold"><?= APPVERSION; ?></span></p>
      <button class="btn btn-outline-dark btn-lg" type="button">Example button</button>
    </div>
  </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>