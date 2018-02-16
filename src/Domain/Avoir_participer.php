<?php

namespace MicroCMS\Domain;

class Avoir_participer
{
    private $idMatiere;
    private $numEtu;

    public function getIdMatiere() { return $this->idMatiere; }
    public function getNumEtu() { return $this->numEtu; }

    public function setIdMatiere($id) { $this->idMatiere = $id; }
    public function setNumEtu($num) { $this->numEtu = $num; }
}
