<?php

namespace Application\Core;
use League\Plates;

class View
{
    public $templates;
    
    public function __construct()
    {
        $this->templates = new \League\Plates\Engine();
        $this->templates->addFolder('Templates',__DIR__ . "/../../Templates");
        $this->templates->addFolder('Layouts',  __DIR__ . "/../../Layouts");
    }
    
    public function getTemplate($template)
    {
        return $this->templates->render($template);
    }    
}