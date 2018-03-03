<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Matiere;


class MatiereDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM matiere";
        $result = $this->getDb()->fetchAll($sql);

        $matiere = array();
        foreach ($result as $row) {
            $matid = $row['idMatiere'];
            $matiere[$matid] = $this->buildDomainObject($row);
        }
        return $matiere;
    }


    public function find($id)
    {
        $sql = "select * from matiere where idMatiere=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    protected function buildDomainObject($row)
    {
        $matiere = new Matiere();
        $matiere->setIdMatiere($row['idMatiere']);
        $matiere->setNomMatiere($row['nom']);
        $matiere->setIdNiveau($row['idNiveau']);

        return $matiere;
    }
}