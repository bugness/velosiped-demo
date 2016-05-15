<?php

namespace Demo\Controller;

use Velosiped\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->getContainer()->getView()->render('index.phtml', ['name' => 'Vasya']);
    }
}
