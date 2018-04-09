<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Etudiant;


class EtudiantDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM etudiant";
        $result = $this->getDb()->fetchAll($sql);

        $etudiant = array();
        foreach ($result as $row) {
            $etuId = $row['idEtudiant'];
            $etudiant[$etuId] = $this->buildDomainObject($row);
        }
        return $etudiant;
    }

    /*avoir tous les etudiants excepté l'admin*/
    public function findFirstAllWithout($id){

        $sql = "SELECT * FROM etudiant WHERE username NOT IN ('$id')";
        $result = $this->getDb()->fetchAll($sql);

        $etudiant = array();
        foreach ($result as $row) {
            $etuId = $row['idEtudiant'];
            $etudiant[$etuId] = $this->buildDomainObject($row);
        }
        return $etudiant;
    }


    public function find($id)
    {
        $sql = "select * from etudiant where idEtudiant=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    public function findUserConnected($id)
    {
        $sql = "SELECT * FROM etudiant where username='" . $id . "'";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);

    }


    public function supprimerEtudiant($id)
    {
        $sql = "delete from etudiant where idEtudiant='" . $id . "'";
        $result = $this->getDb()->query($sql);
        if($result) {
        echo "<br>";
        echo "<div class=\"container\">";
        echo "<div class=\"alert alert-success\">";
        echo "<strong>Etudiant supprimé !</strong> ";
        echo "</div> </div> ";
        }
    }

    public function modifierEtudiant($id)
    {
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
        $sql = "UPDATE etudiant SET username='" . $username . "', nom='" . addslashes($_POST['nom']) . "',prenom='" . addslashes($_POST['prenom']) . "',telephone='" . addslashes($_POST['telephone']) . "' where idEtudiant='" . $id . "'";
        $this->getDb()->query($sql);
        }
    }

    protected function buildDomainObject($row)
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