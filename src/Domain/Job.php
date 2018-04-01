<?php

namespace MicroCMS\Domain;

class Job
{
    private $idJob;
    private $titre;
    private $description;
    private $categorie;
    private $username;


    public function getIdJob() {
        return $this->idJob;
    }
    public function getTitre() {
        return $this->titre;
    }
    public function getDescription() {
    return $this->description;
    }
    public function getCategorie() {
        return $this->categorie;
    }
    public function getUsername() {
        return $this->username;
    }

    public function setIdJob($id) {
        return $this->idJob = $id;
    }
    public function setUsername($id) {
        return $this->username = $id;
    }
    public function setTitre($titre) {
        return $this->titre = $titre;
    }
    public function setDescription($desc) {
        return $this->description = $desc;
    }
    public function setCategorie($categorie) {
        return $this->categorie = $categorie;
    }
}
