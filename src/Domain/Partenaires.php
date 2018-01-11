<?php

namespace MicroCMS\Domain;


class Partenaires
{
    private $nom_prenom;
    private $fonction;
    private $organisme;

    /**
     * @return mixed
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @return mixed
     */
    public function getNomPrenom()
    {
        return $this->nom_prenom;
    }

    /**
     * @return mixed
     */
    public function getOrganisme()
    {
        return $this->organisme;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @param mixed $nom_prenom
     */
    public function setNomPrenom($nom_prenom)
    {
        $this->nom_prenom = $nom_prenom;
    }

    /**
     * @param mixed $organisme
     */
    public function setOrganisme($organisme)
    {
        $this->organisme = $organisme;
    }

}
