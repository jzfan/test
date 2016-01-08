<?php

namespace Template;

class B extends Sub
{
	protected function diff()
	{
		echo 'class B action diff <br>';
		return $this;
	}
}