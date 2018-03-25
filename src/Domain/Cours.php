<?php

namespace MicroCMS\Domain;

class Cours
{
    private $idCours;
    private $nomCours;
    private $description;
    private $niveau;
    private $matiere;
    private $username;


    public function getIdCours() { return $this->idCours; }
    public function getNomCours() { return $this->nomCours; }
    public function getDescription() { return $this->description; }
    public function getNiveau() { return $this->niveau; }
    public function getMatiere() { return $this->matiere; }
    public function getUsername() { return $this->username; }

    public function setIdCours($id) { $this->idCours = $id; }
    public function setNomCours($nom) { $this->nomCours = $nom; }
    public function setDescription($description) { $this->description = $description; }
    public function setNiveau($id) { $this->niveau = $id; }
    public function setMatiere($matiere) { $this->matiere = $matiere; }
    public function setUsername($username) { $this->username = $username; }
}
