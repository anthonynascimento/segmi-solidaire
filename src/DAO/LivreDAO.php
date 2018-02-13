<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Livre;


class Livre extends DAO
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