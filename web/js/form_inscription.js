/**
 * Created by Vijay on 05/02/2018.
 */

$(document).ready(function () {

    $("#nom_err").hide();
    $("#prenom_err").hide();
    $("#tel_err").hide();
    $("#mdp_err").hide();
    $("#conf_mdp_err").hide();
    $("#email_err").hide();

    var erreur_nom = false;
    var erreur_prenom = false;
    var erreur_mdp = false;
    var erreur_conf_mdp = false;
    var erreur_email = false;
    var erreur_tel = false;

    //on verifie si le nom correspond a nos criteres
    $("#nom").focusout(function () {
        check_nom();
    });

    function check_nom() {
        var nom_taille = $("#nom").val().length;
        if (nom_taille < 3 || nom_taille > 20) {
            document.getElementById("nom").style.borderColor = "red";
            $("#nom_err").html("Le nom doit être entre 3 et 20 caractères");
            $("#nom_err").show();
            erreur_nom = true;
        } else {
            document.getElementById("nom").style.borderColor = "green";
            $("#nom_err").hide();
        }
    }

    $("#tel").focusout(function () {
        check_tel();
    });

    function check_tel() {
        var tel_taille = $("#tel").val().length;
        if (tel_taille < 10) {
            document.getElementById("tel").style.borderColor = "red";
            $("#tel_err").html("Le numéro doit contenir 10 chiffres");
            $("#tel_err").show();
            erreur_tel = true;
        } else {
            document.getElementById("tel").style.borderColor = "green";
            $("#tel_err").hide();

        }
    }

    //on verifie si le prenom correspond a nos criteres
    $("#prenom").focusout(function () {
        check_prenom();
    });

    function check_prenom() {
        var prenom_taille = $("#prenom").val().length;
        if (prenom_taille < 3 || prenom_taille > 20) {
            document.getElementById("prenom").style.borderColor = "red";
            $("#prenom_err").html("Le prénom doit être entre 3 et 20 caractères");
            $("#prenom_err").show();
            erreur_prenom = true;
        } else {
            document.getElementById("prenom").style.borderColor = "green";
            $("#prenom_err").hide();
        }
    }


    //on verifie si l'email correspond a nos criteres
    $("#email").focusout(function () {
        check_email();
    });

    function check_email() {
        var reg = new RegExp('[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}');
        if (reg.test($("#email").val())) {
            document.getElementById("email").style.borderColor = "red";

        } else {
            document.getElementById("email").style.borderColor = "green";
            $("#email_err").hide();
        }
    }


    //on verifie si le mdp correspond a nos criteres
    $("#mdp").focusout(function () {
        check_mdp();
    });

    function check_mdp() {
        var mdp_taille = $("#mdp").val().length;
        if (mdp_taille < 8) {
            document.getElementById("mdp").style.borderColor = "red";
            $("#mdp_err").html("Le mot de passe doit contenir au moins 8 caractères");
            $("#mdp_err").show();
            erreur_mdp = true;
        } else {
            document.getElementById("mdp").style.borderColor = "green";
            $("#mdp_err").hide();
        }
    }

    //on verifie si le deuxieme mdp correspond a nos criteres
    $("#conf_mdp").focusout(function () {
        check_conf_mdp();
    });

    function check_conf_mdp() {

        var mdp = $("#mdp").val();
        var mdp2 = $("#conf_mdp").val();

        if (mdp != mdp2) {
            document.getElementById("mdp").style.borderColor = "red";
            document.getElementById("conf_mdp").style.borderColor = "red";

            $("#conf_mdp_err").html("Les mots de passe sont différents");
            $("#conf_mdp_err").show();
            erreur_conf_mdp = true;
        } else {
            document.getElementById("conf_mdp").style.borderColor = "green";
            document.getElementById("mdp").style.borderColor = "green";
            $("#conf_mdp_err").hide();

        }
    }
});
