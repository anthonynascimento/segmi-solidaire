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
        if (is_uploaded_file($_FILES['fichier']['tmp_name']) && $_FILES['fichier']['error']==0) {
            $path = 'web/fichiers/' . $_FILES['fichier']['name'];
            $fichier=$_FILES['fichier']['name'];
            if (!file_exists($path)) {
                $sql = "insert into annale (nom,datePublication,niveau,fichier,matiere) values('" . $_POST['nom'] . "','" . $_POST['datePublication'] . "','" . $_POST['niveau'] . "','" . $fichier . "','" . $_POST['matiere'] . "')";
                $this->getDb()->query($sql);
                move_uploaded_file($_FILES['fichier']['tmp_name'], $path);

            }
        }
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
        $annale->setFichier($row['fichier']);
        $annale->setNiveau($row['niveau']);
        $annale->setMatiere($row['matiere']);
        $annale->setIdEtudiant($row['idEtudiant']);

        return $annale;
    }
}
