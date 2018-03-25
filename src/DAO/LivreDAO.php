<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Livre;


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


    public function ajouterLivre(){

        $sql = "insert into livre (titre,auteur,matiere,niveau,prix) values('" . $_POST['titre'] . "','" . $_POST['auteur'] . "','" . $_POST['matiere'] . "','" . $_POST['niveau'] . "','" . $_POST['prix'] . "')";
        $result = $this->getDb()->query($sql);
        return $result;
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
}
