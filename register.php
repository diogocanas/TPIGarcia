<?php
/**
 * Nom du projet  : TPIGarcia
 * Nom du fichier : register.php
 * Auteur         : Diogo CANAS ALMEIDA
 * Date           : 05 mai 2020
 * Version        : 1.0
 * Description    : Page d'inscription
 */

 include_once 'php/functions.php';

 $nomUser = filter_input(INPUT_POST, 'nomUser', FILTER_SANITIZE_STRING);
 $prenomUser = filter_input(INPUT_POST, 'prenomUser', FILTER_SANITIZE_STRING);
 $emailUser = filter_input(INPUT_POST, 'emailUser', FILTER_VALIDATE_EMAIL);
 $phoneUser = filter_input(INPUT_POST, 'phoneUser', FILTER_SANITIZE_STRING);
 $pwdUser = filter_input(INPUT_POST, 'pwdUser', FILTER_SANITIZE_STRING);
 $verifPwdUser = filter_input(INPUT_POST, 'verifPwdUser', FILTER_SANITIZE_STRING);
 $btnRegister = filter_input(INPUT_POST, 'btnRegister');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Inscription</title>
  </head>
  <body class="p-5">
    <h2>Inscription</h2>
    <form>
      <div class="form-group">
        <label for="emailUser">Nom</label>
        <input type="text" class="form-control" id="nomUser" name="nomUser">
      </div>
      <div class="form-group">
        <label for="emailUser">Prénom</label>
        <input type="text" class="form-control" id="prenomUser" name="prenomUser">
      </div>
      <div class="form-group">
        <label for="emailUser">Adresse mail</label>
        <input type="email" class="form-control" id="emailUser" name="emailUser">
      </div>
      <div class="form-group">
        <label for="phoneUser">Numéro de téléphone</label>
        <input type="phone" class="form-control" id="phoneUser" name="phoneUser">
      </div>
      <div class="form-group">
        <label for="pwdUser">Mot de passe</label>
        <input type="password" class="form-control" id="pwdUser" name="pwdUser">
      </div>
      <div class="form-group">
        <label for="verifPwdUser">Vérification du mot de passe</label>
        <input type="password" class="form-control" id="verifPwdUser" name="verifPwdUser">
      </div>
      <button type="submit" class="btn btn-primary" name="btnRegister">S'inscrire</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>