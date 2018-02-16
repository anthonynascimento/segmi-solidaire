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
            $etuId = $row['numEtu'];
            $etudiant[$etuId] = $this->buildDomainObject($row);
        }
        return $etudiant;
    }


    public function find($id)
    {
        $sql = "select * from etudiant where numEtu=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    protected function buildDomainObject($row)
    {
        $etudiant = new Etudiant();
        $etudiant->setNumEtudiant($row['numEtu']);
        $etudiant->setNomEtudiant($row['nom']);
        $etudiant->setPrenomEtudiant($row['prenom']);
        $etudiant->setMdpEtudiant($row['mdp']);
        $etudiant->setEmailEtudiant($row['email']);
        $etudiant->setTelEtudiant($row['tel']);

        return $etudiant;
    }
}