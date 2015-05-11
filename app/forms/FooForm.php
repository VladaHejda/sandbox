<?php

class FooForm extends \Nette\Application\UI\Form
{

	public function __construct()
	{
		parent::__construct();
		$this->monitor('Nette\Application\IPresenter');
		$this->monitor('Nette\Application\UI\Presenter');
	}


	protected function attached($obj)
	{
		parent::attached($obj);

		static $n = 1;
		if ($obj instanceof \Nette\Application\IPresenter) {
			\Tracy\Debugger::fireLog($n++);
		}
	}

}
