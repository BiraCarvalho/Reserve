<?php
namespace Application\Dashboard;
use Application\Core;

class Controller extends \Application\Core\Controller
{
    public function index()
    {
      //$model = new \Application\Dashboard\Model();
      
      $modelEspetaculo = new \Application\Espetaculo\Model();
      $data['espetaculos'] = $modelEspetaculo->getAll();
      
      $modelPoltrona   = new \Application\Poltrona\Model();
      
      $view  = new \Application\Dashboard\View();
      $view->render($data);
    }
}