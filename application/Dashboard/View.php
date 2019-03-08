<?php

namespace Application\Dashboard;

class View
{
    public function render(array $data = [])
    {
        return \Core\View::getTemplate("Templates::Dashboard", $data);
    }
}