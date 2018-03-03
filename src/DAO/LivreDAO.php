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

        $sql = "insert into livre (nom,auteur,prix,idMatiere,niveau) values('" . $_POST['nom'] . "','" . $_POST['auteur'] . "','" . $_POST['prix'] . "','" . $_POST['idMatiere'] . "','" . $_POST['niveau'] . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }


    protected function buildDomainObject($row)
    {
        $livre = new Livre();
        $livre->setLivreId($row['idLivre']);
        $livre->setLivreNom($row['nom']);
        $livre->setLivreAuteur($row['auteur']);
        $livre->setLivrePrix($row['prix']);
        $livre->setIdMatiere($row['idMatiere']);

        return $livre;
    }
}