<?php

namespace MicroCMS\Domain;

class Cours
{
    private $idCours;
    private $nom;
    private $description;
    private $idMatiere;
    private $numEtu;
    private $image;


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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * @param mixed $idMatiere
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;
    }

    /**
     * @return mixed
     */
    public function getNumEtu()
    {
        return $this->numEtu;
    }

    /**
     * @param mixed $numEtu
     */
    public function setNumEtu($numEtu)
    {
        $this->numEtu = $numEtu;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


}
