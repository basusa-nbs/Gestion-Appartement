<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dasboard du projet des  gestion des appartements">
    <meta name="author" content="seraphin">
    <title>Appartements - <?= $title ?></title>
    <?= $linkCss ?>
    <!-- <link rel="stylesheet" media="screen" type="text/css" href="appart/includes/templates/static/css/dasboard.php"> -->
</head>
<body class="flexBox bg-gradient-primary ">
    <div class="sideBard flexBox">
        <div class="titreAppartteemtns">
            <div class="logoApparts flexBox">
                <a href="" class="flexBox">
                    <i class="logoicon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M253.5 51.7C248.6 39.8 236.9 32 224 32s-24.6 7.8-29.5 19.7l-120 288-40 96c-6.8 16.3 .9 35 17.2 41.8s35-.9 41.8-17.2L125.3 384H322.7l31.8 76.3c6.8 16.3 25.5 24 41.8 17.2s24-25.5 17.2-41.8l-40-96-120-288zM296 320H152l72-172.8L296 320z" fill="#fff"/>
                        </svg>
                    </i>
                    <span class="titreAppartements">
                        APPARTEMENTS
                    </span>
                </a>
            </div>
        </div>
        <div class="dashboardprincipale flexBox-Column-Center">
            <hr class="betwen with100">
            <a href="/appart/dashboard" class="with100" >
                <i class="logodashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27.309" viewBox="0 0 32 27.309">
                        <path id="icons8_ookla_speedtest_1" d="M18,2A15.994,15.994,0,0,0,6.691,29.309l2.262-2.263a12.8,12.8,0,1,1,18.094,0l2.263,2.263A15.994,15.994,0,0,0,18,2Zm5.269,8.469L14.8,18,18,21.2l7.531-8.469Z" transform="translate(-2 -0)" />
                    </svg>
                </i>
                <span class="titredashboard">
                    Dashboard
                </span>
            </a>
            <hr class="betwen with100">
        </div>
        <div class="listeMenu flexBox-Column-Center">
            <div class="Menu with100 stricture">
                <a class="AppelleMenu" href="#">
                    <i class="iconStructure">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M413.5 237.5c-28.2 4.8-58.2-3.6-80-25.4l-38.1-38.1C280.4 159 272 138.8 272 117.6V105.5L192.3 62c-5.3-2.9-8.6-8.6-8.3-14.7s3.9-11.5 9.5-14l47.2-21C259.1 4.2 279 0 299.2 0h18.1c36.7 0 72 14 98.7 39.1l44.6 42c24.2 22.8 33.2 55.7 26.6 86L503 183l8-8c9.4-9.4 24.6-9.4 33.9 0l24 24c9.4 9.4 9.4 24.6 0 33.9l-88 88c-9.4 9.4-24.6 9.4-33.9 0l-24-24c-9.4-9.4-9.4-24.6 0-33.9l8-8-17.5-17.5zM27.4 377.1L260.9 182.6c3.5 4.9 7.5 9.6 11.8 14l38.1 38.1c6 6 12.4 11.2 19.2 15.7L134.9 484.6c-14.5 17.4-36 27.4-58.6 27.4C34.1 512 0 477.8 0 435.7c0-22.6 10.1-44.1 27.4-58.6z"/>
                        </svg>
                    </i>
                    <span>Structure</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.111" height="6.408" viewBox="0 0 9.111 6.408">
                        <path id="Tracé_176" data-name="Tracé 176" d="M322.747,638.5l3.292,4,3.012-4" transform="translate(-321.339 -637.092)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>   
                </a>
                <div class="menusBox flexBox-Column-Center">
                    <a class="menusBox-item" href="/appart/proprietaire" >Propriétaire</a>
                    <a class="menusBox-item" href="/appart/Apparttement" >appartement</a>
                    <a class="menusBox-item" href="/appart/locataire" >Locataire</a>
                    <a class="menusBox-item" href="/appart/tarif" >Tarif</a>
                </div>
            </div>
            <div class="Menu with100 Traitement">
                <a class="AppelleMenu" href="#">
                    <i class="iconStructure">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L550.2 352H592c26.5 0 48-21.5 48-48V176c0-26.5-21.5-48-48-48H516h-4-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48H48c-26.5 0-48 21.5-48 48V304c0 26.5 21.5 48 48 48H156.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123z"/>
                        </svg>
                    </i>
                    <span>Traitement</span>
                    <i class="icondrop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.111" height="6.408" viewBox="0 0 9.111 6.408">
                            <path id="Tracé_176" data-name="Tracé 176" d="M322.747,638.5l3.292,4,3.012-4" transform="translate(-321.339 -637.092)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>                          
                    </i>
                </a>
                <div class="menusBox flexBox-Column-Center">
                    <a class="menusBox-item" href="/appart/contrat/passerUnContrat" >Passer un contrat</a>
                    <a class="menusBox-item" href="/appart/contrat/modifierUnContrat" >Modifier un contrat</a>
                    <a class="menusBox-item" href="/appart/contrat/resilieUnContrat" >Résilier un contrat</a>
                </div>
            </div>
            <div class="Menu with100 impression">
                <a class="AppelleMenu" href="#">
                    <i class="iconStructure">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zm-16-88c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24z"/>
                        </svg>
                    </i>
                    <span>Impression</span>
                    <i class="icondrop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.111" height="6.408" viewBox="0 0 9.111 6.408">
                            <path id="Tracé_176" data-name="Tracé 176" d="M322.747,638.5l3.292,4,3.012-4" transform="translate(-321.339 -637.092)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>                          
                    </i>
                </a>
                <div class="menusBox flexBox-Column-Center">
                    <a class="menusBox-item" href="/appart/imprimer/printLocataire" >Liste locataires</a>
                    <a class="menusBox-item" href="/appart/imprimer/printPropietaire" >Liste propriétaires</a>
                    <a class="menusBox-item" href="/appart/imprimer/printApparts" >Liste appartements</a>
                    <a class="menusBox-item" href="/appart/imprimer/printcontrat" >Liste contrats</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content flexBox">
        <div class="barDessus flexBox with100">
            <form class="search-container ">
                <input required="true" type="text" placeholder="Rechercher..." name="search" id="search">
                <button type="submit" class="search">
                    <i class="fa fa-search">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M19 3C13.488281 3 9 7.488281 9 13C9 15.394531 9.839844 17.589844 11.25 19.3125L3.28125 27.28125L4.71875 28.71875L12.6875 20.75C14.410156 22.160156 16.605469 23 19 23C24.511719 23 29 18.511719 29 13C29 7.488281 24.511719 3 19 3 Z M 19 5C23.429688 5 27 8.570313 27 13C27 17.429688 23.429688 21 19 21C14.570313 21 11 17.429688 11 13C11 8.570313 14.570313 5 19 5Z" />
                        </svg>
                    </i>
                </button>
            </form>
            <div class="adminConteneur flexBox">
                <p class="name flexBox">
                    <span>séraphin ndibwami</span>
                    <a href="" class="sedeconecter">se deconnecter</a>
                </p>
                <p class="image">
                    <img src="/appart/includes/static/images/backgroung.jpg" alt="">
                </p>
            </div>
        </div>
        <?= $content; ?>
    </div>
    <!-- <div class="content flexBox search"> -->

    </div>
    <script src="/appart/includes/static/javascript/anim.js" ></script>
    <script src="/appart/includes/static/javascript/Validator.js" defer></script>
    <script src="/appart/includes/static/javascript/search.js" defer></script>
    <div class="popup">
        <div class="popupin">
            <div class="poupText">
                <p class="text">
                    Voulez-vous vraiment vous deconnecter
                </p>
                <p class="infoaver">
                    pour votre prochaine connexion vous fournirais votre mot de passe et non d'utilisateur avant d'être connecté
                </p>
            </div>
            <div class="buttonspopup flexBox">
                <button class="action non">non</button>
                <button class="action oui">oui</button>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('a.sedeconecter').addEventListener('click', (e)=>{
            e.preventDefault()
            document.querySelector('div.popup').classList.toggle('view')
        })
        document.querySelector('button.non').addEventListener('click', ()=>{
            document.querySelector('div.popup').classList.toggle('view')
        })
        document.querySelector('button.oui').addEventListener('click', ()=>{
            window.location.href = "/destroy"
        })
    </script>
</body>
</html>