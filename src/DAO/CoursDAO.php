<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Cours;


class CoursDAO extends DAO
{


    public function findFirstAll()
    {
        $sql = "SELECT * FROM cours";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $coursId = $row['idCours'];
            $cours[$coursId] = $this->buildDomainObject($row);
        }
        return $cours;
    }


    public function findAllCoursL1()
    {
        $sql = "SELECT * FROM cours where niveau='L1'";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $coursId = $row['idCours'];
            $cours[$coursId] = $this->buildDomainObject($row);
        }
        return $cours;
    }

    public function findAllCoursL2()
    {
        $sql = "SELECT * FROM cours where niveau='L2'";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $coursId = $row['idCours'];
            $cours[$coursId] = $this->buildDomainObject($row);
        }
        return $cours;
    }

    public function findAllCoursL3()
    {
        $sql = "SELECT * FROM cours where niveau='L3'";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $coursId = $row['idCours'];
            $cours[$coursId] = $this->buildDomainObject($row);
        }
        return $cours;
    }

    public function findAllCoursM1()
    {
        $sql = "SELECT * FROM cours where niveau='M1'";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $coursId = $row['idCours'];
            $cours[$coursId] = $this->buildDomainObject($row);
        }
        return $cours;
    }

    public function findAllCoursM2()
    {
        $sql = "SELECT * FROM cours where niveau='M2'";
        $result = $this->getDb()->fetchAll($sql);

        $cours = array();
        foreach ($result as $row) {
            $coursId = $row['idCours'];
            $cours[$coursId] = $this->buildDomainObject($row);
        }
        return $cours;
    }

    public function find($id)
    {
        $sql = "SELECT * from cours where idCours=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    /*en parametre il faudra le num etudiant*/
    public function ajouterAideCours(){
        $matiere=$_POST['matiere'];
        $sql = "insert into cours (nomCours,description,niveau,matiere) values('" . $_POST['nomCours'] . "','" . $_POST['description'] . "','" . $_POST['niveau'] . "','" . $matiere . "')";
        $result = $this->getDb()->query($sql);
        return $result;
    }


    public function supprimerCours($id)
    {
        $sql = "delete from cours where idCours='" . $id . "'";
        $result = $this->getDb()->query($sql);
        if($result) {
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<div class=\"alert alert-success\">";
            echo "<strong>Cours supprimé !</strong> ";
            echo "</div> </div> ";
        }
    }


    protected function buildDomainObject($row)
    {
        $cours = new Cours();
        $cours->setIdCours($row['idCours']);
        $cours->setNomCours($row['nomCours']);
        $cours->setDescription($row['description']);
        $cours->setMatiere($row['matiere']);
        $cours->setNiveau($row['niveau']);

        return $cours;
    }
}
