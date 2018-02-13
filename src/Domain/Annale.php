<?php

namespace MicroCMS\Domain;

class Annale
{
    private $idAnnale;
    private $nom;
    private $date;
    private $idMatiere;

    public function getIdAnnale() { return $this->idAnnale; }
    public function getNomAnnale() { return $this->nom; }
    public function getDateAnnale() { return $this->date; }
    public function getIdMatiere() { return $this->idMatiere}

    public function setIdAnnale($id) { $this->idAnnale = $id; }
    public function setNomAnnale($nom) { $this->nom = $nom; }
    public function setDateAnnale($date) { $this->date = $date; }
    public function setIdMatiere($id) { $this->idMatiere = $id; }
}
