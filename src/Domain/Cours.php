<?php

namespace MicroCMS\Domain;

class Cours
{
    private $idCours;
    private $nomCours;
    private $description;
    private $matiere;
    private $niveau;


    /**
     * @return mixed
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * @param mixed $idCours
     */
    public function setIdCours($idCours)
    {
        $this->idCours = $idCours;
    }

    /**
     * @return mixed
     */
    public function getNomCours()
    {
        return $this->nomCours;
    }

    /**
     * @param mixed $nom
     */
    public function setNomCours($nomCours)
    {
        $this->nomCours = $nomCours;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param mixed $idMatiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere= $matiere;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $numEtu
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }



}
