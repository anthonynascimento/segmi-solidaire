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

        $sql = "insert into annale (nom,datePublication,idmatiere,fichier) values('" . $_POST['nom'] . "','" . $_POST['datePublication'] . "','" . $_POST['idMatiere'] . "','" . $_POST['fichier'] . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }


    protected function buildDomainObject($row)
    {
        $annale = new Annale();
        $annale->setIdAnnale($row['idAnnale']);
        $annale->setNomAnnale($row['nom']);
        $annale->setDateAnnale($row['date']);
        $annale->setIdMatiere($row['idMatiere']);

        return $annale;
    }
}