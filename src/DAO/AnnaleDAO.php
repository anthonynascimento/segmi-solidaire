<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Annale;


class AnnaleDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM annale";
        $result = $this->getDb()->fetchAll($sql);

        $annale = array();
        foreach ($result as $row) {
            $anaId = $row['idAnnale'];
            $annale[$anaId] = $this->buildDomainObject($row);
        }
        return $annale;
    }


    public function find($id)
    {
        $sql = "select * from annale where idAnnale=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    public function ajouterAnnale(){

        $sql = "insert into annale (nom,datePublication,niveau,fichier,matiere) values('" . $_POST['nom'] . "','" . $_POST['datePublication'] . "','" . $_POST['niveau'] . "','" . $_POST['fichier'] . "','" . $_POST['matiere'] . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }

    public function findAllAnnalesL1()
    {
        $sql = "SELECT * FROM annale where niveau='L1'";
        $result = $this->getDb()->fetchAll($sql);

        $annale = array();
        foreach ($result as $row) {
            $anaId = $row['idAnnale'];
            $annale[$anaId] = $this->buildDomainObject($row);
        }
        return $annale;
    }

    public function findAllAnnalesL2()
    {
        $sql = "SELECT * FROM annale where niveau='L2'";
        $result = $this->getDb()->fetchAll($sql);

        $annale = array();
        foreach ($result as $row) {
            $anaId = $row['idAnnale'];
            $annale[$anaId] = $this->buildDomainObject($row);
        }
        return $annale;
    }

    public function findAllAnnalesL3()
    {
        $sql = "SELECT * FROM annale where niveau='L3'";
        $result = $this->getDb()->fetchAll($sql);

        $annale = array();
        foreach ($result as $row) {
            $anaId = $row['idAnnale'];
            $annale[$anaId] = $this->buildDomainObject($row);
        }
        return $annale;
    }

    public function findAllAnnalesM1()
    {
        $sql = "SELECT * FROM annale where niveau='M1'";
        $result = $this->getDb()->fetchAll($sql);

        $annale = array();
        foreach ($result as $row) {
            $anaId = $row['idAnnale'];
            $annale[$anaId] = $this->buildDomainObject($row);
        }
        return $annale;
    }

    public function findAllAnnalesM2()
    {
        $sql = "SELECT * FROM annale where niveau='M2'";
        $result = $this->getDb()->fetchAll($sql);

        $annale = array();
        foreach ($result as $row) {
            $anaId = $row['idAnnale'];
            $annale[$anaId] = $this->buildDomainObject($row);
        }
        return $annale;
    }



    protected function buildDomainObject($row)
    {
        $annale = new Annale();
        $annale->setIdAnnale($row['idAnnale']);
        $annale->setNom($row['nom']);
        $annale->setDatePublication($row['datePublication']);
        $annale->setNiveau($row['niveau']);
        $annale->setFichier($row['fichier']);
        $annale->setMatiere($row['matiere']);

        return $annale;
    }
}
