<?php

use Nette\Application\UI\Form;

/**
 * Description of t1Presenter
 *
 * @author zednikp
 */
class Table1Presenter extends BasePresenter {

    /**
     * (non-phpDoc)
     *
     * @see Nette\Application\Presenter#startup()
     */
    protected function startup() {
	parent::startup();
    }

    public function actionDefault() {
	
    }

    public function renderDefault() {
	
    }
    
    protected function createComponentTable1Form($name)
    {

	$form = new Form($this, $name);
	$form->addText('text', 'Úkol:', 40, 100)
	    ->addRule(Form::FILLED, 'Je nutné zadat text úkolu.');
	$form->addSubmit('create', 'Vytvořit');
	return $form;
    }
    
}