<?php

namespace Classes;

use Models\ModelConect;

class ClassEvents2 extends ModelConect
{
  #Trazer os dados de eventos do banco
  public function getEvents()
  {
    $b = $this->conectDB()->prepare("select * from events2");
    $b->execute();
    $f = $b->fetchAll(\PDO::FETCH_ASSOC);
    return json_encode($f);
  }
}
