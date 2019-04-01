<?php
/**
 * Gestion de la validation des fiches de frais
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    Sarah Brisson <sar.brisson@gmail.com>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

require_once 'includes/fct.inc.php';
require_once 'includes/class.pdogsb.inc.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$idUtilisateur = $_SESSION['idUtilisateur'];


switch ($action) {
    case 'selectionVisiteur':
        $nomsVisiteurs = $pdo->getNomVisiteur();
        include 'vues/v_rechercheVisiteur.php';
        break;
    case 'selectionMois':     
        $idVisiteur = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $nomVisiteur = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $_SESSION['idVisiteur']= $idVisiteur;
        $_SESSION['nomVisiteur']= $nomVisiteur;
        $lesMois = $pdo->getLesMoisDisponibles($_SESSION['idVisiteur']);
        // Afin de sélectionner par défaut le dernier mois dans la zone de liste
        // on demande toutes les clés, et on prend la première,
        // les mois étant triés décroissants
        $lesCles = array_keys($lesMois);
        $moisASelectionner = $lesCles[0];
        include 'vues/v_selectionFrais.php';
        break;
    case 'voirEtatFrais':
        $_SESSION['mois']= filter_input(INPUT_POST, 'lstMois', FILTER_SANITIZE_STRING), time() + (86400 * 30));
        $lesMois = $pdo->getLesMoisDisponibles($_SESSION['idVisiteur']);
        $moisASelectionner = $_SESSION['mois'];
        include 'vues/v_selectionFrais.php';
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($_SESSION['idVisiteur'], $_SESSION['mois']);
        $lesFraisForfait = $pdo->getLesFraisForfait($_SESSION['idVisiteur'], $_SESSION['mois']);
        $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($_SESSION['idVisiteur'], $_SESSION['mois']);
        $numAnnee = substr($_SESSION['mois'], 0, 4);
        $numMois = substr($_SESSION['mois'], 4, 2);
        $libEtat = $lesInfosFicheFrais['libEtat'];
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $dateModif = dateAnglaisVersFrancais($lesInfosFicheFrais['dateModif']);
        include 'vues/v_validerFrais.php';
    case 'supprimerFrais':
        $idFrais = filter_input(INPUT_GET, 'idFrais', FILTER_SANITIZE_STRING);
        $pdo->refuserFraisHorsForfait($idFrais);
        $url='index.php?uc=validerFrais&action=voirEtatFrais';
        header("Refresh: 0;url=$url");
        //$URL="http://gsb-fiches-de-frais.000webhostapp.com/index.php?uc=validerFrais&action=voirEtatFrais";
        //echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        //echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        break;
    case 'validerFicheFrais':
        $pdo->majEtatFicheFrais($_SESSION['idVisiteur'], $_SESSION['mois'], "VA");
        $url='index.php?uc=validerFrais&action=selectionVisiteur';
        header("Refresh: 0;url=$url");
        break;
}
