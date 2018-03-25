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

    public function supprimerEvenement($id)
    {
        $sql = "delete from evenement where idEvenement='" . $id . "'";
        $result = $this->getDb()->query($sql);
        if($result) {
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<div class=\"alert alert-success\">";
            echo "<strong>Evenement supprimé !</strong> ";
            echo "</div> </div> ";
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
        if (is_uploaded_file($_FILES['image']['tmp_name']) && $_FILES['image']['error']==0) {/*nom stocker sur le serveur*/
            $path = 'web/images/' . $_FILES['image']['name'];/*chemin pour stocker l'image avec son nom d'origine depuis la machine du client*/
            $image=$_FILES['image']['name'];/*recupere le nom de l'image depuis l'upload du client*/
            if (!file_exists($path)) {
                $sql = "insert into evenement (titre,description,lieu,dateDebut,dateFin,type,image) values('" . $_POST['titre'] . "','" . $_POST['description'] . "','" . $_POST['lieu'] . "','" . $_POST['dateDebut'] . "','" . $_POST['dateFin'] . "','" . $_POST['type'] . "','" . $image . "')";
                $this->getDb()->query($sql);
                move_uploaded_file($_FILES['image']['tmp_name'], $path);
            }
        }
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