<?php
  class Posts extends Controller {
    protected $postModel;
    
    public function __construct() {
      if (! isLoggedIn() ) {
        redirect('users/login');
      }

      $this->postModel = $this->model('Post');
    }

    public function index() {
      // Get posts
      $posts = $this->postModel->getPosts();
      
      $data = [
        'title' => 'Posts',
        'posts' => $posts,
      ];

      $this->view('posts/index', $data);
    }

    public function add()
    {

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'user_id' => $_SESSION['user_id'],
          'title_err' => '',
          'body_err' => '',
        ];

        // Validate title
        if (empty($data['title'])) {
          $data['title_err'] = 'Please enter title';
        }

        // Validate bldy
        if (empty($data['body'])) {
          $data['body_err'] = 'Please enter post text';
        }

        // Make sure no errors
        if (empty($data['title_err']) && empty($data['body_err'])) {
          // Validated
          if ($this->postModel->addPost($data)) {
            flash('post_message', 'Post Added');
            redirect('posts');
          }
        } else {
          // Load view with errors
          $this->view('posts/add', $data);
        }
      } else {
        // Init data
        $data = [
          'title' => '',
          'body' => '',
          'title_err' => '',
          'body_err' => '',
        ];

        // Load view
        $this->view('posts/add', $data);
      }
    }

    public function show($id)
    {
      $post = $this->postModel->getPostById($id);
      $user = $this->postModel->getUserById($post->user_id);
      
      if ($post) {
        $data = [
          'post' => $post,
          'user' => $user
        ];
      }
      
      $this->view('posts/show', $data);
    }

    public function edit($id)
    {
      $post = $this->postModel->getPostById($id);

      if ($post->user_id != $_SESSION['user_id']) {
        redirect('posts');
      }
      
      $user_id = $this->postModel->getUserById($post->user_id);
      
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
          'id' => $id,
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'title_err' => '',
          'body_err' => '',
        ];

        // Validate title
        if (empty($data['title'])) {
          $data['title_err'] = 'Please enter title';
        }

        // Validate bldy
        if (empty($data['body'])) {
          $data['body_err'] = 'Please enter post text';
        }

        // Make sure no errors
        if (empty($data['title_err']) && empty($data['body_err'])) {
          // Validated
          if ($this->postModel->updatePost($data)) {
            flash('post_message', 'Post Updated');
            redirect('posts');
          }
        } else {
          // Load view with errors
          $this->view('posts/edit', $data);
        }
      } else {
        // Init data
        $data = [
          'id' => $id,
          'title' => $post->title,
          'body' => $post->body,
          'title_err' => '',
          'body_err' => '',
        ];

        // Load view
        $this->view('posts/edit', $data);
      }
    }

    public function delete($id)
    {
      if ($this->postModel->deletePost($id)) {
        flash('post_message', 'Post has deleted');
      } else {
        flash('post_message', 'Post has NOT deleted. Write to admin.');
      }
      redirect('posts');
    }
  }