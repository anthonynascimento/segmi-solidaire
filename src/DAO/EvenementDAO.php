<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Evenement;
use MicroCMS\Domain\Etudiant;

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

    public function findEvenementsUser($id)
    {
        $sql = "SELECT * FROM evenement where username='" . $id . "'";
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


    public function supprimerEvenement($id)
    {
        $sql = "delete from evenement where idEvenement='" . $id . "'";
        $result = $this->getDb()->query($sql);
        if ($result) {
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<div class=\"alert alert-success\">";
            echo "<strong>Evènement supprimé !</strong> ";
            echo "</div> </div> ";
        }
    }


    public function modifierEvenement($id)
    {
        if (is_uploaded_file($_FILES['image']['tmp_name']) && $_FILES['image']['error'] == 0) {/*nom stocker sur le serveur*/
            $path = 'web/images/' . $_FILES['image']['name'];/*chemin pour stocker l'image avec son nom d'origine depuis la machine du client*/
            $image = $_FILES['image']['name'];/*recupere le nom de l'image depuis l'upload du client*/
            $sql = "UPDATE evenement SET titre='" . addslashes($_POST['titre']) . "', description='" . addslashes($_POST['description']) . "',lieu='" . addslashes($_POST['lieu']) . "',dateDebut='" . addslashes($_POST['dateDebut']) . "', dateFin='" . addslashes($_POST['dateFin']) . "',type='" . addslashes($_POST['type']) . "',image='" . $image . "' where idEvenement='" . $id . "'";
            $this->getDb()->query($sql);
            move_uploaded_file($_FILES['image']['tmp_name'], $path);

        } else {
            $sql = "UPDATE evenement SET titre='" . addslashes($_POST['titre']) . "', description='" . addslashes($_POST['description']) . "',lieu='" . addslashes($_POST['lieu']) . "',dateDebut='" . addslashes($_POST['dateDebut']) . "', dateFin='" . addslashes($_POST['dateFin']) . "',type='" . addslashes($_POST['type']) . "' where idEvenement='" . $id . "'";
            $this->getDb()->query($sql);
        }
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

    public function ajouterEvenement($username)
    {
        if (is_uploaded_file($_FILES['image']['tmp_name']) && $_FILES['image']['error'] == 0) {/*nom stocker sur le serveur*/
            $path = 'web/images/' . $_FILES['image']['name'];/*chemin pour stocker l'image avec son nom d'origine depuis la machine du client*/
            $image = $_FILES['image']['name'];/*recupere le nom de l'image depuis l'upload du client*/
            if (!file_exists($path)) {

                $sql = "insert into evenement (titre,description,lieu,dateDebut,dateFin,type,image,username) values('" . $_POST['titre'] . "','" . $_POST['description'] . "','" . $_POST['lieu'] . "','" . $_POST['dateDebut'] . "','" . $_POST['dateFin'] . "','" . $_POST['type'] . "','" . $image . "','" . $username . "')";
                $this->getDb()->query($sql);
                move_uploaded_file($_FILES['image']['tmp_name'], $path);

            } else {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<div class=\"container\">";
                echo "<div class=\"alert alert-warning\">";
                echo "<strong>Le nom de l'image existe dèjà, veuillez la renommer et recommencer.</strong> ";
                echo "</div> </div> ";
            }

        } else {

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<div class=\"alert alert-warning\">";
            echo "<strong>Aucune image selectionnée, veuillez recommencer</strong> ";
            echo "</div> </div> ";
        }

    }

    public function findInfosEtudiantEvenement($id)
    {
        $sql = "select * from etudiant etu, evenement evt where etu.username=evt.username and idEvenement=$id";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject2($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    protected function buildDomainObject($row)
    {
        $evenement = new Evenement();
        $evenement->setIdEvenement($row['idEvenement']);
        $evenement->setTitre($row['titre']);
        $evenement->setDescription($row['description']);
        $evenement->setLieu($row['lieu']);
        $evenement->setType($row['type']);
        $evenement->setDateDebut(date_format(date_create($row['dateDebut']), "d/m/Y"));
        $evenement->setDateFin(date_format(date_create($row['dateFin']), "d/m/Y"));
        $evenement->setImage($row['image']);
        $evenement->setUsername($row['username']);


        return $evenement;
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