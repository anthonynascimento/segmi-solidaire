<?php

namespace MicroCMS\Domain;

class Annale
{
    private $idAnnale;
    private $nom;
    private $datePublication;
    private $idMatiere;
    private $fichier;
    private $niveau;

    public function getIdAnnale()
    {
        return $this->idAnnale;
    }

    public function getNomAnnale()
    {
        return $this->nom;
    }

    public function getDateAnnale()
    {
        return $this->datePublication;
    }

    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    public function getFichier()
    {
        return $this->fichier;
    }

    public function getNiveau()
    {
        return $this->idMatiere;
    }

    public function setIdAnnale($id)
    {
        $this->idAnnale = $id;
    }

    public function setNomAnnale($nom)
    {
        $this->nom = $nom;
    }

    public function setDateAnnale($date)
    {
        $this->datePublication = $date;
    }

    public function setIdMatiere($id)
    {
        $this->idMatiere = $id;
    }

    public function setFichier($id)
    {
        $this->fichier = $id;
    }

    public function setNiveau($id)
    {
        $this->niveau = $id;
    }
}
