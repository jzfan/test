<?php

interface logger
{
	public function log($data);
}

class logToFile implements logger
{
	public function log($data)
	{
		echo 'log to file<br>';
	}
}

class logToDB implements logger
{
	public function log($data)
	{
		echo 'log to DB<br>';
	}
}

class logToWeb implements logger
{
	public function log($data)
	{
		echo 'log to Web<br>';
	}
}

class app
{
	public function doLog($data, Logger $logger=null)
	{
		$logger = $logger ? : new logToFile;
		$logger->log($data);
	}
}

$app = new app;
$app->doLog('some data', new logToDB);
$app->doLog('some data', new logToFile);
$app->doLog('some data', new logToWeb);
$app->doLog('some data');