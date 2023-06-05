<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">

  <div class="row">
    <div class="col-sm-12">
      <div class="d-inline-flex p-2">
        <h1><?php echo $data['title']; ?></h1>
        <a href="<?= URLROOT; ?>/posts/add" class="icon-link link-success"><i class=" fa-solid fa-pencil mx-2" aria-hidden="true"></i>Add
          post</a>
      </div>
    </div>
  </div>


  
  <div class="row my-5">
    <?php flash('post_message'); ?>
    <?php foreach ($data['posts'] as $post) : ?>
      <div class="col-sm-6 align-self-center">

        <div class="p-3">
          <h4><?= $post->title ?></h4>
          <p>Wriiten by Author: <?php echo $post->name; ?> on <?php echo $post->created_at; ?></p>
          <a href="<?php echo URLROOT; ?>/posts/show" class="link-dark">More</a>
        </div>
      </div>
      <div class="col-sm-6 my-3">
        <div class="vstack gap-2 col-md-5 mx-auto">
          <a href="<?= URLROOT; ?>/posts/edit" class="icon-link link-warning"><i class="fa-solid fa-pen-to-square mx-2" aria-hidden="true"></i>Edit post</a>
          <a href="<?= URLROOT; ?>/posts/delete" class="icon-link link-danger"><i class="fa-solid fa-trash mx-2" aria-hidden="true"></i>Delete post</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div><!-- container -->

<?php require APPROOT . '/views/inc/footer.php'; ?>