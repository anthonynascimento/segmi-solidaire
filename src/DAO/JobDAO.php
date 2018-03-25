<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Job;


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

    /*en parametre il faudra le num etudiant*/
    public function ajouterMiniJob(){

        $sql = "insert into job (titre,description,categorie) values('" . $_POST['titre'] . "','" . $_POST['description'] . "','" . $_POST['categorie'] . "')";
        $result = $this->getDb()->query($sql);
        return $result;
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

        return $job;
    }
}
