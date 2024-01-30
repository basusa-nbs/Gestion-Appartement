<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="page de connexion d'une application web de gestion des appartements">
    <meta name="author" content="seraphin">

    <title>Appartements - se connecter</title>

    <link rel="stylesheet" media="screen" type="text/css" href="/appart/includes/static/css/base.php">
    <link rel="stylesheet" media="screen" type="text/css" href="/appart/includes/static/css/login.php">
    

</head>


<body class="flexBox-Center bg-gradient-primary ">

    <div class="conteneur flexBox-Center">
        <div class="carte  flexBox-Center">
            <div class="twoChild flexBox imZoom">
                <div class="imageAppartemets zoom1-1">
                </div>
            </div>
            <div class="seConnecterFormulaire twoChild flexBox-Column-Center">
                <h2 class="tiitreForm">
                    Bonjour encore!
                </h2>
                <form method="post" class="flexBox-Column-Center with100 formSeCoonecter">
                    <div class="formGroupe flexBox">
                        <span class="titleInput mailtitle">adresse mail</span>
                        <input required="true" class="with100" type="mail" required aria-describedby="emailHelp" placeholder="adresse mail" name="adresseMail" id="adresseMail">
                    </div>
                    <div class="formGroupe with100">
                        <span class="titleInput logintitle">mot de passe</span>
                        <input required="true" class="with100" type="password" required placeholder="mot de passe" name="password" id="password">
                    </div>
                    <div class="ContentcheckLabel flexEnd flexBox gap05em with100">
                        <input required="true" type="checkbox" class="myCheckBox" name="seSouvenir" id="seSouvenir">
                        <label class="labelcheck" for="seSouvenir" class=mycheckLabel>se souvenir de moi</label>
                    </div>
                    <div class="formGroupe with100">
                        <button type="submit" class="submitButton with100 radius5">se connecter</button>
                    </div>
                </form>
                <div class="autreMethodes flexBox-Column-Center with100">
                    <!-- <hr class="bettwen">
                    <div class="methodeGoogle with100">
                        <button type="button" class="with100 flexBox-Center radius5 googleButton">
                            <i class="googleIcone iconButton">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/>
                                </svg>
                            </i>
                            <span class="motButton">
                                se connecter avec google
                            </span>
                        </button>
                    </div>
                    <div class="methodeFacebook with100">
                        <button type="button" class="with100 flexBox-Center radius5 facebookButton">
                            <i class="facebookIcone iconButton">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                                </svg>
                            </i>
                            <span class="motButton">
                                se connecter avec facebook
                            </span>
                        </button>
                    </div>
                    <hr class="bettwen"> -->
                    <p class="instruct">
                        veuillez cochez la case (se souvenir de moi) pour être connecter automatiquement
                        lors de votre prochaine session
                    </p>
                </div>
                <!-- <div class="autresActions">
                    <span class="linkText">
                        <a href="">Mot de passe oublié?</a>
                    </span>
                </div> -->
                <div class="loadeur">
                    <span class="loding"></span>
                </div>
            </div>
        </div>
    </div>
    <script src="appart/includes/static/javascript/anim.js"></script>
    <script src="/appart/includes/static/javascript/login.js" defer></script>
    <script src="appart/includes/static/javascript/Validator.js"></script>
</body>

</html>