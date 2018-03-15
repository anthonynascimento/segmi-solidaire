<?php

namespace MicroCMS\Domain;

class Job
{
    private $idJob;
    private $titre;
    private $description;
    private $categorie;

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

    public function setIdJob($id) {
        return $this->idJob = $id;
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
