<?php


namespace Albertpatera\Template;
use Buonzz\Template\YourClass AS Base;
use Nette;

class netteComponent extends Nette\Application\UI\Presenter
{
    protected function createComponentBase()
    {
        $baseComp = new Nette\Application\UI\Form;


        return $baseComp;

    }
}