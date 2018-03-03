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

        $numEtudiant=isset($_POST['numEtudiant']);
        $sql = "insert into job (titre,description,numEtu) values('" . $_POST['titre'] . "','" . $_POST['description'] . "','" . $numEtudiant . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }


    protected function buildDomainObject($row)
    {
        $job = new Job();
        $job->setJobId($row['idJob']);
        $job->setJobTitre($row['titre']);
        $job->setJobDesc($row['description']);
        $job->setEtuNom($row['numEtu']);

        return $job;
    }
}