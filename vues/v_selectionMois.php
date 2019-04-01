<?php
/**
 * Vue Liste des mois sans idVisiteur
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Sarah Brisson
 */
?>
<h2>Suivre le paiement d'une fiche de frais</h2>
<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner un mois : </h3>
    </div>
    <div class="col-md-4">
        <form action="index.php?uc=suivreFrais&action=voirEtatFrais" 
              method="post" role="form">
            <div class="form-group">
                <label for="mois" accesskey="n">Mois : </label>
                <select id="mois" name="mois" class="form-control">
                  <option value="01">Janvier</option>
                  <option value="02">Février</option>
                  <option value="03">Mars</option>
                  <option value="04">Avril</option>
                  <option value="05">Mai</option>
                  <option value="06">Juin</option>
                  <option value="07">Juillet</option>
                  <option value="08">Aout</option>
                  <option value="09">Septembre</option>
                  <option value="10">Octobre</option>
                  <option value="11">Novembre</option>
                  <option value="12">Décembre</option>
                </select>
                <select id="annee" name="annee" class="form-control">
                  <?php 
                      $annee = date(Y);
                      $i = 0;
                      while ($i<10) {
                  ?>
                  <option value="<?php echo $annee-$i?>"><?php echo $annee-$i?></option>
                  <?php 
                      $i=$i+1;
                      }
                  ?>

                </select>
            </div>
            <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
            <input id="annuler" type="reset" value="Effacer" class="btn btn-danger" 
                   role="button">
        </form>
    </div>
</div>
