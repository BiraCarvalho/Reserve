<?php
namespace Application\Evento;
use Application\Core;
class Controller extends \Application\Core\Controller
{
    public function index()
    {
      $model = new \Application\Evento\Model();
      $view  = new \Application\Evento\View();
      $view->render( $model->getData("<h1>Isso é o Evento!</h1>") );
    }
}