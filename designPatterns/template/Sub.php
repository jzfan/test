<?php

namespace Template;

abstract class Sub
{
	public function make()
	{
		return $this->one()->two()->diff()->three();
	}

	protected function one()
	{
		echo 'action one <br>';
		return $this;
	}

	protected function two()
	{
		echo 'action two <br>';
		return $this;
	}

	protected function three()
	{
		echo 'action three <br>';
		return $this;
	}

	protected abstract function diff();
}