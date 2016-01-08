<?php

namespace Adapter;
use Adapter\interfaces\eReaderInterface;

class Qidian implements eReaderInterface{
	public function turnOn()
	{
		var_dump('turn on the qidian app.');
	}

	public function clickNext()
	{
		var_dump('click the next page button.');
	}
}