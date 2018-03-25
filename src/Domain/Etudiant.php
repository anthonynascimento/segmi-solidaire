<?php

namespace MicroCMS\Domain;

class Etudiant
{
    private $idEtudiant;
    private $username;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $mdp;

    public function getIdEtudiant() { return $this->idEtudiant; }
    public function getUsername() { return $this->username; }

    public function getNom() { return $this->nom; }
    public function getPrenom() { return $this->prenom; }
    public function getEmail() { return $this->email; }
    public function getTelephone() { return $this->telephone; }
    public function getMdp() { return $this->mdp; }

    public function setIdEtudiant($id) { $this->idEtudiant = $id; }
    public function setUsername($username) { $this->username = $username; }

    public function setNom($nom) { $this->nom = $nom; }
    public function setPrenom($prenom) { $this->prenom = $prenom; }
    public function setEmail($email) { $this->email = $email; }
    public function setTelephone($tel) { $this->telephone = $tel; }
    public function setMdp($mdp) { $this->mdp = $mdp; }
}