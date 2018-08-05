<?php
namespace Application\Dashboard;
use Application\Core;

class Controller extends \Application\Core\Controller
{
    public function index()
    {
      $model = new \Application\Dashboard\Model();
      $view  = new \Application\Dashboard\View();
      $view->render( $model->getData(["titulo" => "Isso é o Dashboard!"]));
    }
}