<?php
  class Post
  {
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function addPost($data)
    {
      $this->db->query('INSERT INTO posts (user_id, title, body) VALUES (:user_id, :title, :body)');
      // Bind values
      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);

      // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getPosts()
    {
      $this->db->query('SELECT *,
                        posts.id as postId,
                        users.id as userId
                        FROM posts
                        INNER JOIN users
                        ON posts.user_id = users.id
                        ORDER BY posts.created_at DESC
                      ');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getPostById($id)
    {
      $this->db->query('SELECT * FROM posts WHERE id=:id');
      // Bind values
      $this->db->bind(':id', $id);

      $result = $this->db->single();

      return $result;
    }

    public function updatePost($data)
    {
      $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id=:id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);

      // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
    
    public function deletePost($id)
    {
      $this->db->query('DELETE FROM posts WHERE id=:id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getUserById($id)
    {
      $this->db->query('SELECT * FROM users WHERE id=:id');
      // Bind values
      $this->db->bind(':id', $id);

      $result = $this->db->single();

      return $result;
    }
  }