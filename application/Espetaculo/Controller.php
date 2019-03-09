<?php

namespace Application\Espetaculo;

class Controller
{
    public function index()
    {
      header("Location:/dashboard", 301);
      return;
    }

    public function add()
    {
        $request['titulo'] = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_MAGIC_QUOTES);
        $request['valor']  = filter_input(INPUT_POST, 'valor',  FILTER_SANITIZE_STRING);

        $request['valor'] = \Helpers\Format::currencyToIso($request['valor']);

        if( !\Core\Db::connection()->insert('espetaculos', $request) ){
            $_SESSION['__alert']['context'] = 'danger';
            $_SESSION['__alert']['content'] = 'Não foi possível gravar este espetáculo!';
        }

        $_SESSION['__alert']['context'] = 'success';
        $_SESSION['__alert']['content'] = 'Espetáculo registrado com sucesso!';

        header("Location:/dashboard", 301);
        return;
    }

    public function update()
    {
        $model = new Model;

        $where['id']       =  $model->id;

        $request['titulo'] = $model->titulo;
        $request['valor'] = \Helpers\Format::currencyToIso($model->valor);

        if(!\Core\Db::connection()->update('espetaculos', $request, $where) ){
            $_SESSION['__alert']['context'] = 'danger';
            $_SESSION['__alert']['content'] = 'Não foi possível atualizar este espetáculo!';
        }

        $_SESSION['__alert']['context'] = 'success';
        $_SESSION['__alert']['content'] = 'Espetáculo atualizado com sucesso!';

        header("Location:/dashboard", 301);
        return;
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
        return;
    }
}