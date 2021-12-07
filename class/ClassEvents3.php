<?php

namespace Classes;

use Models\ModelConect;

class ClassEvents3 extends ModelConect
{
  #Trazer os dados de eventos do banco
  public function getEvents()
  {
    $b = $this->conectDB()->prepare("select * from events3");
    $b->execute();
    $f = $b->fetchAll(\PDO::FETCH_ASSOC);
    return json_encode($f);
  }
}
