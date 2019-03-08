<?php

namespace Core;

class View
{
    public function getTemplate(string $template, array $data)
    {
        $templatesEngine = new \League\Plates\Engine();
        $templatesEngine->addFolder('Templates', __DIR__ . "/../templates" );

        return $templatesEngine->render($template, $data);
    }
}