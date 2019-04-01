
<?php
/**
 * Suivi du paiement des fiches de frais
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

switch ($action) {
    case 'selectionVisiteur':
        $fiches = $pdo->getLesFichesFraisASuivre();
        echo sizeof($fiches);
        include 'vues/v_selectionFicheFrais.php';
    case 'affichageFicheFrais' :
        echo 'ok';
    
}


