<?php

namespace MicroCMS\Domain;

use MicroCMS\DAO\FindDAO;


class FindSoldat
{
    private $Nom;
    private $Prenoms;
    private $Day;
    private $Month;
    private $Year;

    private $Grade;
    private $Day_d;
    private $Month_d;
    private $Year_d;
    private $Guerre;

    private $Corps;
    private $DepartementDeces;
    private $CommuneDeces;
    private $Commentaire;
    private $Image;


    private function creatCritere()
    {
        $critere = NULL;
        $set = false;

        if ($this->getNom() != NULL)
        {
            $critere = $critere . " nom LIKE '" .$this->getNom() ."%'";
            $set = true;
        }

        if ($this->getPrenoms() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " prenom LIKE '%" . $this->getPrenoms() ."%'";
            $set = true;
        }

        if ($this->getCorps() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " corps LIKE '" . $this->getCorps() ."%'";
            $set = true;
        }

        if ($this->getDay() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " DAY(date_naissance) = '" . $this->getDay() ."'";
            $set = true;
        }

        if ($this->getMonth() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " MONTH(date_naissance) = '" . $this->getMonth() ."'";
            $set = true;
        }

        if ($this->getYear() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " YEAR(date_naissance) = '" . $this->getYear() ."'";
            $set = true;
        }

        if ($this->getGrade() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " grade = \"" . $this->getGrade() ."\"";
            $set = true;
        }

        if ($this->getDayD() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " DAY(date_deces) = '" . $this->getDayD() ."'";
            $set = true;
        }

        if ($this->getMonthD() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " MONTH(date_deces) = '" . $this->getMonthD() ."'";
            $set = true;
        }

        if ($this->getYearD() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " YEAR(date_deces) = '" . $this->getYearD() ."'";
            $set = true;
        }


        if ($this->getCommuneDeces() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " commune_deces LIKE '" . $this->getCommuneDeces() ."%'";
            $set = true;
        }

        if ($this->getDepartementDeces() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " departement_deces LIKE '" . $this->getDepartementDeces() ."%'";
            $set = true;
        }

        if ($this->getCommentaire() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " commentaire LIKE '" . $this->getCommentaire() ."%'";
            $set = true;
        }

        if ($this->getImage() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " image LIKE '" . $this->getImage() ."%'";
            $set = true;
        }

        if ($this->getGuerre() != NULL)
        {
            if ($set == true)
                $critere = $critere . " AND ";
            $critere = $critere . " guerre LIKE '" . $this->getGuerre() ."%'";
            $set = true;
        }
        return $critere;

    }

    public function setVar($request)
    {
        $this->setNom($request->getNom());
        $this->setPrenoms($request->getPrenoms());
        if ($this->isValid() == false)
            return false;
        else
            return $this->creatCritere();
    }

    public function setVarTow($request)
    {
        $this->setNom($request->getNom());
        $this->setPrenoms($request->getPrenoms());
        $this->setMonth($request->getMonth());
        $this->setDay($request->getDay());
        $this->setYear($request->getYear());
        $this->setGuerre($request->getGuerre());
        $this->setCommuneDeces($request->getCommuneDeces());
        $this->setCorps($request->getCorps());
        $this->setDepartementDeces($request->getDepartementDeces());
        $this->setCommentaire($request->getCommentaire());
        $this->setImage($request->getImage());
        $this->setGrade($request->getGrade());
        $this->setMonthD($request->getMonthD());
        $this->setDayD($request->getDayD());
        $this->setYearD($request->getYearD());
        if ($this->isValid() == false)
            return false;
        else
            return $this->creatCritere();
    }

    public function isValid()
    {
        if (preg_match("#[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]$#", $this->getNom()) == false)
            if ($this->getNom() != NULL)
                return false;
        if (preg_match("#[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]$#", $this->getPrenoms()) == false)
            if ($this->getPrenoms() != NULL)
                return false;
        if (preg_match("#[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]$#", $this->getGuerre()) == false)
            if ($this->getGuerre() != NULL)
                return false;
        if (is_numeric($this->getDay()) == false)
            if ($this->getDay() != NULL)
            return false;
        if (is_numeric($this->getMonth()) == false)
            if ($this->getMonth() != NULL)
                return false;
        if (is_numeric($this->getYear()) == false)
            if ($this->getYear() != NULL)
                return false;

        if (preg_match("#[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]$#", $this->getCommuneDeces()) == false)
            if ($this->getCommuneDeces() != NULL)
                return false;
        if (preg_match("#[1-9a-zA-ZÀ.ÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]$#", $this->getCorps()) == false)
            if ($this->getCorps() != NULL)
                return false;
        if (preg_match("#[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]$#", $this->getDepartementDeces()) == false)
            if ($this->getDepartementDeces() != NULL)
                return false;

        if (preg_match("#[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]$#", $this->getGrade()) == false)
            if ($this->getGrade() != NULL)
                return false;
        if (is_numeric($this->getDayD()) == false)
            if ($this->getDayD() != NULL)
                return false;
        if (is_numeric($this->getMonthD()) == false)
            if ($this->getMonthD() != NULL)
            return false;
        if (is_numeric($this->getYearD()) == false)
            if ($this->getYearD() != NULL)
                return false;
        return true;
    }


    /**
     * @param mixed $CommuneDeces
     */
    public function setCommuneDeces($CommuneDeces)
    {
        $this->CommuneDeces = $CommuneDeces;
    }

    public function setCommentaire($Commentaire)
    {
        $this->CommuneDeces = $Commentaire;
    }

    public function setImage($Image)
    {
        $this->Image = $Image;
    }

    /**
     * @param mixed $Corps
     */
    public function setCorps($Corps)
    {
        $this->Corps = $Corps;
    }

    /**
     * @param mixed $DepartementDeces
     */
    public function setDepartementDeces($DepartementDeces)
    {
        $this->DepartementDeces = $DepartementDeces;
    }

    /**
     * @return mixed
     */
    public function getCommuneDeces()
    {
        return $this->CommuneDeces;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->Commentaire;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * @return mixed
     */
    public function getCorps()
    {
        return $this->Corps;
    }

    /**
     * @return mixed
     */
    public function getDepartementDeces()
    {
        return $this->DepartementDeces;
    }

    /**
     * @return mixed
     */
    public function getGuerre()
    {
        return $this->Guerre;
    }

    /**
     * @param mixed $Guerre
     */
    public function setGuerre($Guerre)
    {
        $this->Guerre = $Guerre;
    }

/**
 * @return mixed
 */
public function getDayD()
{
    return $this->Day_d;
}

/**
 * @return mixed
 */
public function getGrade()
{
    return $this->Grade;
}

    /**
     * @return mixed
     */
    public function getMonthD()
    {
        return $this->Month_d;
    }

    /**
     * @return mixed
     */
    public function getYearD()
    {
        return $this->Year_d;
    }

    /**
     * @param mixed $Day_d
     */
    public function setDayD($Day_d)
    {
        $this->Day_d = $Day_d;
    }

    /**
     * @param mixed $Grade
     */
    public function setGrade($Grade)
    {
        $this->Grade = $Grade;
    }

    /**
     * @param mixed $Month_d
     */
    public function setMonthD($Month_d)
    {
        $this->Month_d = $Month_d;
    }

    /**
     * @param mixed $Year_d
     */
    public function setYearD($Year_d)
    {
        $this->Year_d = $Year_d;
    }
    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->Day = $day;
    }

    /**
     * @param mixed $Month
     */
    public function setMonth($Month)
    {
        $this->Month = $Month;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->Year = $year;
    }

    /**
     * @param mixed $Prenoms
     */
    public function setPrenoms($Prenoms)
    {
        $this->Prenoms = $Prenoms;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->Month;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @return mixed
     */
    public function getPrenoms()
    {
        return $this->Prenoms;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->Year;
    }
}
