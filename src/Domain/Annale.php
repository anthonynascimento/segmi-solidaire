<?php

namespace MicroCMS\Domain;

class Annale
{
    private $idAnnale;
    private $nom;
    private $datePublication;
    private $fichier;
    private $niveau;
    private $matiere;
    private $username;

    public function getIdAnnale() { return $this->idAnnale; }
    public function getNom() { return $this->nom; }
    public function getDatePublication() { return $this->datePublication; }
    public function getFichier() { return $this->fichier; }
    public function getNiveau() { return $this->niveau; }
    public function getMatiere() { return $this->matiere; }
    public function getUsername() { return $this->username; }

    public function setIdAnnale($id) { $this->idAnnale = $id; }
    public function setNom($nom) { $this->nom = $nom; }
    public function setDatePublication($date) { $this->datePublication = $date; }
    public function setFichier($fichier) { $this->fichier = $fichier; }
    public function setNiveau($id) { $this->niveau = $id; }
    public function setMatiere($matiere) { $this->matiere = $matiere; }
    public function setUsername($username) { $this->username = $username; }

}
