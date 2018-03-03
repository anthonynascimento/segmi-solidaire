<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Cours;


class CoursDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM cours";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $coursId = $row['idCours'];
            $cours[$coursId] = $this->buildDomainObject($row);
        }
        return $cours;
    }



    public function findFirstAllConf()
    {
        $sql = "SELECT * FROM evenement where idType=3";
        $result = $this->getDb()->fetchAll($sql);

        $evenement = array();
        foreach ($result as $row) {
            $evenementId = $row['idEvenement'];
            $evenement[$evenementId] = $this->buildDomainObject($row);
        }
        return $evenement;
    }


    public function find($id)
    {
        $sql = "select * from cours where idCours=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    /*en parametre il faudra le num etudiant*/
    public function ajouterAideCours(){

        $numEtudiant=isset($_POST['numEtudiant']);
        $sql = "insert into cours (nom,description,idmatiere,numEtu) values('" . $_POST['nom'] . "','" . $_POST['description'] . "','" . $_POST['idMatiere'] . "','" . $numEtudiant . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }


    protected function buildDomainObject($row)
    {
        $cours = new Cours();
        $cours->setIdCours($row['idCours']);
        $cours->setNom($row['nom']);
        $cours->setDescription($row['description']);
        $cours->setIdMatiere($row['idMatiere']);
        $cours->setNumEtu($row['numEtu']);
        return $cours;
    }
}