<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <div class="row my-4">
    <div class="col-xs-12 offset-sm-3 col-sm-6 offset-md-4 col-md-4">
      <h1 class="h3 mb-3 fw-normal">Add post</h1>
      <p>Create a post with this form</p>
      <form action="<?= URLROOT; ?>/posts/add" method="post">

        <div class="form-floating mb-2">
          <input type="text" name="title" class="form-control <?= (!empty($data['title_err'])) ? 'is-invalid' : '' ?>" id="floatingTitle" placeholder="Title">
          <span class="invalid-feedback"><?= $data['title_err']; ?></span>
          <label for="floatingTitle">Title</label>
        </div>

        <div class="form-floating mb-2">
          <textarea name="body" class="form-control <?= (!empty($data['body_err'])) ? 'is-invalid' : '' ?>" placeholder="Body content goes here..." id="floatingBody" style="height: 200px;"></textarea>
          <span class="invalid-feedback"><?= $data['body_err']; ?></span>
          <label for="floatingBody">Body</label>
        </div>

        <div class="row">
          <div class="col">
            <button class="btn btn-outline-dark" type="submit">Add</button>
            <button class="btn btn-danger" type="submit">
              <a href="<?php echo URLROOT; ?>/posts" class="text-reset text-decoration-none">Cancel</a>
            </button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>