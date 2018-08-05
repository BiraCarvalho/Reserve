<?php

namespace Application\Ingresso;
use Application\Core;

class Controller extends \Application\Core\Controller
{
    public function index()
    {
      $model = new \Application\Ingresso\Model();
      $view  = new \Application\Ingresso\View();
      $view->render( $model->getData("Ingresso") );
    }
}