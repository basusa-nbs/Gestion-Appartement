
<div class="barActions flexBox">
    <button class="flexBox-Center add">
        <i class="flexBox">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" fill="#fff"/>
            </svg>
        </i>
        <span>
            Filtrer
        </span>
    </button>
    <button class="flexBox-Center add " style="background-color: transparent; border:2px solid#4e73df; color:#4e73df">
        <span>
            Cliquer sur le contrat à modifier
        </span>
    </button>
</div>
<div class="tableTarif contrat">
    <?= $data[2] ?>
</div>
</div>
<div class="contentTarif">
<div class="formulairetarif mC" style="display: flex; gap:1em">  
    <form action="" method="POST" class="tarif Appartement flexBox-Column-Center">
        <input required="true" type="hidden" name="id" id="id">
        <div class="cancel flexBox with100">
            <i class="cancel">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/>
                </svg>
            </i>
        </div>
        <h2 class="tiitreForm">
            Modifier un contrat
        </h2>
        <div class="champs">
            <div>
                <div class="Etat formGroupe wiht100 input">
                    <span class="titleInput">Etat</span>
                    <input required="true" type="text"  name="Etat" id="Etat" placeholder="Etat">
                    <select name="Etat" id="Etat">
                        <option value="encours">encours ...</option>
                        <option value="resilie">resilié ...</option>
                        <option value="signe">signé ...</option>
                    </select>
                </div>
            </div>
            <div class="dateCreation formGroupe wiht100 input">
                <span class="titleInput">Date Creation</span>
                <input required="true" type="date" name="dateCreation" id="dateCreation" placeholder="date Creation">
            </div>
            <div >
                <div class="Locataire lister formGroupe wiht100 input">
                    <span class="titleInput">locataire</span>
                    <input required="true" type="text" name="Locataire" id="Locataire" placeholder="Locataire">
                    <input required="true" type="hidden" name="id" id="id">
                </div>
            </div>
            <div class="dateDebut formGroupe wiht100 input">
                <span class="titleInput">Date de Debut</span>
                <input required="true" type="date" name="dateDebut" id="dateDebut" placeholder="date Debut">
            </div>
            <div >
                <div class="Appartement lister formGroupe wiht100 input">
                    <span class="titleInput">Appartement</span>
                    <input required="true" type="text" name="Appartement" id="Appartement" placeholder="Appartement">
                    <input required="true" type="hidden" name="id" id="id">
                </div>
            </div>
            <div class="dateFin formGroupe wiht100 input">
                <span class="titleInput">Date de fin</span>
                <input required="true" type="date" name="dateFin" id="dateFin" placeholder="date Fin" >
            </div>
        </div>
        <div>
            <button class="action" style="font-family: Poppins-bold;">enregistrer</button>
        </div>
    </form>
    <style>
        table.picPersonne tbody{
            border-radius: 0px 0px 10px 10px;
            background-color: #fff;
        }
        .carteAppart{
            width: 100%;
            gap: 1em;
            overflow-x: scroll;
            display: none;
        }
        div.info p{
            text-align: start;
        }
        div.aboutAppartement svg{
            fill: #4e73df;
        }
        table tbody{
            max-height: 64vh !important;
        }
        div.choisir:hover{
            background-color: #4e73df;
        }
    </style>
    <div class="responses flexBox flexBox-Center" style="border-radius:20px;background-color:#fff; overflow-x: hidden;  padding:0px !important; max-width:500px;">
        <div class="carteAppart Appartement flexBox " style="width: 100%;">
            <div class="flexBox" style="flex-direction: column; justify-content: space-between;">
                <div class="flexBox" style="gap: 1em; align-items: center;">
                    <?= $data[0] ?>
                </div>
                <div class=" flexBox flexBox-Center" style="width: 500px; padding:30px">
                    <button class="action okay" style="font-family: Poppins-bold; position:fixed">ok</button>
                </div>
            </div>
        </div>
        <div style="padding: 0px !important; border:none">
            <?= $data[1] ?>
        </div>
    </div>
</div>
<script src="/appart/includes/static/javascript/Contrat.js" defer></script>
