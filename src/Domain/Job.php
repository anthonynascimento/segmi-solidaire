<?php

namespace MicroCMS\Domain;

class Job
{
    private $idJob;
    private $titre;
    private $description;
    private $idRubrique;
    private $numEtu;

    public function getJobId() { return $this->idJob; }
    public function getJobTitre() { return $this->titre; }
    public function getJobDesc() { return $this->description; }
    public function getRubId() { return $this->idRubrique; }
    public function getEtuNom() { return $this->numEtu; }

    public function setJobId($id) { return $this->idJob = $id; }
    public function setJobTitre($titre) { return $this->titre = $titre; }
    public function setJobDesc($desc) { return $this->description = $desc; }
    public function setRubId($rub) { return $this->idRubrique = $rub; }
    public function setEtuNom($etu) { return $this->numEtu = $etu; }
}
