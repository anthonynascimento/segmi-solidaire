<?php

namespace MicroCMS\Domain;

class TypeEvenement
{
    private $idType;
    private $nom;

    public function getTypeEventId() { return $this->idType; }
    public function getTypeNom() { return $this->nom; }

    public function setIdType($id) { $this->idType = $id; }
    public function setNomType($nom) { $this->nom = $nom; }
}
