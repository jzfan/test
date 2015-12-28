<?php

namespace app\core;

/**
* 
*/
class Controller
{
	public function model($model)
	{
		$model = 'app\\model\\' . $model;
		return new $model;
	}

	public function view($view, $data=[])
	{
		require_once '../app/view/' .$view. '.php';
	}
}