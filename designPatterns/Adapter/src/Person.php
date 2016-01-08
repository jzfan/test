<?php

namespace Adapter;

use Book;
use Adapter\interfaces\BookInterface;

class Person{
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
}