<?php

namespace MicroCMS\Domain;

class Livre
{
    private $idLivre;
    private $nom;
    private $auteur;
    private $prix;
    private $idMatiere;

    public function getLivreId() { return $this->idLivre; }
    public function getLivreNom() { return $this->nom; }
    public function getLivreAuteur() { return $this->auteur; }
    public function getLivrePrix() { return $this->prix; }
    public function getIdMatiere() { return $this->idMatiere; }

    public function setLivreId($id) { $this->idLivre = $id; }
    public function setLivreNom($nom) { $this->nom = $nom; }
    public function setLivreAuteur($auteur) { $this->auteur = $auteur; }
    public function setLivrePrix($prix) { $this->prix = $prix; }
    public function setIdMatiere($id) { $this->idMatiere = $id; }
}
