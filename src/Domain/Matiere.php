<?php

namespace MicroCMS\Domain;

class Matiere
{
    private $idMatiere;
    private $nom;
    private $idNiveau;

    public function getIdMatiere() { return $this->idMatiere; }
    public function getNomMatiere() { return $this->nom; }
    public function getIdNiveau() { return $this->idNiveau; }

    public function setIdMatiere($id) { $this->idMatiere = $id; }
    public function setNomMatiere($mat) { $this->nom = $mat; }
    public function setIdNiveau($id) { $this->idNiveau = $id; }
}
