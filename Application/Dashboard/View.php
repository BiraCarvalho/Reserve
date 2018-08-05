<?php
namespace Application\Dashboard;
use Application\Core;

class View extends \Application\Core\View
{
    public function render($data)
    {
        echo $this->getTemplate("Templates::Dashboard");
    }
}