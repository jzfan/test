<?php

require_once __DIR__. '/vendor/autoload.php';

echo 'load from :';
echo '<hr>';

$test = new src\SomeClass();
$test->show();

use Acme\Test;

new Test;

new Helper;

new A;
new B;
$db = new mysqli();
