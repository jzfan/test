<?php

namespace app\core;
/**
* 
*/
class App
{
	protected $controller = 'app\\controller\\home';

	protected $method = 'index';

	protected $params;
	
	public function __construct()
	{
		$url = $this->parseUrl();
		if(isset($url[0]) && file_exists('../app/controller/' .$url[0]. '.php'))
		{
			$this->controller = 'app\\controller\\' . $url[0];
			unset($url[0]);
		}
		$this->controller = new $this->controller;
		// $this->controller = new '\\app\\controller\\' . $this->controller;
		if(isset($url[1]) && method_exists($this->controller, $url[1]))
		{
			$this->method = $url[1];
			unset($url[1]);
		}
		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseUrl()
	{
		if(isset($_GET['url']))
		{
			return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			
		}
	}
}