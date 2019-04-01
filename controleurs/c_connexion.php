<?php
/**
 * Gestion de la connexion
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
require_once 'includes/fct.inc.php';
require_once 'includes/class.pdogsb.inc.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);
if (!$uc) {
    $uc = 'demandeconnexion';
}

switch ($action) {
    case 'demandeConnexion':
        include 'vues/v_connexion.php';
        break;
    case 'valideConnexion':
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
        $utilisateur = $pdo->getInfosUtilisateur($login, $mdp);

        if ($utilisateur){
            $idUtilisateur = $utilisateur['id'];
            $nom = $utilisateur['nom'];
            $prenom = $utilisateur['prenom'];
            $statut = $utilisateur['statut'];
            connecter($idUtilisateur, $nom, $prenom, $statut);
            header('Location: index.php');
        } else {
            ajouterErreur('Login ou mot de passe incorrect');
            include 'vues/v_erreurs.php';
            include 'vues/v_connexion.php';
            }
        
        break;
    default:
        include 'vues/v_connexion.php';
        break;
}
