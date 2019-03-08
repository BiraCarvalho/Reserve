<?php

namespace Application\Poltrona;

class Controller
{
  public function index()
  {
    header("Location:/dashboard", 301);
    die();
  }

  public function markPoltrona(int $id, string $poltrona)
  {
    $request['espetaculo_id'] = filter_var($id,       FILTER_SANITIZE_NUMBER_INT);
    $request['poltrona']      = filter_var($poltrona, FILTER_SANITIZE_MAGIC_QUOTES);

    $return = ['danger','Não foi possível reservar esta poltrona!'];

    if(Model::insert($request)){
      $return = ['success','Poltrona reservada com sucesso!'];
    }

    echo json_encode($return);
    return;
  }

  public function unmarkPoltrona(int $id, string $poltrona)
  {
    $request['espetaculo_id'] = filter_var($id,       FILTER_SANITIZE_NUMBER_INT);
    $request['poltrona']      = filter_var($poltrona, FILTER_SANITIZE_MAGIC_QUOTES);

    $return = ['danger','Não foi possível remover a reserva esta poltrona!'];

    if(!Model::delete($request)){
      $return = ['success','Reserva removida com sucesso!'];
    }

    echo json_encode($return);
    return;
  }
}