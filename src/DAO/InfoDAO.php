<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\SoldatInfo;

/**
 * Class InfoDAO
 *
 * classe utile pour la recuperation des informations des soldats
 *
 * @package MicroCMS\DAO
 */
class InfoDAO extends DAO
{
    /**
     * @var \MicroCMS\DAO\SoldatsDAO
     */
    private $soldatDAO;

    public function setSoldaDAO(SoldatsDAO $soldatsDAO)
    {
        $this->soldatDAO = $soldatsDAO;
    }

    /**
     * @param $soldatId
     *
     * recuperation des informations d'un soldat grâce à son ID
     *
     * @return SoldatInfo
     */
    public function findAllBySoldat($soldatId)
    {
        $soldats = $this->soldatDAO->find($soldatId);

        $sql = "SELECT * FROM liste WHERE id=? ";
        $result = $this->getDb()->fetchAll($sql, array($soldatId));
        $infos = array();
        foreach ($result as $row)
        {

            $infoId = $row['id'];
            $info = $this->buildDomainObject($row);
            $info->setSoldat($soldats);
            $infos[$infoId] = $info;
        }
        return $info;
    }

    protected function buildDomainObject($row)
    {
        $info = new SoldatInfo();
        $info->setGuerre($row['guerre']);
        $info->setGrade($row['grade']);
        $info->setCorps($row['corps']);
        $info->setDepartementNaissance($row['departement_naissabce']);
        $info->setCommuneNaissance($row['commune_naissance']);
        $info->setPaysDeces($row['pays_deces']);
        $info->setDepartementDeces($row['departement_deces']);
        $info->setCommuneDeces($row['commune_deces']);
        $info->setComplementDeces($row['complement_deces']);
        $info->setMortPourFrance($row['mort_pour_france']);
        $info->setDernierResidence($row['dernier_lieu_residence']);
        $info->setPrecisionAdresse($row['precision_adresse']);
        $info->setCommentaire($row['commentaire']);
        $info->setImage($row['image']);
        return $info;
    }
}