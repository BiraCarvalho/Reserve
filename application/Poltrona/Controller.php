<?php

namespace Application\Poltrona;

class Controller
{
  public function index()
  {
    header("Location:/dashboard", 301);
  }

  public function markPoltrona(int $id, string $poltrona)
  {
    $request['espetaculo_id'] = (int)$id;
    $request['poltrona']      = filter_var($poltrona, FILTER_SANITIZE_MAGIC_QUOTES);

    if(!Model::insert($request)){
      $return = ['danger','Não foi possível reservar esta poltrona!'];
    }

    $return = ['success','Poltrona reservada com sucesso!'];

    echo json_encode($return);

    return;
  }

  public function unmarkPoltrona(int $id, string $poltrona)
  {
    $request['espetaculo_id'] = (int)$id;
    $request['poltrona']      = filter_var($poltrona, FILTER_SANITIZE_MAGIC_QUOTES);

    if(!Model::delete($request)){
      $return = ['danger','Não foi possível remover a reserva esta poltrona!'];
    }

    $return = ['success','Reserva removida com sucesso!'];

    echo json_encode($return);

    return;
  }
}