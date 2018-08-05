<?php

namespace Application\Poltrona;
use Application\Core;

class Controller extends \Application\Core\Controller
{
    public function index()
    {
      $model = new \Application\Poltrona\Model();
      $view  = new \Application\Poltrona\View();
      $view->render( $model->getData("<h1>Isso é o Poltrona!</h1>") );
    }
}