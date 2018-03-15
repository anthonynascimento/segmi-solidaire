<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Evenement;


class EvenementDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM evenement";
        $result = $this->getDb()->fetchAll($sql);

        $evenement = array();
        foreach ($result as $row) {
            $evenementId = $row['idEvenement'];
            $evenement[$evenementId] = $this->buildDomainObject($row);
        }
        return $evenement;
    }

    public function findFirstAllSport()
    {
        $sql = "SELECT * FROM evenement where type='sport'";
        $result = $this->getDb()->fetchAll($sql);

        $evenement = array();
        foreach ($result as $row) {
            $evenementId = $row['idEvenement'];
            $evenement[$evenementId] = $this->buildDomainObject($row);
        }
        return $evenement;
    }
    public function findFirstAllSoiree()
    {
        $sql = "SELECT * FROM evenement where type='soirée'";
        $result = $this->getDb()->fetchAll($sql);

        $evenement = array();
        foreach ($result as $row) {
            $evenementId = $row['idEvenement'];
            $evenement[$evenementId] = $this->buildDomainObject($row);
        }
        return $evenement;
    }

    public function findFirstAllConf()
    {
        $sql = "SELECT * FROM evenement where type='conférence'";
        $result = $this->getDb()->fetchAll($sql);

        $evenement = array();
        foreach ($result as $row) {
            $evenementId = $row['idEvenement'];
            $evenement[$evenementId] = $this->buildDomainObject($row);
        }
        return $evenement;
    }

    /*dans le home evenement aléatoire*/
    public function findFirstAllRandom()
    {
        $sql = "SELECT * FROM evenement order by rand()";
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
        $sql = "select * from evenement where idEvenement=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    /*on rajoutera en parametre de la fonction le numero etudiant qui correpsond a la personne qui poste levenement*/
    public function ajouterEvenement(){

        $dateDebut = implode('-', array_reverse(explode('/', isset($_POST['dateDebut']))));
        $dateFin = implode('-', array_reverse(explode('/', isset($_POST['dateFin']))));
        $sql = "insert into evenement (titre,description,dateDebut,dateFin,type,image) values('" . $_POST['titre'] . "','" . $_POST['description'] . "','" . $dateDebut . "','" . $dateFin . "','" . $_POST['type'] . "','" . $_POST['image'] . "')";
        $result = $this->getDb()->query($sql);
       return $result;
    }


    protected function buildDomainObject($row)
    {
        $evenement = new Evenement();
        $evenement->setIdEvenement($row['idEvenement']);
        $evenement->setTitre($row['titre']);
        $evenement->setDescription($row['description']);
        $evenement->setType($row['type']);
        $evenement->setDateDebut(date_format(date_create($row['dateDebut']), "d/m/Y"));
        $evenement->setDateFin(date_format(date_create($row['dateFin']), "d/m/Y"));
        $evenement->setImage($row['image']);

        return $evenement;
    }
}