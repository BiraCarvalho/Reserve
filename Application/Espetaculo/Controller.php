<?php
namespace Application\Espetaculo;
use Application\Core;
class Controller extends \Application\Core\Controller
{
    public function index()
    {
      $model = new \Application\Espetaculo\Model();
      $view  = new \Application\Espetaculo\View();
      $view->render( $model->getData("<h1>Isso é o Espetaculo!</h1>") );
    }
}