<?php

namespace MicroCMS\Domain;

class Matiere
{
    private $mat_id;
    private $mat_nom;
    private $niv_id;

    public function getIdMatiere() { return $this->mat_id; }
    public function getNomMatiere() { return $this->mat_nom; }
    public function getIdNiveau() { return $this->niv_id; }

    public function setNomMatiere($mat) { $this->mat_nom = $mat; }
    public function setIdNiveau($id) { $this->niv_id = $id; }
}
