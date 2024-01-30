
<div class="barActions flexBox">
    <button class="flexBox-Center add filter">
        <i class="flexBox">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" fill="#fff"/>
            </svg>
        </i>
        <span>
            Filtrer
        </span>
    </button>
    <button class="flexBox-Center imprimerLoc add">
        <span>
            imprimer la liste des <span id="namePersonne"><?= $title ?>s
        </span>
    </button>
</div>

<div class="tables print">
    <div class="toprint" style="margin-left:2em;">
        <style>
            @font-face {
                font-family: "Poppins-regular";
                src: url('/appart/includes/static/fonts/popins/Poppins-Regular.ttf');
            }
            @font-face {
                font-family: "Poppins-bold";
                src: url('/appart/includes/static/fonts/popins/Poppins-ExtraBold.ttf');
            }
            @font-face {
                font-family: "Poppins-light";
                src: url('/appart/includes/static/fonts/popins/Poppins-Light.ttf');
            }
            table{
                border-spacing: 0px;
                border-collapse: collapse;
            }
            td span.email{
                font-size:.7rem;
            }
            th{
                font-size: .8em;
                padding: 10px 5px;
            }
        </style>
        <!-- <p style="padding: 5px; background-color: green; color:white">Locataires</p> -->
        <?= $data[0] ?>
    </div>
</div>
<script src="/appart/includes/static/javascript/Proprietaire.js" defer></script>
<!-- <style>
    .DKK{
        border-spacing: 0px;
        border-collapse: collapse;
    }
</style> -->