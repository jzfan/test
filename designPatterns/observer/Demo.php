<?php

interface Subjcet{
	public function attach($observable);
	public function detach($index);
	public function notify();
}

interface Observer{
	public function handle();
}

class Login implements Subjcet
{
	protected $observers = [];

	public function attach($observable)
	{
		if(is_array($observable)){
			return $this->attachObservers($observable);
		}

		$this->observers[] = $observable;
		return $this;
	}

	public function detach($index)
	{
		unset($this->observers[$index]);
	}

	public function notify()
	{
		foreach ($this->observers as $observer) {
			$observer->handle();
		}
	}

	private function attachObservers($observers)
	{
		foreach ($observers as $observer) {
			if(! $observer instanceof Observer)
			{
				throw new Exception;
				
			}			
			$this->attach($observer);
		}
	}
}


class Log implements Observer
{
	public function handle()
	{
		echo 'log something about login event' . '<br>';
	}
}

class Email implements Observer
{
	public function handle()
	{
		echo 'fire off an email' . '<br>';
	}
}

$login = new Login;
$login->attach([new Log, new Email]);
$login->notify();
