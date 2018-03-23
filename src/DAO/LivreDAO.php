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

    public function findAllLivresL2()
    {
        $sql = "SELECT * FROM livre l, niveau n where  l.idNiveau=n.idNiveau and n.nom='L2'";
        $result = $this->getDb()->fetchAll($sql);

        $livre = array();
        foreach ($result as $row) {
            $livId = $row['idLivre'];
            $livre[$livId] = $this->buildDomainObject($row);
        }
        return $livre;
    }

    protected function buildDomainObject($row)
    {
        $livre = new Livre();
        $livre->setIdLivre($row['idLivre']);
        $livre->setTitre($row['titre']);
        $livre->setAuteur($row['auteur']);
        $livre->setPrix($row['prix']);
        $livre->setNiveau($row['niveau']);
        $livre->setSpecialite($row['specialite']);
        $livre->setMatiere($row['matiere']);
        $livre->setIdEtudiant($row['idEtudiant']);

        return $livre;
    }
}
