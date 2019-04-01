<?php
/**
 * Gestion de l'accueil
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

if ($estConnecte && $_SESSION["statut"] == 0) {
    include 'vues/v_accueilVisiteur.php';
} elseif (($estConnecte && $_SESSION["statut"] == 1)){
    include 'vues/v_accueilComptable.php';
} else {
    include 'vues/v_connexion.php';
}
