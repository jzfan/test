<?php

class DB
{
	public static $instance;

	public static function getInstance()
	{
		if(!isset(self::$instance))
		{
			self::$instance = new DB;
		}
		return self::$instance;
	}

	private function __construct(){}
}

$db = DB::getInstance();
$db2 = DB::getInstance();
echo '<br>';
var_dump($db);
echo '<br>';
var_dump($db2);