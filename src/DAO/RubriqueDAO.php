<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Rubrique;


class RubriqueDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM rubrique";
        $result = $this->getDb()->fetchAll($sql);

        $rubrique = array();
        foreach ($result as $row) {
            $rubId = $row['idRubrique'];
            $rubrique[$rubId] = $this->buildDomainObject($row);
        }
        return $rubrique;
    }


    public function find($id)
    {
        $sql = "select * from rubrique where idRubrique=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    protected function buildDomainObject($row)
    {
        $rubrique = new Rubrique();
        $rubrique->setIdRubrique($row['idRubrique']);
        $rubrique->setNomRubrique($row['nom']);

        return $rubrique;
    }
}