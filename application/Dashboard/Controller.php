<?php

namespace Application\Dashboard;

class Controller
{
    public function index()
    {
        $modelEspetaculo = new \Application\Espetaculo\Model();

        $data['espetaculos'] = $modelEspetaculo->getAll();

        $modelPoltrona = new \Application\Poltrona\Model();

        $data['poltronas']     =  $modelPoltrona->getOcupadas();
        $data['poltronasJson'] = json_encode( ['poltronas' => $data['poltronas'] ], true);

        $view  = new \Application\Dashboard\View();

        echo $view->render($data);
    }

    public function refreshJson()
    {
        $modelPoltrona     = new \Application\Poltrona\Model();

        $data['poltronas'] =  $modelPoltrona->getOcupadas();

        echo json_encode( ['poltronas' => $data['poltronas'] ], true);

        return;
    }
}