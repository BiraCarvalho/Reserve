<?php

namespace Application\Espetaculo;

class Controller
{
    public function index()
    {
      header("Location:/dashboard", 301);
      die();
    }

    public function add()
    {
        $request['titulo'] = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_MAGIC_QUOTES);
        $request['valor']  = filter_input(INPUT_POST, 'valor',  FILTER_SANITIZE_STRING);

        //Formatação moeda de pt_br para iso
        $request['valor']  = explode(',',$request['valor']);
        $request['valor']  = $request['valor'][0] ."." . $request['valor'][1];

        if( !\Core\Db::connection()->insert('espetaculos', $request) ){
            $_SESSION['__alert']['context'] = 'danger';
            $_SESSION['__alert']['content'] = 'Não foi possível gravar este espetáculo!';
        }

        $_SESSION['__alert']['context'] = 'success';
        $_SESSION['__alert']['content'] = 'Espetáculo registrado com sucesso!';

        header("Location:/dashboard", 301);
        die();
    }

    public function update()
    {
        $where['id'] = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $request['titulo'] = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_MAGIC_QUOTES);
        $request['valor']  = filter_input(INPUT_POST, 'valor');

        //Formatação moeda de pt_br para iso
        $request['valor']  = explode(',',$request['valor']);
        $request['valor']  =  $request['valor'][0] ."." . $request['valor'][1];

        if(!\Core\Db::connection()->update('espetaculos', $request, $where) ){
            $_SESSION['__alert']['context'] = 'danger';
            $_SESSION['__alert']['content'] = 'Não foi possível atualizar este espetáculo!';
        }

        $_SESSION['__alert']['context'] = 'success';
        $_SESSION['__alert']['content'] = 'Espetáculo atualizado com sucesso!';

        header("Location:/dashboard", 301);
        die();
    }

    public function delete(int $id)
    {
        $request['id']  = (int)$id;

        if( !\Core\Db::connection()->delete('espetaculos', $request) ){
            $_SESSION['__alert']['context'] = 'danger';
            $_SESSION['__alert']['content'] = 'Não foi possível deletar este espetáculo!';
        }

        $_SESSION['__alert']['context'] = 'success';
        $_SESSION['__alert']['content'] = 'Espetáculo deletado com sucesso!';

        header("Location:/dashboard", 301);
        die();
    }
}