<?php

namespace app\controller;

use app\core\Controller;
/**
* 
*/
class Home extends Controller
{
	public function index()
	{
		$user = $this->model('User');
		$names = $user->lists('name');
		$this->view('home/index', ['names'=>$names]);
	}

	public function create($name)
	{

		$user = $this->model('User');
		$user->create([
			'name'=> $name,
		]);

		echo 'created';
	}

}