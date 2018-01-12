<?php

namespace MicroCMS\Domain;

class Livre
{
    private $liv_id;
    private $liv_nom;
    private $liv_auteur;
    private $liv_prix;
    private $mat_id;

    public function getLivreId() { return $this->liv_id; }
    public function getLivreNom() { return $this->liv_nom; }
    public function getLivreAuteur() { return $this->liv_auteur; }
    public function getLivrePrix() { return $this->liv_prix; }
    public function getIdMatiere() { return $this->mat_id; }

    public function setLivreNom($nom) { $this->liv_nom = $nom; }
    public function setLivreAuteur($auteur) { $this->liv_auteur = $auteur; }
    public function setLivrePrix($prix) { $this->liv_prix = $prix; }
    public function setIdMatiere($id) { $this->mat_id = $id; }
}
