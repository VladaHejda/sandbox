<?php

namespace App\Presenters;

use Nette\Application\UI\Form;


class ZooPresenter extends BasePresenter
{

	public function actionDefault($meal, array $animals)
	{
	}


	public function createComponentFeedForm()
	{
		$form = new Form;
		$form->setMethod(Form::GET);

		$form->addText('meal', 'Meal:')
			->setRequired();

		$form->addMultiSelect('animals', 'Select animals:', ['dog', 'cat', 'horse'])
			->setRequired();

		$form->addSubmit('feed', 'Feed!');

		return $form;
	}

}
