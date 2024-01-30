
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
            <button class="flexBox-Center add  new">
                <i class="addicon flexBox">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" fill="#fff"/>
                    </svg>
                </i>
                <span>
                    Ajouter un appartement 
                </span>
            </button>
        </div>
        <div class="tables table">
            <?= $data[4] ?>
        </div> 
        <div class="formulaireProprietaire with100">
            <form action="" method="POST" class="personne appart with100 flexBox">
                <div class="entetes flexBox">
                    <div class="flexBox debutForm">
                        <div class="flexBox-Center containImage">
                            <div class="image flexBox-Center">
                                <input required="true" type="file" name="image" id="image"  accept="image/*">
                                <i class="addpicture">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M152 120c-26.51 0-48 21.49-48 48s21.49 48 48 48s48-21.49 48-48S178.5 120 152 120zM447.1 32h-384C28.65 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM463.1 409.3l-136.8-185.9C323.8 218.8 318.1 216 312 216c-6.113 0-11.82 2.768-15.21 7.379l-106.6 144.1l-37.09-46.1c-3.441-4.279-8.934-6.809-14.77-6.809c-5.842 0-11.33 2.529-14.78 6.809l-75.52 93.81c0-.0293 0 .0293 0 0L47.99 96c0-8.822 7.178-16 16-16h384c8.822 0 16 7.178 16 16V409.3z" fill="#fff"/>
                                    </svg> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                                        <path id="Exclusion_1" data-name="Exclusion 1" d="M874.532,1000H123.424a106.475,106.475,0,0,1-24.65-2.9,110.815,110.815,0,0,1-23.063-8.319A120.129,120.129,0,0,1,54.76,975.616a131.541,131.541,0,0,1-18.317-17.435,142.468,142.468,0,0,1-15.158-21.132A151.334,151.334,0,0,1,9.809,912.794a157.978,157.978,0,0,1-7.269-26.8A163.767,163.767,0,0,1,0,857.211V143.263a163.723,163.723,0,0,1,2.54-28.78,157.95,157.95,0,0,1,7.272-26.8A151.319,151.319,0,0,1,21.29,63.424,142.506,142.506,0,0,1,36.452,42.292a131.579,131.579,0,0,1,18.32-17.435A120.152,120.152,0,0,1,75.727,11.693,110.832,110.832,0,0,1,98.791,3.374a106.486,106.486,0,0,1,24.651-2.9H420.306a.016.016,0,0,1,.011.005c.85.857,0,106.023-.011,107.086H125.183c-17.257,0-31.3,16.014-31.3,35.7L93.965,855.4v0L241.683,646.1a36.69,36.69,0,0,1,5.757-6.4,35.792,35.792,0,0,1,6.943-4.775,35.087,35.087,0,0,1,7.82-2.984,34.625,34.625,0,0,1,16.773,0,35.088,35.088,0,0,1,7.818,2.985,35.762,35.762,0,0,1,6.94,4.775,36.539,36.539,0,0,1,5.748,6.4l72.548,102.853,208.511-321.5a36.323,36.323,0,0,1,12.878-12.089,34.947,34.947,0,0,1,16.872-4.374c12.213,0,23.193,6.48,27.971,16.51l267.582,414.76h1.741l-1.741-323.49h92.488l1.382,338.438a163.451,163.451,0,0,1-2.543,28.779,157.07,157.07,0,0,1-7.293,26.8,150.138,150.138,0,0,1-11.541,24.255,141.488,141.488,0,0,1-15.285,21.132,131.344,131.344,0,0,1-18.526,17.435,121.252,121.252,0,0,1-21.264,13.164,113.634,113.634,0,0,1-23.5,8.319A111.173,111.173,0,0,1,874.532,1000Zm-577.2-589.007a83.474,83.474,0,0,1-36.546-8.416,90.952,90.952,0,0,1-15.948-9.874,98.52,98.52,0,0,1-13.9-13.077,106.118,106.118,0,0,1-11.464-15.849,112.591,112.591,0,0,1-8.656-18.191,121.449,121.449,0,0,1,0-83.371,112.612,112.612,0,0,1,8.656-18.191,106.107,106.107,0,0,1,11.464-15.849,98.511,98.511,0,0,1,13.9-13.077,90.938,90.938,0,0,1,15.948-9.874,83.542,83.542,0,0,1,73.083,0,90.964,90.964,0,0,1,15.948,9.874,98.552,98.552,0,0,1,13.9,13.077,106.151,106.151,0,0,1,11.467,15.849,112.614,112.614,0,0,1,8.659,18.191,121.427,121.427,0,0,1,0,83.371,112.586,112.586,0,0,1-8.656,18.191,106.13,106.13,0,0,1-11.465,15.849,98.53,98.53,0,0,1-13.9,13.077,90.947,90.947,0,0,1-15.948,9.874A83.474,83.474,0,0,1,297.331,410.993Zm556.8-59.16H772.642V207.9H628.683v-83.2H772.642V0h81.492V124.706H1000v83.2H854.134Z" fill="#fff" />
                                    </svg>                                                                         
                                </i>
                            </div>
                        </div>
                        <div class="flexBox debuttitle">
                            <p>Nouvel appartement</p>
                            <p>Veuillez choisir une image</p>
                        </div>
                    </div>
                    <div class="actions flexBox">
                        <button class="action">annuler</button>
                        <button class="action">enregistrer</button>
                    </div>
                </div>
                <div class="appartsVis">
                    <div class="scroll">
                        <div class="inputs flexBox">
                            <div class="Proprietaire">
                                <i class="identites">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z" fill="#707070"/>
                                    </svg>                             
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div class="formGroupe wiht100">
                                        <div class="lister">
                                            <span class="titleInput">Proprietaire</span>
                                            <input required="true" type="text" name="nom" id="nom" placeholder="Proprietaire">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.79 28.217">
                                                    <path id="Tracé_1" data-name="Tracé 1" d="M430.36,330.468l21.155,27.093,20.845-27.093" transform="translate(-429.966 -330.161)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                                </svg>     
                                            </i>
                                            <input required="true" type="hidden" name="id" id="id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Tarif">
                                <i class="identites">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84.1 96c0-11.1-9-20.1-20.1-20.1s-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.8 4.1c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0 0 0c-2.2-.8-4.3-1.5-6.3-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V416c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.4-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V224z" fill="#707070"/>
                                    </svg>                           
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div class="formGroupe wiht100">
                                        <div class="lister">
                                            <span class="titleInput">Tarif</span>
                                            <input required="true" type="text" name="Tarif" id="Tarif" placeholder="Tarif">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.79 28.217">
                                                    <path id="Tracé_1" data-name="Tracé 1" d="M430.36,330.468l21.155,27.093,20.845-27.093" transform="translate(-429.966 -330.161)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                                </svg>                                              
                                            </i>
                                            <input required="true" type="hidden" name="id" id="id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Categorie">
                                <i class="proprietaire">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" fill="#707070"/>
                                    </svg>
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div class="formGroupe wiht100">
                                        <div class="lister">
                                            <span class="titleInput">Categorie</span>
                                            <input required="true" type="text" name="nom" id="nom" placeholder="Categorie">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.79 28.217">
                                                    <path id="Tracé_1" data-name="Tracé 1" d="M430.36,330.468l21.155,27.093,20.845-27.093" transform="translate(-429.966 -330.161)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                                </svg>    
                                            </i>
                                            <input required="true" type="hidden" name="id" id="id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Type">
                                <i class="type">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" fill="#707070"/>
                                    </svg>
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div class="formGroupe wiht100">
                                        <div class="lister">
                                            <span class="titleInput">Type</span>
                                            <input required="true" type="text" name="Type" id="Type" placeholder="Type">
                                            <i>
                                                
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.79 28.217">
                                                    <path id="Tracé_1" data-name="Tracé 1" d="M430.36,330.468l21.155,27.093,20.845-27.093" transform="translate(-429.966 -330.161)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                                </svg>     
                                            </i>
                                            <input required="true" type="hidden" name="id" id="id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="identites">
                                <i class="NbrPersonnes">
                                    <svg style="height: 32px!important;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path d="M208 48c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM152 352V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152z" fill="#707070"/>
                                    </svg>
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div class="formGroupe wiht100">
                                        <span class="titleInput">personne</span>
                                        <input required="true" type="number" name="personne" id="personne" placeholder="Nombre personnes">
                                    </div>
                                </div>
                            </div>
                            <div class="identites">
                                <i class="NbrPersonnes">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M176 88v40H336V88c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zm-48 40V88c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56v40h28.1c12.7 0 24.9 5.1 33.9 14.1l51.9 51.9c9 9 14.1 21.2 14.1 33.9V304H384V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H192V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H0V227.9c0-12.7 5.1-24.9 14.1-33.9l51.9-51.9c9-9 21.2-14.1 33.9-14.1H128zM0 416V336H128v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H320v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H512v80c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64z" fill="#707070"/></svg>
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div class="formGroupe wiht100">
                                        <span class="titleInput">Equipement</span>
                                        <input name="Equipement" id="Equipement" placeholder="Equipement">
                                        <style>
                                            i.addequip:hover{
                                                transform: scale(1.05);
                                            }
                                            span.equipe{
                                                background-color: rgb(235, 244, 255);
                                                border-radius: 50px;
                                                display: inline-block;
                                                padding: .5px 1em;
                                                margin: 0px 1em .5px 0px;
                                                font-size: .7rem !important;
                                            }
                                        </style>
                                        <i class="addicon addequip flexBox" style="border: 2px solid #707070; right : 10px !important; position: absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" fill="#707070"/>
                                            </svg> 
                                        </i>
                                    </div>
                                    <div class="lesequipements">
                                        
                                    </div>
                                <script>
                                    document.querySelector('i.addequip').addEventListener('click', ()=>{
                                        const input = document.querySelector('#Equipement')
                                        let lesequipements = document.querySelector('div.lesequipements')
                                        lesequipements.innerHTML =lesequipements.innerHTML + "<span class='equipe'>" + input.value + "</span>"
                                        input.value = ""
                                    })
                                </script>
                                </div>
                            </div>
                            <div class="adresse1">
                                <i class="adresse">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" fill="#707070"/>
                                    </svg>
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <p>Adresse</p>
                                    <div class="inputsContenur with100 flexBox">
                                        <div class="formGroupe wiht100">
                                            <span class="titleInput">Ville</span>
                                            <input required="true" type="text" name="ville" id="ville" placeholder="Ville">
                                        </div>
                                        <div class="formGroupe wiht100">
                                            <span class="titleInput">Commune</span>
                                            <input required="true" type="text" name="Commune" id="Commune" placeholder="Commune">
                                        </div>
                                    </div>
                                    <div class="inputsContenur with100 flexBox">
                                        <div class="formGroupe wiht100">
                                            <span class="titleInput">Quartier</span>
                                            <input required="true" type="Quartier" name="Quartier" id="Quartier" placeholder="Quartier">
                                        </div>
                                        <div class="formGroupe wiht100">
                                            <span class="titleInput">Avenu</span>
                                            <input required="true" type="text" name="Avenu" id="Avenu" placeholder="Avenu">
                                        </div>
                                        <div class="formGroupe wiht100">
                                            <span class="titleInput">numero</span>
                                            <input required="true" type="number" name="numero" id="numero" placeholder="numero">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="responses flexBox">
                        <!-- <div class="flexBox">
                            <p class="info">
                                Veuillez completez toutes les informations pour enregistrer un nouvel appartement
                            </p>
                        </div> -->
                        <?php
                         echo $data[0];
                         echo $data[1];
                         echo $data[2];
                         echo $data[3]; ?>
                    </div>
                </div>
            </form>
        </div>
        <script src="/appart/includes/static/javascript/appartement.js" defer></script>
    
