
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
            <button class="flexBox-Center add addtarif">
                <i class="addicon flexBox">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" fill="#fff"/>
                    </svg>
                </i>
                <span>
                    Ajouter un Tarif 
                </span>
            </button>
        </div>
        <div class="tableTarif">
            <?= $data ?>
        </div>
    </div>
    <div class="contentTarif">
        <div class="formulairetarif ">  
            <form action="" class="tarif flexBox-Column-Center">
                <div class="cancel flexBox with100">
                    <i class="cancel">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/>
                        </svg>
                    </i>
                </div>
                <h2 class="tiitreForm">
                    Créer un tarif
                </h2>
                <div class="Tarif formGroupe wiht100 input">
                    <span class="titleInput">code Tarif</span>
                    <input type="number" name="codeTarif" id="codeTarif" placeholder="code Tarif">
                </div>
                <div class="prixemHS formGroupe wiht100 input ">
                    <span class="titleInput">prixemHS</span>
                    <input type="text" name="prixemHS" id="prixemHS" placeholder="prixemHS">
                </div>
                <div class="prixemBS formGroupe wiht100 input">
                    <span class="titleInput">prixemBS</span>
                    <input type="text" name="prixemBS" id="prixemBS" placeholder="prixemBS">
                </div>
                <div>
                    <button class="action">enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    <script src="/appart/includes/static/javascript/tarif.js" defer></script>
