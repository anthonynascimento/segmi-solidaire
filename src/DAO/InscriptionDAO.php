<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\User;
use MicroCMS\Domain\Utilisateur;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


class InscriptionDAO extends DAO
{
    public function verifCompte($mdp)
    {
        $requete_verif_exists = $this->getDb()->executeQuery("SELECT email FROM etudiant where email ='" . $_POST['email'] . "' ");
        $row = $requete_verif_exists->fetch();
        if ($row) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<br>";
            echo "<div class=\"alert alert-danger\">";
            echo "<strong> Un compte existe deja avec cette adresse email .Veuillez ressayer </strong> ";
            echo "</div> </div> ";
        } else {
            $this->inscription($mdp);
        }
    }

    public function inscription($mdp)
    {

        $recaptcha = new \ReCaptcha\ReCaptcha('6Lem9UwUAAAAAEs2q4Nt3CY7e9QmGqgid9Vy08-V');
        $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
        if ($resp->isSuccess()) {
            $row = $this->getDb()->executeQuery("insert into etudiant (username,nom,prenom,email,telephone,mdp) values ('" . addslashes($_POST['username']) . "','" . addslashes($_POST['nom']) . "','" . addslashes($_POST['prenom']) . "','" . addslashes($_POST['email']) . "','" . addslashes($_POST['tel']) . "','" . addslashes($mdp) . "')");
            if ($row) {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<div class=\"container\">";
                echo "<br>";
                echo "<div class=\"alert alert-success\">";
                echo "<strong> Votre compte a été créé avec succès, vous pouvez maintenant vous connectez ! </strong> ";
                echo "</div> </div> ";
            }
        } else {

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<br>";
            echo "<div class=\"alert alert-danger\">";
            echo "<strong> Captcha Invalide </strong> ";
            echo "</div> </div> ";
        }

    }

    public function envoieMessage()
    {
        $recaptcha = new \ReCaptcha\ReCaptcha('6LfRSksUAAAAACpi4eEmnqFpQVFGTWV4yeVVwyxK');
        $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
        if ($resp->isSuccess()) {
            $mail = new PHPMailer;

            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.sfr.fr';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = false;                     // Enable SMTP authentication
            $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                          // TCP port to connect to

            $mail->setFrom($_POST['email'], 'User');
            $mail->addAddress('contact.easystage@gmail.com'); // Add a recipient

            $mail->isHTML(false);  // Set email format to HTML

            $bodyContent = $_POST['message'];

            $mail->Subject = $_POST['objet'];
            $mail->Body = $bodyContent;

            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {

                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<div class=\"container\">";
                echo "<br>";
                echo "<div class=\"alert alert-success\">";
                echo "<strong>Nous avons bien reçu votre message ! Nous vous contacterons très prochainement.</strong> ";
                echo "</div> </div> ";
            }
        } else {

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<div class=\"container\">";
            echo "<br>";
            echo "<div class=\"alert alert-danger\">";
            echo "<strong> Captcha Invalide </strong> ";
            echo "</div> </div> ";
        }
    }

    protected
    function buildDomainObject($row)
    {
        $user = new User();
        $user->setNom($row['nom']);
        $user->setPrenom($row['prenom']);
        $user->setPassword($row['mdp']);
        $user->setTelephone($row['tel']);
        $user->setEmail($row['email']);
        return $user;
    }
}