<?php


//  Création d'une request Mysql pour l'insertion ou modification de donnée.

function buildRequest($request, $id)
{
    $sort = Null;
    $set = false;

    if ($request['Nom'] != Null)
    {
        $sort = $sort . "nom = '" . $request['Nom'] . "'";
        $set = true;
    }

    if ($request['Prenoms'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "prenom = '" . $request['Prenoms'] . "'";
        $set = true;
    }

    if ($request['Day'] != Null && $request['Year'] != Null && $request['Month'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "date_naissance = '" . $request['Year']."-".$request['Month']."-" .$request['Day']. "'";
        $set = true;
    }
   else if ($request['Day'] != Null || $request['Year'] != Null || $request['Month'] != Null)
        return NULL;


    if ($request['Grade'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "grade = '" . $request['Grade'] . "'";
        $set = true;
    }

    if ($request['Dayd'] != Null && $request['Yeard'] != Null && $request['Monthd'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "date_deces = '" . $request['Yeard']."-".$request['Monthd']."-" .$request['Dayd']. "'";
        $set = true;
    }
    else if ($request['Dayd'] != Null || $request['Yeard'] != Null || $request['Monthd'] != Null)
        return NULL;

    if ($request['Guerre'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "guerre = '" . $request['Guerre'] . "'";
        $set = true;
    }


    if ($request['Corps'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "corps = '" . $request['Corps'] . "'";
        $set = true;
    }

    if ($request['N_matricule'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "n_matricule = '" . $request['N_matricule'] . "'";
        $set = true;
    }

    if ($request['Departement_naissance'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "departement_naissance = '" . $request['Departement_naissance'] . "'";
        $set = true;
    }

    if ($request['Commune_naissance'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "commune_naissance = '" . $request['Commune_naissance'] . "'";
        $set = true;
    }

    if ($request['Commune_deces'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "commune_deces = '" . $request['Commune_deces'] . "'";
        $set = true;
    }

    if ($request['Pays_deces'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "pays_deces = '" . $request['Pays_deces'] . "'";
        $set = true;
    }

    if ($request['Departement_deces'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "departement_deces = '" . $request['Departement_deces'] . "'";
        $set = true;
    }

    if ($request['Mort_france'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "mort_pour_france = '" . $request['Mort_france'] . "'";
        $set = true;
    }

    if ($request['Complement_deces'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "complement_deces = '" . $request['Complement_deces'] . "'";
        $set = true;
    }

    if ($request['Dernier_residence'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "dernier_lieu_residence = '" . $request['Dernier_residence'] . "'";
        $set = true;
    }

    if ($request['Precision_adresse'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "precision_adresse = '" . $request['Precision_adresse'] . "'";
        $set = true;
    }

    if ($request['Commentaire'] != Null)
    {
        if ($set == true)
            $sort = $sort .',';
        $sort = $sort . "commentaire = '" . $request['commentaire'] . "'";
        $set = true;
    }

    if ($sort == NULL)
        return (NULL);
    return $sort = $sort . " WHERE id=" .$id;
}

//  Création d'une request Mysql pour l'ajout d'une fiche personnelle

function buildInsert($request)
{
    $sort = Null;
    $set = false;

    if ($request['Guerre'] == Null)
        $sort = $sort . "NULL";
    else
        $sort = $sort . "'" . $request['Guerre'] . "'";

    if ($request['Nom'] == Null)
        $sort = $sort . "NULL";

    else
        $sort = $sort . ", '" . $request['Nom'] . "'";


    if ($request['Prenoms'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Prenoms'] . "'";


    if ($request['Grade'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Grade'] . "'";


    if ($request['Corps'] == Null)
        $sort = $sort . ", NULL";
    else
     $sort = $sort . ", '" . $request['Corps'] . "'";


    if ($request['Day'] == Null || $request['Year'] == Null || $request['Month'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Year']."-".$request['Month']."-" .$request['Day']. "'";


    if ($request['Departement_naissance'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Departement_naissance'] . "'";


    if ($request['Commune_naissance'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Commune_naissance'] . "'";


    if ($request['Dayd'] == Null || $request['Yeard'] == Null || $request['Monthd'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Yeard']."-".$request['Monthd']."-" .$request['Dayd']. "'";


    if ($request['Pays_deces'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Pays_deces'] . "'";


    if ($request['Departement_deces'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Departement_deces'] . "'";


    if ($request['Commune_deces'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Commune_deces'] . "'";


    if ($request['Complement_deces'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Complement_deces'] . "'";

    if ($request['Mort_france'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Mort_france'] . "'";


    if ($request['Dernier_residence'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Dernier_residence'] . "'";

    if ($request['Precision_adresse'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Precision_adresse'] . "'";

    if ($request['Commentaire'] == Null)
        $sort = $sort . ", NULL";
    else
        $sort = $sort . ", '" . $request['Commentaire'] . "'";

    if ($sort == NULL)
        return (NULL);
    return $sort;
}