<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="page de connexion d'une application web de gestion des appartements">
    <meta name="author" content="seraphin">

    <title>Appartements - se connecter</title>

    <link rel="stylesheet" href="../static/css/base.css">
    <link rel="stylesheet" href="../static/css/login.css">
    

</head>


<body class="flexBox-Center bg-gradient-primary ">

    <div class="conteneur flexBox-Center">
        <div class="carte  flexBox-Center">
            <div class="twoChild flexBox imZoom">
                <div class="imageAppartemets zoom1-1">
                </div>
            </div>
            <div class="seConnecterFormulaire twoChild flexBox-Column-Center">
                <div class="flexBox-Column-Center">
                    <h2 class="tiitreForm" style="font-size: 1.5rem;">
                        Mot de passe oublié?
                    </h2>
                    <p class="textComprehension">
                        Nous comprenons, Entrez juste votre adresse mail et nous vous enverrons votre nouveau mot de passe passe par mail.
                    </p>   
                </div>
                <form method="post" class="flexBox-Column-Center with100 formSeCoonecter">
                    <div class="formGroupe flexBox">
                        <span class="titleInput">addresse mail</span>
                        <input required="true" class="with100" type="mail" aria-describedby="emailHelp" placeholder="adresse mail" name="adresseMail" id="adresseMail">
                    </div>
                    <div class="formGroupe with100">
                        <button type="submit" class="submitButton with100 radius5">Envoyer</button>
                    </div>
                </form>
                <div class="autresActions">
                    <span class="linkText">
                        <a href="">se connecter</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>