<?php

namespace MicroCMS\Domain;

class TypeEvent
{
    private $typ_id;
    private $typ_nom;

    public function getTypeEventId() { return $this->typ_id; }
    public function getTypeNom() { return $this->typ_nom; }

    public function setNomType($nom) { $this->typ_id = $nom; }
}
