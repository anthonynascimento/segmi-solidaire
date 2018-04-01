<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Livre;
use MicroCMS\Domain\Etudiant;



class LivreDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM livre";
        $result = $this->getDb()->fetchAll($sql);

        $livre = array();
        foreach ($result as $row) {
            $idLivre = $row['idLivre'];
            $livre[$idLivre] = $this->buildDomainObject($row);
        }
        return $livre;
    }


    public function find($id)
    {
        $sql = "select * from livre where idLivre=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    public function findLivresUser($id)
    {
        $sql = "SELECT * FROM livre where username='" . $id . "'";
        $result = $this->getDb()->fetchAll($sql);
        $livres = array();
        foreach ($result as $row) {
            $livreId = $row['idLivre'];
            $livres[$livreId] = $this->buildDomainObject($row);
        }
        return $livres;
    }


    public function ajouterLivre($username){

        $sql = "insert into livre (titre,auteur,matiere,niveau,prix,username) values('" . $_POST['titre'] . "','" . $_POST['auteur'] . "','" . $_POST['matiere'] . "','" . $_POST['niveau'] . "','" . $_POST['prix'] . "','" . $username . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }

    public function findInfosEtudiantLivre($id)
    {
        $sql = "select * from etudiant etu, livre l where etu.username=l.username and idLivre=$id";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject2($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    public function supprimerLivre($id)
    {
        $sql = "delete from livre where idLivre='" . $id . "'";
        $result = $this->getDb()->query($sql);
        if($result) {
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<div class=\"alert alert-success\">";
            echo "<strong>Livre supprimé !</strong> ";
            echo "</div> </div> ";
        }
    }

    public function modifierLivre($id)
    {
        $sql = "UPDATE livre SET titre='" . addslashes($_POST['titre']) . "', auteur='" . addslashes($_POST['auteur']) . "',prix='" . addslashes($_POST['prix']) . "',niveau='" . addslashes($_POST['niveau']) . "',matiere='" . addslashes($_POST['matiere']) . "' where idLivre='" . $id . "'";
        $this->getDb()->query($sql);
    }


    protected function buildDomainObject($row)
    {
        $livre = new Livre();
        $livre->setIdLivre($row['idLivre']);
        $livre->setTitre($row['titre']);
        $livre->setAuteur($row['auteur']);
        $livre->setPrix($row['prix']);
        $livre->setNiveau($row['niveau']);
        $livre->setMatiere($row['matiere']);
        $livre->setUsername($row['username']);

        return $livre;
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
