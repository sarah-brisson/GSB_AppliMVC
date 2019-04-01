<?php
/**
 * Vue Connexion
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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title> 
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="./styles/style.css" rel="stylesheet">
    </head>
<div class="row">
    <h1>
        <img src="./images/logo.jpg"
        class="img-responsive center-block"
        alt="Laboratoire Galaxy-Swiss Bourdin"
        title="Laboratoire Galaxy-Swiss Bourdin">
    </h1>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Identification utilisateur</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" 
                      action="index.php?uc=connexion&action=valideConnexion">
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input class="form-control" placeholder="Login"
                                       name="login" type="text" maxlength="45">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                </span>
                                <input class="form-control"
                                       placeholder="Mot de passe" name="mdp"
                                       type="password" maxlength="45">
                            </div>
                        </div>
                        <input class="btn btn-lg btn-success btn-block"
                               type="submit" value="Se connecter">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</html>