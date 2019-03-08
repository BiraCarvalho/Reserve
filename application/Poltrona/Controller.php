<?php

namespace Application\Poltrona;

class Controller
{
  public function index()
  {
    header("Location:/dashboard", 301);
  }

  public function insertAjax(int $id, string $poltrona)
  {
    $request['espetaculo_id'] = (int)$id;
    $request['poltrona']      = filter_var($poltrona, FILTER_SANITIZE_MAGIC_QUOTES);

    if( !\Core\Db::connection()->insert('poltronas', $request) ){

      $return = ['danger','Não foi possível reservar esta poltrona!'];

    }

    $return = ['success','Poltrona reservada com sucesso!'];

    echo json_encode($return);

    return;
  }

  public function deleteAjax(int $id, string $poltrona)
  {
    $request['espetaculo_id'] = (int)$id;
    $request['poltrona']      = filter_var($poltrona, FILTER_SANITIZE_MAGIC_QUOTES);

    if( !\Core\Db::connection()->delete('poltronas', $request) ) {
      $return = ['danger','Não foi possível remover a reserva esta poltrona!'];
    }

    $return = ['success','Reserva removida com sucesso!'];

    echo json_encode($return);

    return;
  }
}