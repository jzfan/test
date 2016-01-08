<?php

require_once __DIR__. '/vendor/autoload.php';

echo "singleton mode:".'<br>';
require 'sigleton/db.php';
echo '<hr>';

echo "decorator mode : ".'<br>';
require 'decorator/CarService.php';

echo "observer mode : ".'<br>';
require 'observer/Demo.php';

echo '<hr>';

echo "adapter mode : ".'<br>';
use Adapter\Person;
use Adapter\Qidian;
use Adapter\eReaderAdapter;
use Adapter\Book;

(new Person)->read(new book);
(new Person)->read(new eReaderAdapter(new Qidian));

