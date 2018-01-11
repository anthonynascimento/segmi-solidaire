<?php

namespace MicroCMS\Domain;

class SoldatInfo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MicroCMS\Domain\Soldat
     */
    private $soldat;
    private $guerre;
    private $statu;
    private $grade;
    private $corps;
    private $n_matricule;
    private $date_naissance;
    private $departement_naissance;
    private $commune_naissance;
    private $date_deces;
    private $pays_deces;
    private $departement_deces;
    private $commune_deces;
    private $complement_deces;
    private $mort_pour_france;
    private $conditions_deces;
    private $dernier_residence;
    private $precision_adresse;
    private $information_complementer;
    private $commentaire;
    private $image;

    /**
     * @param mixed $statu
     */
    public function setStatu($statu)
    {
        $this->statu = $statu;
    }

    /**
     * @return mixed
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    /**
     * @param Soldat $soldat
     */
    public function setSoldat(Soldat $soldat)
    {
        $this->soldat = $soldat;
    }

    /**
     * @return Soldat
     */
    public function getSoldat()
    {
        return $this->soldat;
    }

    /**
     * @param mixed $guerre
     */
    public function setGuerre($guerre)
    {
        $this->guerre = $guerre;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * @param mixed $corps
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;
    }

    /**
     * @param mixed $n_matricule
     */
    public function setNMatricule($n_matricule)
    {
        $this->n_matricule = $n_matricule;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @param mixed $departemenr_naissance
     */
    public function setDepartementNaissance($departement_naissance)
    {
        $this->departement_naissance = $departement_naissance;
    }

    /**
     * @param mixed $commune_naissance
     */
    public function setCommuneNaissance($commune_naissance)
    {
        $this->commune_naissance = $commune_naissance;
    }

    /**
     * @param mixed $date_deces
     */
    public function setDateDeces($date_deces)
    {
        $this->date_deces = $date_deces;
    }

    /**
     * @param mixed $pays_deces
     */
    public function setPaysDeces($pays_deces)
    {
        $this->pays_deces = $pays_deces;
    }

    /**
     * @param mixed $departement_deces
     */
    public function setDepartementDeces($departement_deces)
    {
        $this->departement_deces = $departement_deces;
    }

    /**
     * @param mixed $commune_deces
     */
    public function setCommuneDeces($commune_deces)
    {
        $this->commune_deces = $commune_deces;
    }

    /**
     * @param mixed $complement_deces
     */
    public function setComplementDeces($complement_deces)
    {
        $this->complement_deces = $complement_deces;
    }

    /**
     * @param mixed $mort_pour_france
     */
    public function setMortPourFrance($mort_pour_france)
    {
        $this->mort_pour_france = $mort_pour_france;
    }

    /**
     * @param mixed $conditions_deces
     */
    public function setConditionsDeces($conditions_deces)
    {
        $this->conditions_deces = $conditions_deces;
    }

    /**
     * @param mixed $dernier_residence
     */
    public function setDernierResidence($dernier_residence)
    {
        $this->dernier_residence = $dernier_residence;
    }

    /**
     * @param mixed $precision_adresse
     */
    public function setPrecisionAdresse($precision_adresse)
    {
        $this->precision_adresse = $precision_adresse;
    }

    /**
     * @param mixed $information_complementer
     */
    public function setInformationComplementer($information_complementer)
    {
        $this->information_complementer = $information_complementer;
    }


    /**
     * @return mixed
     */
    public function getCommuneDeces()
    {
        return $this->commune_deces;
    }

    /**
     * @return mixed
     */
    public function getCommuneNaissance()
    {
        return $this->commune_naissance;
    }

    /**
     * @return mixed
     */
    public function getComplementDeces()
    {
        return $this->complement_deces;
    }

    /**
     * @return mixed
     */
    public function getConditionsDeces()
    {
        return $this->conditions_deces;
    }

    /**
     * @return mixed
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * @return mixed
     */
    public function getDateDeces()
    {
        return $this->date_deces;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @return mixed
     */
    public function getDepartementNaissance()
    {
        return $this->departement_naissance;
    }

    /**
     * @return mixed
     */
    public function getDepartementDeces()
    {
        return $this->departement_deces;
    }

    /**
     * @return mixed
     */
    public function getDernierResidence()
    {
        return $this->dernier_residence;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @return mixed
     */
    public function getGuerre()
    {
        return $this->guerre;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getInformationComplementer()
    {
        return $this->information_complementer;
    }

    /**
     * @return mixed
     */
    public function getMortPourFrance()
    {
        return $this->mort_pour_france;
    }

    /**
     * @return mixed
     */
    public function getNMatricule()
    {
        return $this->n_matricule;
    }

    /**
     * @return mixed
     */
    public function getPaysDeces()
    {
        return $this->pays_deces;
    }

    /**
     * @return mixed
     */
    public function getPrecisionAdresse()
    {
        return $this->precision_adresse;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }
}