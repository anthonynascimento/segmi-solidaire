<?php

namespace MicroCMS\Domain;

class Rubrique
{
    private $idRubrique;
    private $nom;

    public function getRubriqueId() { return $this->idRubriqueom; }
    public function getNomRubrique() { return $this->rub_nom; }

    public function setIdRubrique($id) { $this->idRubrique = $id;}
    public function setNomRubrique($nom) { $this->nom = $nom; }
}
