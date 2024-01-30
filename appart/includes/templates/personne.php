
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
            <button class="flexBox-Center add new">
                <i class="addicon flexBox">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" fill="#fff"/>
                    </svg>
                </i>
                <span>
                    Ajouter un <span id="namePersonne"><?= $title ?></span>
                </span>
            </button>
        </div>
        <div class="tables">
            <?= $data[0] ?>
        </div>
        <div class="formulaireProprietaire with100">
            <form method="POST" class="personne with100 flexBox">
                <div class="entetes flexBox">
                    <div class="flexBox debutForm">
                        <div class="flexBox-Center containImage">
                            <div class="image flexBox-Center">
                                <input required="true" type="file" name="image" id="image"   accept="image/*">
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
                            <p>Nouveau <?= $title ?></p>
                            <p>choisissez une image</p>
                        </div>
                    </div>
                    <div class="actions flexBox">
                        <button type="reset" class="action cancel">annuler</button>
                        <button type="submit" class="action">enregistrer</button>
                    </div>
                </div>
                <div class="appartsVis" style="width: 95%;">
                    <div class="scroll">
                        <div class="inputs flexBox">
                            <div class="identites">
                                <i class="identites">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33.604" height="36" viewBox="0 0 33.604 36">
                                        <path id="icons8_contacts" d="M22.785,3.281c-7.871.178-8.763,5.929-7.084,12.562a2.07,2.07,0,0,0-.711,1.87c.263,1.945,1.06,2.475,1.5,2.475A8.849,8.849,0,0,0,17.913,23.8a3.8,3.8,0,0,1,.606,2.212,4.531,4.531,0,0,1-.079,1.053,2.863,2.863,0,0,1-.369.711A5.017,5.017,0,0,0,22.864,31.7c3.654,0,4.635-3.5,4.74-3.924a2.888,2.888,0,0,1-.395-.711,7.717,7.717,0,0,1-.105-1.317,3.286,3.286,0,0,1,.632-1.843,9.319,9.319,0,0,0,1.4-3.713c.533,0,1.323-.53,1.5-2.475a1.868,1.868,0,0,0-.685-1.87c.885-2.475,2.551-10.159-3.108-10.955C26.222,3.828,24.731,3.281,22.785,3.281ZM29,28.958a6.492,6.492,0,0,1-12.3.026C13.2,31.14,6.063,31.8,6.063,39.281h33.6C39.666,31.611,32.562,31.084,29,28.958Z" transform="translate(-6.063 -3.281)" fill="#707070"/>
                                    </svg>                              
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div class="formGroupe with100">
                                        <span class="titleInput">Nom</span>
                                        <input required="true" type="text" name="nom" id="nom" placeholder="Nom">
                                    </div>
                                    <div class="formGroupe with100">
                                        <span class="titleInput">Prénom</span>
                                        <input required="true" type="text" name="prenom" id="prenom" placeholder="Prénom">
                                    </div>
                                </div>
                            </div>
                            <div class="identites">
                                <i class="identites">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z" fill="#707070"/>
                                    </svg>                    
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <div  class="flexBox-Center groupinput"  >
                                        <div class="formGroupe ppays">
                                            <span class="titleInput">pays</span>
                                            <input required="true" type="text" name="pays1" id="pays1" placeholder="pays">
                                        </div>
                                        <div class="formGroupe ">
                                            <span class="titleInput">num tel 1</span>
                                            <input required="true" type="text" name="numtel1" id="numtel1" placeholder="num tel 1">
                                        </div>
                                    </div>
                                    <div class="flexBox-Center groupinput">    
                                        <div class="formGroupe ppays">
                                            <span class="titleInput">pays</span>
                                            <input required="true" type="text" name="pays2" id="pays2" placeholder="pays">
                                        </div>
                                        <div class="formGroupe ">
                                            <span class="titleInput">numtel2</span>
                                            <input required="true" type="text" name="numtel2" id="numtel2" placeholder="num tel 2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="adresse1">
                                <i class="adresse">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" fill="#707070"/>
                                    </svg>
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <p>Adresse1</p>
                                    <div class="inputsContenur with100 flexBox">
                                        <div class="ville1 formGroupe">
                                            <span class="titleInput">Ville</span>
                                            <input required="true" type="text" name="ville1" id="ville1" placeholder="Ville">
                                        </div>
                                        <div class="Commune formGroupe">
                                            <span class="titleInput">Commune1</span>
                                            <input required="true" type="text" name="Commune1" id="Commune1" placeholder="Commune">
                                        </div>
                                    </div>
                                    <div class="inputsContenur with100 flexBox">
                                        <div class="Quartier formGroupe">
                                            <span class="titleInput">Quartier</span>
                                            <input required="true" type="Quartier" name="Quartier1" id="Quartier1" placeholder="Quartier">
                                        </div>
                                        <div class="Avenu1 formGroupe">
                                            <span class="titleInput">Avenu</span>
                                            <input required="true" type="text" name="Avenu1" id="Avenu1" placeholder="Avenu">
                                        </div>
                                        <div class="numero formGroupe">
                                            <span class="titleInput">numero</span>
                                            <input required="true" type="text" name="numero1" id="numero1" placeholder="numero">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="adresse2">
                                <i class="adresse">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" fill="#707070"/>
                                    </svg>
                                </i>
                                <div class="inputsContenur with100 flexBox">
                                    <p>Adresse2</p>
                                    <div class="inputsContenur with100 flexBox">
                                        <div class="ville2 formGroupe">
                                            <span class="titleInput">Ville</span>
                                            <input required="true" type="text" name="ville2" id="ville2" placeholder="Ville">
                                        </div>
                                        <div class="Commune formGroupe">
                                            <span class="titleInput">Commune2</span>
                                            <input required="true" type="text" name="Commune2" id="Commune2" placeholder="Commune">
                                        </div>
                                    </div>
                                    <div class="inputsContenur with100 flexBox">
                                        <div class="Quartier formGroupe">
                                            <span class="titleInput">Quartier</span>
                                            <input required="true" type="Quartier" name="Quartier2" id="Quartier2" placeholder="Quartier">
                                        </div>
                                        <div class="Avenu2 formGroupe">
                                            <span class="titleInput">Avenu</span>
                                            <input required="true" type="text" name="Avenu2" id="Avenu2" placeholder="Avenu">
                                        </div>
                                        <div class="numero formGroupe">
                                            <span class="titleInput">numero</span>
                                            <input required="true" type="text" name="numero2" id="numero2" placeholder="numero">
                                        </div>
                                    </div>
                                </div>
                            </div>                
                            <div class="codePostal">
                                <i class="codePostal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z" fill="#707070"/></svg>
                                </i>
                                <div class="formGroupe with100 flexBox">
                                    <span class="titleInput">codePostal</span>
                                    <input required="true" type="text" name="codePostal" id="codePostal" placeholder="codePostal">
                                </div>
                            </div>
                            <div class="email flexBox-Center">
                                <i class="email">
                                    <svg viewBox="0 0 30 20" version="1.1">
                                        <path d="M3 0C1.35503 0 0 1.35503 0 3L0 17C0 18.645 1.35503 20 3 20L27 20C28.645 20 30 18.645 30 17L30 3C30 1.35503 28.645 0 27 0L3 0L3 0ZM3.41406 2L26.584 2L17.6777 10.8926C16.1849 12.383 13.7968 12.3828 12.3047 10.8906L3.41406 2L3.41406 2ZM28 3.41211L28 16.5879L21.4023 10L28 3.41211L28 3.41211ZM2 3.41406L8.58594 10L2 16.5859L2 3.41406L2 3.41406ZM19.9883 11.4121L26.5859 18L3.41406 18L10 11.4141L10.8906 12.3047C13.1465 14.5605 16.8326 14.5622 19.0898 12.3086L19.9883 11.4121L19.9883 11.4121Z" id="Forme" fill="#707070" fill-rule="evenodd" stroke="none" />
                                    </svg>
                                </i>
                                <div class="formGroupe with100 flexBox">
                                    <span class="titleInput">Email</span>
                                    <input required="true" type="email" name="Email" id="Email" placeholder="Email   ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="responses flexBox" style="flex-direction: column; gap :1em ">
                    <div class="flexBox">
                        <p class="info">
                            Veuillez completez toutes les informations pour enregistrer un nouvel appartement
                        </p>
                    </div>
                    <div class="pays" style="border-radius: 0px !important;">
                        <?= $data[1] ?>
                    </div>
                    </div>
                    <script>
                        const pays = document.querySelectorAll('div.formGroupe.ppays')
                        const listPays = document.querySelector('div.pays')
                        pays.forEach(p => {
                            p.addEventListener('click', (e)=>{
                                e.stopPropagation()
                                if(p.classList.contains('picpays')){
                                    pays.forEach(p => {p.classList.remove('picpays')})
                                    listPays.classList.remove('picpays')
                                }else{
                                    pays.forEach(p => {p.classList.remove('picpays')})
                                    p.classList.add('picpays')
                                    listPays.classList.add('picpays')
                                }
                            })
                        })
                        listPays.querySelectorAll('div.items').forEach(its =>{
                            its.addEventListener('click', ()=>{
                                const ic = its.querySelector('i')
                                let copyic = document.createElement("i" )
                                copyic.innerHTML = ic.innerHTML
                                const divinput = document.querySelector('div.formGroupe.ppays.picpays')
                                divinput.querySelector('input').value = its.querySelector('span.code').innerHTML
                                divinput.append(copyic)
                            })
                        })
                        document.querySelector('body').addEventListener('click', (e)=>{
                            pays.forEach(p => {p.classList.remove('picpays')})
                            listPays.classList.remove('picpays')
                        })
                    </script>
                </div>
            </form>
        </div>
        <script src="/appart/includes/static/javascript/Proprietaire.js" defer></script>
