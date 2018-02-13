<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Niveau;


class NiveauDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM niveau";
        $result = $this->getDb()->fetchAll($sql);

        $niveau = array();
        foreach ($result as $row) {
            $nivid = $row['idNiveau'];
            $niveau[$nivid] = $this->buildDomainObject($row);
        }
        return $niveau;
    }


    public function find($id)
    {
        $sql = "select * from niveau where idNiveau=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    protected function buildDomainObject($row)
    {
        $niveau = new Niveau();
        $niveau->setIdNiveau($row['idNiveau']);
        $niveau->setNomNiveau($row['nom']);

        return $niveau;
    }
}