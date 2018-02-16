<?php

namespace MicroCMS\Domain;

class Etudiant
{
    private $numEtu;
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $mdp;

    public function getNumEtudiant() { return $this->numEtu; }
    public function getNomEtudiant() { return $this->nom; }
    public function getPrenomEtudiant() { return $this->prenom; }
    public function getEmailEtudiant() { return $this->email; }
    public function getTelEtudiant() { return $this->tel; }
    public function getMdpEtudiant() { return $this->mdp; }

    public function setNumEtudiant($num) { $this->numEtu = $num; }
    public function setNomEtudiant($nom) { $this->nom = $nom; }
    public function setPrenomEtudiant($prenom) { $this->prenom = $prenom; }
    public function setEmailEtudiant($email) { $this->email = $email; }
    public function setTelEtudiant($tel) { $this->tel = $tel; }
    public function setMdpEtudiant($mdp) { $this->mdp = $mdp; }
}