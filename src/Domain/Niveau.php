<?php

namespace MicroCMS\Domain;

class Niveau
{
    private $idNiveau;
    private $nom;

    public function getIdNiveau() { return $this->idNiveau; }
    public function getNomNiveau() { return $this->nom; }

    public function setIdNiveau($id) { $this->idNiveau = $id; }
    public function setNomNiveau($nom) { $this->nom = $nom; }
}
