<?php

namespace MicroCMS\Domain;

class Niveau
{
    private $niv_id;
    private $niv_nom;

    public function getIdNiveau() { return $this->niv_id; }
    public function getNomNiveau() { return $this->niv_nom; }

    public function setNomNiveau($nom) { $this->niv_nom = $nom; }
}
