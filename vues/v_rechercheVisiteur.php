 <?php
/**
 * Vue Validation des Frais : recherche visiteur
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
?>
<h2>Valider un frais</h2>

<div class="panel panel-info">
    <div class="panel-heading">Sélectionner un visiteur - 
    <table class="table table-bordered table-responsive">
        <tr>
            <th class="date">Nom</th>     
            <th class="date">Sélection</th>       
        </tr>
        <?php
        foreach ($nomsVisiteurs as $unNomVisiteur) {
            $nom = $unNomVisiteur['nom'];
            $id = $unNomVisiteur['id'];
            ?>
            <tr>
                <td><?php echo $nom ?></td>
                <form action="index.php?uc=validerFrais&action=selectionMois" method="post" role="form">
                	<input type="hidden" name="id" value="<?php echo $id ?>" />
                	<input type="hidden" name="nom" value="<?php echo $nom ?>" />
                	<td><input id="ok" type="submit" value="Valider" class="btn btn-success" 
        	    	   role="button"></td>        
        	    </form>        
            </tr>
            <?php
        }
        ?>
        
    </table>
</div>