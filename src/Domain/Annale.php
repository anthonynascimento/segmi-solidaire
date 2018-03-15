<?php

namespace MicroCMS\Domain;

class Annale
{
    private $idAnnale;
    private $nom;
    private $datePublication;
    private $matiere;
    private $fichier;
    private $niveau;

    public function getIdAnnale()
    {
        return $this->idAnnale;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDatePublication()
    {
        return $this->datePublication;
    }

    public function getMatiere()
    {
        return $this->matiere;
    }

    public function getFichier()
    {
        return $this->fichier;
    }

    public function getNiveau()
    {
        return $this->niveau;
    }

    public function setIdAnnale($id)
    {
        $this->idAnnale = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setDatePublication($date)
    {
        $this->datePublication = $date;
    }

    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
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
