<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {

	public function index() {

		$blogs = App::get('database')->selectAll('blogs');

		return view('users', compact('blogs'));
	}

	public function store() {

		App::get('database')->insert('blogs', [
			'title' => $_POST['title'],
			'body' => $_POST['body'],
			'owner' => $_POST['owner']
		]);

		return redirect('/users');
	}

	public function posts() {

		$blogs = App::get('database')->selectAll('blogs');
		
		return view('posts', compact('blogs'));
	}
}