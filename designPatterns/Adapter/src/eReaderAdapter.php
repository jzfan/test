<?php

namespace Adapter;
use Adapter\interfaces\BookInterface;
use Adapter\interfaces\eReaderInterface;

class eReaderAdapter implements BookInterface
{
	public $eBook;

	public function __construct(eReaderInterface $eBook)
	{
		$this->eBook = $eBook;
	}
	public function open()
	{
		return $this->eBook->turnOn();
	}

	public function turnPage()
	{
		return $this->eBook->clickNext();
	}
}