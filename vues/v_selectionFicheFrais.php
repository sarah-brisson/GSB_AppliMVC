<?php
/**
 * Vue Liste des fiches de frais validÈes ou remboursÈes
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Sarah Brisson
 */
?>
<h2>Fiches Valid√©es</h2>
<table class="table table-bordered table-responsive">
	<tr>
		<th>Nom</th>
    	<th>Derniere modification</th>     
        <th>S√©lection</th>       
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
            <td><input id="ok" type="submit" value="S√©lectionner" class="btn btn-success" 
        	   	   role="button"></td>        
        </form>        
    </tr>
    <?php
    }
    ?>
        
    </table>
	