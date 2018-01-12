<?php

namespace MicroCMS\Domain;

class Job
{
    private $job_id;
    private $job_titre;
    private $job_description;
    private $rub_id;
    private $etu_num;

    public function getJobId() { return $this->job_id; }
    public function getJobTitre() { return $this->job_titre; }
    public function getJobDesc() { return $this->job_description; }
    public function getRubId() { return $this->rub_id; }
    public function getEtuNom() { return $this->etu_num; }

    public function setJobTitre($titre) { return $this->job_titre = $titre; }
    public function setJobDesc($desc) { return $this->job_description = $desc; }
    public function setRubId($rub) { return $this->rub_id = $rub; }
    public function setEtuNom($etu) { return $this->etu_num = $etu; }
}
