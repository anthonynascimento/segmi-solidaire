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

    public function findAllJobByCat($cat) //A FINIR CAR JE SAIS PAS OU DODO A MIS LES CATEGORIES
    {
        $sql = "SELECT * FROM cours c, matiere m, niveau n where c.idMatiere=m.idMatiere and m.idNiveau=n.idNiveau and n.nom='L2'";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $courId = $row['idCours'];
            $cours[$courId] = $this->buildDomainObject($row);
        }
        return $cours;
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
