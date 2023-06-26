<?php

/**
 * Affiche mieu un var dump
 * @param $variable
 */
function debug($variable):void {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';

}

/**
 * insere un paragraphe avec un message d'erreur
 * 
 */

function errorMsg (array $errors):void {
    foreach ($errors as $error){
        echo '<p class = "error">' . $error . '</p>';
    }
}

/** Fonction pour verifier le formulaire d'inscription
* @return array
*/
function checkSubscriptionForm(): array
    {
        $errors = [];

        if (!empty($_POST)) {

            if (empty($_POST['lastname']) || !preg_match('/^[a-zA-Z- éëèïç]+$/', $_POST['lastname'])) {
                $errors['lastname'] = "Votre nom ne peut contenir que des lettres, des espaces et les caractères \" - \",\" é \",\" ë \",\" è \",\" ï \",\" ç \" ";
            }
            if (empty($_POST['firstname']) || !preg_match('/^[a-zA-Z- éëèïç]+$/', $_POST['firstname'])) {
                $errors['firstname'] = "Votre prenom ne peut contenir que des lettres, des espaces et les caractères \" - \",\" é \",\" ë \",\" è \",\" ï \",\" ç \" ";
            }
            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "L'e-mail saisie est déja pris ou incorrect";
            }
            if (empty($_POST['sex'])) {
                    $errors['sex'] = "Veuillez sélectionner un sexe";
            }
            if (empty($_POST['birthday'])){
                $errors['birthday'] = "Précisez votre date de naissance";
            }
            if (empty($_POST['password']) ||!preg_match('/^[a-zA-Z\s\déàöóïôîâêëèç.]+$/', $_POST['password']) || strlen($_POST['password']) < 5) {
                    $errors['password'] = "Le mot de passe doit contenir au minimum cinq caractères et aucun caractères spéciaux";
            }
            if (empty($_POST['passwordCheck']) || $_POST['password'] !== $_POST['passwordCheck']) {
                    $errors['passwordCheck'] = "La confirmation du mot de passe n'est pas identique au mot de passe";
            }

        }
        return $errors;
    }