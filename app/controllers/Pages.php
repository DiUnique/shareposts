<?php
	class Pages extends Controller {

	public function __construct()
	{
	}

	public function index()
	{

		$data = [
			'title' => 'SharePosts',
			'description' => 'Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.'
		];

		$this->view('pages/index', $data);

	}
		

	public function about()
	{
		$data = [
			'title' => 'SharePosts',
			'description' => 'Simple social network built on the MVC PHP Framework.'
		];

		$this->view('pages/about', $data);
	}
		
		
	}