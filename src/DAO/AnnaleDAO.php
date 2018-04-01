<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Annale;
use MicroCMS\Domain\Etudiant;


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

    public function findAnnalesUser($id)
    {
        $sql = "SELECT * FROM annale where username='" . $id . "'";
        $result = $this->getDb()->fetchAll($sql);

        $annale = array();
        foreach ($result as $row) {
            $anaId = $row['idAnnale'];
            $annale[$anaId] = $this->buildDomainObject($row);
        }
        return $annale;

    }


    public function ajouterAnnale($username){
        if (is_uploaded_file($_FILES['fichier']['tmp_name']) && $_FILES['fichier']['error']==0) {
            $path = 'web/fichiers/' . $_FILES['fichier']['name'];
            $fichier=$_FILES['fichier']['name'];
            if (!file_exists($path)) {

                $sql = "insert into annale (nom,datePublication,niveau,fichier,matiere,username) values('" . $_POST['nom'] . "','" . $_POST['datePublication'] . "','" . $_POST['niveau'] . "','" . $fichier . "','" . $_POST['matiere'] . "','" . $username . "')";
                $this->getDb()->query($sql);
                move_uploaded_file($_FILES['fichier']['tmp_name'], $path);

            } else {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<div class=\"container\">";
                echo "<div class=\"alert alert-warning\">";
                echo "<strong>Le nom du fichier existe déjà, veuillez le renommer et recommencer.</strong> ";
                echo "</div> </div> ";
            }
            if($sql){
                echo "<br><br><br><br><br><br>";
                echo "<div class=\"container\">";
                echo "<div class=\"alert alert-success\">";
                echo "<strong>Annale ajoutée !</strong> ";
                echo "</div> </div> ";
            }
            else {
                echo "<br><br><br><br><br>";
                echo "<div class=\"container\">";
                echo "<div class=\"alert alert-danger\">";
                echo "<strong>Une erreur s'est produite !</strong> ";
                echo "</div> </div> ";
            }
        }
    }

    public function findInfosEtudiantAnnale($id)
    {
        $sql = "select * from etudiant etu, annale a where etu.username=a.username and idAnnale=$id";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject2($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    public function modifierAnnale($id)
    {
        if (is_uploaded_file($_FILES['fichier']['tmp_name']) && $_FILES['fichier']['error'] == 0) {
            $path = 'web/fichiers/' . $_FILES['fichier']['name'];
            $fichier = $_FILES['fichier']['name'];
            if(empty($fichier)) {
                $sql = "select fichier from annale where idAnnale = $id";
                $resultat = $this->getDb()->query($sql);
                $fichier = $resultat;
            }else {
                $fichier = $_FILES['fichier']['name'];
            }
                $sql = "UPDATE annale SET nom='" . addslashes($_POST['nom']) . "', datePublication='" . addslashes($_POST['datePublication']) . "',fichier='" . $fichier . "',niveau='" . addslashes($_POST['niveau']) . "', matiere='" . addslashes($_POST['matiere']) . "' where idAnnale='" . $id . "'";
                $this->getDb()->query($sql);
                    move_uploaded_file($_FILES['fichier']['tmp_name'], $path);

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

    public function supprimerAnnale($id)
    {
        $sql = "delete from annale where idAnnale='" . $id . "'";
        $result = $this->getDb()->query($sql);
        if($result) {
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<div class=\"alert alert-success\">";
            echo "<strong>Annale supprimée !</strong> ";
            echo "</div> </div> ";
        }
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
        $annale->setUsername($row['username']);

        return $annale;
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
