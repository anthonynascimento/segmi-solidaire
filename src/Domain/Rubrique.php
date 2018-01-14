<?php

namespace MicroCMS\Domain;

class Rubrique
{
    private $rub_id;
    private $rub_nom;

    public function getRubriqueId() { return $this->rub_id; }
    public function getNomRubrique() { return $this->rub_nom; }

    public function setNomRubrique($nom) { $this->rub_nom = $nom; }
}
