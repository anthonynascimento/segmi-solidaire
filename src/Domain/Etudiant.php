<?php

namespace MicroCMS\Domain;

class Etudiant
{
    private $etu_num;
    private $etu_nom;
    private $etu_prenom;
    private $etu_email;
    private $etu_telephone;
    private $etu_mdp;

    public function getNumEtudiant() { return $this->etu_num; }
    public function getNomEtudiant() { return $this->etu_nom; }
    public function getPrenomEtudiant() { return $this->etu_prenom; }
    public function getEmailEtudiant() { return $this->etu_email; }
    public function getTelEtudiant() { return $this->etu_telephone; }
    public function getMdpEtudiant() { return $this->etu_mdp; }

    public function setEmail($email) { $this->etu_email = $email; }
    public function setTel($tel) { $this->etu_telephone = $tel; }
    public function setMdp($mdp) { $this->etu_mdp = $mdp; }
}