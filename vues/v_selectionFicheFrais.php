<?php
/**
 * Vue Liste des fiches de frais valid�es ou rembours�es
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Sarah Brisson
 */
?>
<h2>Fiches Validées</h2>
<table class="table table-bordered table-responsive">
	<tr>
		<th>Nom</th>
    	<th>Derniere modification</th>     
        <th>Sélection</th>       
    </tr>
    <?php 
    foreach ($fiches as $uneFiche) {
        $id = $uneFiche['id'];
        $nom = $uneFiche['nom'];
        $dateModif = $uneFiche['dateModif'];
    ?>
    <tr>
    	<td>ok</td>
    	<td>ok2</td>
        <form action="index.php?uc=suivreFrais&action=affichageFicheFrais" method="post" role="form">
            <td><input id="ok" type="submit" value="Sélectionner" class="btn btn-success" 
        	   	   role="button"></td>        
        </form>        
    </tr>
    <?php
    }
    ?>
        
    </table>
	