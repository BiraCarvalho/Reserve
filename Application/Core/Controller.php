<?php
namespace Application\Core;
class Controller
{
    public function index()
    {
      $model = new \Application\Core\Model;
      $view  = new \Application\Core\View;
      $view->render($model->getData("<h1>Isso é o Core!</h1>"));
    }
}