<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Job;

use MicroCMS\Domain\Etudiant;



class JobDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM job";
        $result = $this->getDb()->fetchAll($sql);

        $job = array();
        foreach ($result as $row) {
            $jobid = $row['idJob'];
            $job[$jobid] = $this->buildDomainObject($row);
        }
        return $job;
    }


    public function find($id)
    {
        $sql = "select * from job where idJob=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    public function findJobsUser($id)
    {
        $sql = "SELECT * FROM job where username='" . $id . "'";
        $result = $this->getDb()->fetchAll($sql);
        $jobs = array();
        foreach ($result as $row) {
            $jobId = $row['idJob'];
            $jobs[$jobId] = $this->buildDomainObject($row);
        }
        return $jobs;
    }

    public function ajouterMiniJob($username){

        $sql = "insert into job (titre,description,categorie,username) values('" . $_POST['titre'] . "','" . $_POST['description'] . "','" . $_POST['categorie'] . "','" . $username . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }

    public function findInfosEtudiantJob($id)
    {
        $sql = "select * from etudiant etu, job j where etu.username=j.username and idJob=$id";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject2($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    public function supprimerJob($id)
    {
        $sql = "delete from job where idJob='" . $id . "'";
        $result = $this->getDb()->query($sql);
        if($result) {
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<div class=\"alert alert-success\">";
            echo "<strong>Offre de mini-job supprimée !</strong> ";
            echo "</div> </div> ";
        }
    }

    public function modifierJob($id)
    {
        $sql = "UPDATE job SET titre='" . addslashes($_POST['titre']) . "', description='" . addslashes($_POST['description']) . "',categorie='" . addslashes($_POST['categorie']) . "' where idJob='" . $id . "'";
        $this->getDb()->query($sql);
    }

    protected function buildDomainObject($row)
    {
        $job = new Job();
        $job->setIdJob($row['idJob']);
        $job->setTitre($row['titre']);
        $job->setDescription($row['description']);
        $job->setCategorie($row['categorie']);
        $job->setUsername($row['username']);


        return $job;
    }

    protected function buildDomainObject2($row)
    {
        $etudiant = new Etudiant();
        $etudiant->setIdEtudiant($row['idEtudiant']);
        $etudiant->setUsername($row['username']);
        $etudiant->setNom($row['nom']);
        $etudiant->setPrenom($row['prenom']);
        $etudiant->setTelephone($row['telephone']);
        $etudiant->setMdp($row['mdp']);

        return $etudiant;
    }
}
