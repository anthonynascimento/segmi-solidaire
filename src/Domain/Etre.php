<?php

namespace MicroCMS\Domain;

class Etre
{
    private $idNiveau;
    private $numEtu;

    public function getIdNiveau() { return $this->idNiveau; }
    public function getNumEtu() { return $this->numEtu; }

    public function setIdNiveau($id) { $this->idNiveau = $id; }
    public function setNumEtu($num) { $this->numEtu = $num; }
}
