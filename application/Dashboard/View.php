<?php

namespace Application\Dashboard;

class View
{
    public function render(array $data = [])
    {
        echo \Core\View::getTemplate("Templates::Dashboard", $data);
    }
}