<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\TypeEvenement;


class TypeEvenementDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM typeevenement";
        $result = $this->getDb()->fetchAll($sql);

        $type = array();
        foreach ($result as $row) {
            $typeid = $row['idType'];
            $type[$typeid] = $this->buildDomainObject($row);
        }
        return $type;
    }


    public function find($id)
    {
        $sql = "select * from type where idType=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    protected function buildDomainObject($row)
    {
        $type = new TypeEvenement();
        $type->setIdType($row['idType']);
        $type->setNomType($row['nom']);

        return $type;
    }
}