<?php

require_once __DIR__. '/vendor/autoload.php';

echo 'loaded';
echo '<hr>';

$test = new Test\SomeClass();
$test->show();

$db = new mysqli();
