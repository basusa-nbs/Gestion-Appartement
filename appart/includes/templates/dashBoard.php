<div class="tableauContain flexBox">
    <div class="td flexBox">
        <div class="tableau flexBox">
            <i class="dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27.309" viewBox="0 0 32 27.309">
                    <path id="icons8_ookla_speedtest_1" d="M18,2A15.994,15.994,0,0,0,6.691,29.309l2.262-2.263a12.8,12.8,0,1,1,18.094,0l2.263,2.263A15.994,15.994,0,0,0,18,2Zm5.269,8.469L14.8,18,18,21.2l7.531-8.469Z" transform="translate(-2 -2)"/>
                </svg>              
            </i>
            <span class="title">
                Tableau de bord
            </span>
        </div>
        <style>
            span.stat{
                display: flex;
                flex-direction: column;
            }
            span.stat span{
                color: black !important;
            }
        </style>
        <div class="cartestds flexBox"> 
            <div class="cartetd flexBox Nbapparts">
                <a href="/appart/Apparttement" >
                    <i class="apparts">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z"/>
                        </svg>
                    </i>
                    <span class="stat">
                        <span class="chiffre"><?= $data["locataireCount"] ?></span><span> appartements</span>
                    </span>
                </a>
            </div>
            <div class="cartetd flexBox NbProprietaire">
                <a href="/appart/proprietaire">
                    <i class="proprio">
                        <svg xmlns="http://www.w3.org/2000/svg" class="essai" viewBox="0 0 640 512">
                            <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z"/>
                        </svg>                             
                    </i>
                    <span class="stat">
                        <span class="chiffre"><?= $data["appartCount"] ?></span><span> Proprietaires</span>
                    </span>
                    <!-- <p class="l">locataires</p>
                    <div class="stat flexBox">
                        <p class="flexBox">
                            <span class="chiffre"><?= $data["locataireCountContrat"] ?></span>
                            <span> contrat</span>
                        </p>
                        <p class="flexBox">
                            <span class="chiffre"><?= $data["locataireCount"] ?></span>
                            <span>inscrits</span>
                        </p>
                    </div> -->
                </a>
            </div>
            <div class="cartetd flexBox NbLocataire">
                <a href="/appart/locataire">
                    <i class="proprio">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z"/>
                        </svg>                             
                    </i>
                    <span class="stat">
                        <span class="chiffre"><?= $data["proprioCount"] ?></span><span> Locataires</span>
                    </span>
                    <!-- <p class="l">Proprietaires</p>
                    <div class="stat flexBox">
                        <p class="flexBox">
                            <span class="chiffre"><?= $data["proprioCountContrat"] ?></span>
                            <span> contrat</span>
                        </p>
                        <p class="flexBox">
                            <span class="chiffre"><?= $data["proprioCount"] ?></span>
                            <span>inscrits</span>
                        </p>
                    </div> -->
                </a>
            </div>
            <div class="cartetd flexBox NbTarif">
                <a href="/appart/tarif">
                    <i class="tarif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84.1 96c0-11.1-9-20.1-20.1-20.1s-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.8 4.1c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0 0 0c-2.2-.8-4.3-1.5-6.3-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V416c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.4-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V224z"/>
                        </svg>                           
                    </i>
                    <span class="stat">
                        <span class="chiffre"><?= $data["TarifCount"] ?></span><span> tarifs</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="statistiques">
        <div class="recents td flexBox">
            <div class="statRecents tableau flexBox">
                <i class="recents">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path id="clock" d="M14.5,7.5a1.5,1.5,0,0,1,3,0v7.7l5.331,3.55a1.447,1.447,0,0,1,.363,2.081,1.377,1.377,0,0,1-2.025.363l-6-4a1.371,1.371,0,0,1-.669-1.25ZM16,0A16,16,0,1,1,0,16,16,16,0,0,1,16,0ZM3,16A13,13,0,1,0,16,3,13,13,0,0,0,3,16Z"/>
                    </svg>                  
                </i>
                <span class="title">
                    Recents
                </span>
            </div>
            <?= $data["Recents"] ?>
        </div>
        <div class="graph"></div>
    </div>
</div>
<script type="module" src="/appart/node_modules/chart.js/auto/auto.js" defer></script>