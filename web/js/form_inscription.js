/**
 * Created by Vijay on 05/02/2018.
 */

    $(document).ready(function() {

        $("#nom_err").hide();
        $("#prenom_err").hide();
        $("#tel_err").hide();
        $("#mdp_err").hide();
        $("#conf_mdp_err").hide();
        $("#email_err").hide();

        var erreur_nom=false;
        var erreur_prenom=false;
        var erreur_mdp=false;
        var erreur_conf_mdp=false;
        var erreur_email=false;

        //on verifie si le nom correspond a nos criteres
        $("#nom").focusout(function(){
            check_nom();
        });

        function check_nom(){
            var nom_taille=$("#nom").val().length;
            if(nom_taille<3 || nom_taille>20){
                $("#nom_err").html("Le nom doit être entre 3 et 20 caractères");
                $("#nom_err").show();
                erreur_nom=true;
            }
        }

        //on verifie si le prenom correspond a nos criteres
        $("#prenom").focusout(function(){
            check_prenom();
        });

        function check_prenom(){
            var prenom_taille=$("#prenom").val().length;
            if(prenom_taille<3 || prenom_taille>20){
                $("#prenom_err").html("Le prénom doit être entre 3 et 20 caractères");
                $("#prenom_err").show();
                erreur_prenom=true;
            }
        }


         //on verifie si l'email correspond a nos criteres
         $("#email").focusout(function(){
         check_email();
         });

         function check_email(){
             var reg= new RegExp('[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}');
             if(reg.test($("#email").val())){

             }else{
                 $("#email_err").html("L'adresse mail est invalide");
                 $("#email_err").show();
                 erreur_email=true;
             }
         }


        //on verifie si le mdp correspond a nos criteres
        $("#mdp").focusout(function(){
            check_mdp();
        });

        function check_mdp(){
            var mdp_taille=$("#mdp").val().length;
            if(mdp_taille <8 ){
                $("#mdp_err").html("Le mot de passe doit contenir au moins 8 caractères");
                $("#mdp_err").show();
                erreur_mdp=true;
            }
        }

        //on verifie si le deuxieme mdp correspond a nos criteres
        $("#conf_mdp").focusout(function(){
            check_conf_mdp();
        });

        function check_conf_mdp(){

            var mdp=$("#mdp").val();
            var mdp2=$("#conf_mdp").val();

            if(mdp!=mdp2){
                $("#conf_mdp_err").html("Les mots de passe sont différents");
                $("#conf_mdp_err").show();
                erreur_conf_mdp=true;
            }
        }
    });
