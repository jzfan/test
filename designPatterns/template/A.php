<?php

namespace Template;

class A extends Sub
{
	protected function diff()
	{
		echo 'class A action diff <br>';
		return $this;
	}
}