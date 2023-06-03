<?php require APPROOT . '/views/inc/header.php'; ?>
	
	<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold"><?= $data['title']; ?></h1>
      <p class="col-md-8 fs-4"><?= $data['description']; ?></p>
      <button class="btn btn-outline-dark btn-lg" type="button">Example button</button>
    </div>
  </div>

  <section id="text" class="section section-text">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>Section Header</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ut reiciendis magnam error est quasi architecto in, sint, odit eligendi esse, assumenda fugit repudiandae laudantium aspernatur porro! Nisi, eveniet quae!</p>
        </div>
      </div>
    </div>
  </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>