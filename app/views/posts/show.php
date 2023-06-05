<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <div class="row my-4">
    <div class="col">
      <h1 class="h3 mb-3 fw-normal"><?= $data['post']->title; ?></h1>
      <p>Written by: <?= $data['user']->name; ?> on <?= $data['post']->created_at; ?></p>
    </div>
  </div>
  <div class="row" class="my-3">
    <div class="col">
      <?= $data['post']->body; ?>
    </div>
    <?php if ($_SESSION['user_id'] === $data['post']->user_id) : ?>
      <a href="<?= URLROOT; ?>/posts/edit/<?= $data['post']->id ?>" class="link-dark">Edit</a>
    <?php endif; ?>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>