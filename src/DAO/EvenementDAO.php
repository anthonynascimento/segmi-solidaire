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
        $sql = "SELECT * FROM evenement where idType=2";
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
        $sql = "SELECT * FROM evenement where idType=1";
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
        $sql = "select * from evenement where idEvenement=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    protected function buildDomainObject($row)
    {
        $evenement = new Evenement();
        $evenement->setIdEvenement($row['idEvenement']);
        $evenement->setTitre($row['titre']);
        $evenement->setDescription($row['description']);
        $evenement->setDateDebut(date_format(date_create($row['date_debut']), "d/m/Y"));
        $evenement->setDateFin(date_format(date_create($row['date_fin']), "d/m/Y"));
        $evenement->setImage($row['image']);

        return $evenement;
    }
}