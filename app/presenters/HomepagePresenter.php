<?php

/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */


class HomepagePresenter extends BasePresenter
{
    private $v1;
    
    protected function startup()
    {
	parent::startup();
    }

    public function renderDefault()
    {
	    $this->template->v1 = 'aaaaaaaaa';
    }

}
