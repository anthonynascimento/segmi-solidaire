<?php

namespace MicroCMS\Domain;

class Livre
{
    private $idLivre;
    private $titre;
    private $auteur;
    private $prix;
    private $niveau;
    private $matiere;
    private $idEtudiant;

    public function getIdLivre() { return $this->idLivre; }
    public function getTitre() { return $this->titre; }
    public function getAuteur() { return $this->auteur; }
    public function getPrix() { return $this->prix; }
    public function getNiveau() { return $this->niveau; }
    public function getMatiere() { return $this->matiere; }
    public function getIdEtudiant() { return $this->idEtudiant; }

    public function setIdLivre($id) { $this->idLivre = $id; }
    public function setTitre($titre) { $this->titre = $titre; }
    public function setAuteur($auteur) { $this->auteur = $auteur; }
    public function setPrix($prix) { $this->prix = $prix; }
    public function setNiveau($niveau) { $this->niveau = $niveau; }
    public function setMatiere($matiere) { $this->matiere = $matiere; }
    public function setIdEtudiant($etudiant) { $this->idEtudiant = $etudiant; }

}
