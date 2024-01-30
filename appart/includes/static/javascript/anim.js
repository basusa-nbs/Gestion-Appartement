// création des animations
/**
 * cette function raccourci la manière de selectionner des éléments
 * avec la methode {querySelector}
 * @param {String} selector 
 * @returns {HTMLElement}
 */
function select(selector){
    return document.querySelector(selector)
}

/**
* cette function raccourci la manière de selectionner des éléments
 * avec la methode {querySelectorAll}
 * @param {string} selector 
 * @returns {NodeList}
 */
function selectAll(selector){
    return document.querySelectorAll(selector)
}

/**
 * cette fonction peremet d'animer le placeholder des tous les input
 */

function addAnimationInput(){
    selectAll('input').forEach(input => {
        input.addEventListener('click', (e)=>{
            const element = e.currentTarget
            const label = getLableFrend(element, '.titleInput')
            removeinputEffect()
            element.setAttribute('placeholder','')
            label.classList.add('anim')
        })
    });
}

seleceur = select('select#Etat')
if(seleceur != null){
    seleceur.addEventListener('click', ()=> {
        // alert(seleceur)
        const input = getLableFrend(seleceur, 'input')
        input.click()
    })
    seleceur.addEventListener('change', ()=>{
        const input = getLableFrend(seleceur, 'input')
        input.value = seleceur.value
    })
}

/**
 * cette fonction efface les animations apres le clique
 */
function removeinputEffect(){
    selectAll('.titleInput').forEach(span =>{
        const input = getLableFrend(span, 'input')
        if(input.value === ''){
            if(span.classList.contains('anim')){
                span.classList.add('animout')
                setTimeout(() => {
                    input.setAttribute('placeholder', span.innerHTML)
                    span.classList.remove('animout','anim')
                }, 200);
                return
            }
            span.classList.remove('anim')
        }
    })
}
/**
 * cette function selection un elemet frère
 * @param {HTMLElement} element 
 * @param {String} selector
 */
function getLableFrend(element, selector){
    // element.classList
    const parent = element.parentElement
    return parent.querySelector(selector)
}
addAnimationInput();

// animation de l'ajout
function animBouttonAjout(){
    let nouveau = select('.add.new')
    if(nouveau != null){
        nouveau.addEventListener('click', (e)=>{
            const button = e.currentTarget
            const tomove = selectAll('div.tables, div.barActions')
            const toplace = select('div.formulaireProprietaire')
    
            tomove.forEach(neuds =>{
                neuds.classList.add('moveLeft')
            })
    
            setTimeout(() => {
                toplace.classList.add('moveplace')
                tomove.forEach(neuds =>{
                    neuds.style.display = "none"
                    neuds.classList.remove('moveLeft')
                })
            }, 200);
        })
    }
}
animBouttonAjout()
selectAll("input[type='text'], input[type='number'], input[type='password']").forEach(inputs => {
    inputs.setAttribute("required","true")
})


function previewImage(input) {
    console.log(input)
    if (input.files && input.files[0]) {
        const reader = new FileReader()
        console.log(reader)
        reader.onload = function() {
            let image = select("div.containImage")
            image.style.backgroundImage = "url("+reader.result+")"
            select('div.image').classList.add("upload")
        };

        reader.readAsDataURL(input.files[0])
        console.log(reader)
    }
}
const inputs = select('input#image')
if(inputs != null){
    inputs.addEventListener('change', (e) => {
        previewImage(e.currentTarget)
    })
}

const divList = selectAll('div.lister')

if(divList != null && divList.length > 0){
    divList.forEach(items => {
        items.addEventListener('click', (e)=>{
            e.stopPropagation()

            if(!items.classList.contains('piclist')){
                divList.forEach(els => {
                    els.classList.remove('piclist')
                    const icon = els.querySelector('i')
                    
                    if(icon != null){
                        icon.classList.remove('piclist')
                    }

                    const wichtable = els.querySelector('span.titleInput')
                    const tableau = select('table.picPersonne.'+wichtable.innerHTML)
                    if(tableau != null){
                        tableau.classList.remove('piclist')
                    }
                    const appartCarts = select('div.carteAppart.'+wichtable.innerHTML)
                    if(appartCarts != null){
                        appartCarts.classList.remove('piclist')
                    }
                })
            }

            items.classList.toggle('piclist')
            // alert(items.querySelector('i'))
            const icon = items.querySelector('i')
            if(icon != null){
                icon.classList.toggle('piclist')
            }
            const wichtable = items.querySelector('span.titleInput')
            const tableau = select('table.picPersonne.'+wichtable.innerHTML)

            let trs = null;

            if(tableau != null){
                tableau.classList.toggle('piclist')
                trs = tableau.querySelectorAll('table.piclist tbody tr')
            }

            const appartCarts = select('div.carteAppart.'+wichtable.innerHTML)
            if(appartCarts != null){
                appartCarts.addEventListener('click', (e)=> {
                    e.stopPropagation()
                })
                appartCarts.classList.toggle('piclist')
            }

            // choix d'un locataire
            
            if(trs != null){
                let selector;
                switch (wichtable.innerHTML) {
                    case "Proprietaire":
                        selector = "span.nom"
                        break;
                    case "locataire":
                        selector = "span.nom"
                        break;
                    case "Tarif":
                        selector = "td"
                        break;
                    case "Categorie":
                        selector = "td"
                        break;
                    case "Type":
                        selector = "td"
                        break;
                }

                trs.forEach(items => {
                    items.addEventListener('click', (e)=>{
                        select('div.lister.piclist input').value = items.querySelector(selector).innerHTML
                        select('div.lister.piclist input#id').value = items.querySelector('input#id').value 
                    })
                })
            }

        })
    })
    document.querySelector('body').addEventListener('click', ()=>{
        divList.forEach(els =>{
            els.classList.remove('piclist')
            const icon = els.querySelector('i')
            if(icon != null){
                icon.classList.remove('piclist')
            }
            const appartCarts = select('div.carteAppart')
            if(appartCarts != null){
                appartCarts.classList.remove('piclist')
            }
        })
        
        selectAll('table').forEach(ts => ts.classList.remove('piclist'))
    })
}
selectAll('table').forEach(els => {
    els.addEventListener('clicl', (e)=>{
        e.stopPropagation(  )
    })
})

// choix d'un appartement
const lesAppartements = selectAll('div.carte.appartement')
if(lesAppartements != null && lesAppartements.length > 0){
    lesAppartements.forEach(apparts => {
        apparts.addEventListener('click', (e)=>{
            console.log(apparts)
            // e.stopPropagation()
            lesAppartements.forEach(aps => {
                if(aps != apparts){
                    aps.classList.remove('piclist')
                }
            })
            apparts.classList.toggle('piclist')
            
            const items = select('div.lister.piclist')
            const ident = apparts.querySelector('input#id').value
            items.querySelector('input#id').value = ident
            const nomP = document.querySelector('div.carte.appartement.piclist p.nom')
            if(nomP != null){
                items.querySelector('input#Appartement').value = "appartement de " +  nomP.innerHTML 
            }else{
                items.querySelector('input#Appartement').value = ""
            }
            
        } )
    })
    const bokay = select('button.action.okay')
    if(bokay != null){
        bokay.addEventListener('click', ()=>{
        const appartCarts = select('div.carteAppart')
        appartCarts.classList.remove('piclist')
        lesAppartements.forEach(aps => {
                aps.classList.remove('piclist')
        })

        divList.forEach(els =>{
            els.classList.remove('piclist')
            const icon = els.querySelector('i')
            if(icon != null){
                icon.classList.remove('piclist')
            }
            const appartCarts = select('div.carteAppart')
            if(appartCarts != null){
                appartCarts.classList.remove('piclist')
            }
        })
        
        selectAll('table').forEach(ts => ts.classList.remove('piclist'))
    })}
}

const buttons = select('button.addtarif')
const divsadd = selectAll('div.addtarif')
if(divsadd != null){
    divsadd.forEach(divs => {
        divs.addEventListener('click', (e)=>{
            const gp = divs.parentElement.parentElement
            select('.mC input#id').value = gp.querySelector('input#id').value;
            select('.mC input#Etat').value =  gp.querySelector('div.tarifinfo span').innerHTML;
            select('.mC div.Locataire input#id').value = gp.querySelector('input#idLocataire').value;
            select('.mC div.Appartement input#id').value = gp.querySelector('input#idapparts').value;
            select('.mC input#Appartement').value = "appartement de " + gp.querySelector('p.np span').innerHTML;
            select('.mC input#Locataire').value = gp.querySelector('p.nl span').innerHTML;
            select('.mC input#dateCreation').value =  gp.querySelector('p.dc span').innerHTML;
            select('.mC input#dateDebut').value = gp.querySelector('p.dd span').innerHTML
            select('.mC input#dateFin').value = gp.querySelector('p.df span').innerHTML

            select('div.contentTarif').classList.add('visible')
            
        })
    
        const cancel = select('.formulairetarif i.cancel')
        cancel.addEventListener('click', (e)=>{
            select('div.contentTarif').classList.remove('visible')
        })
    })
}
if(buttons != null){
    buttons.addEventListener('click', (e)=>{
        select('div.contentTarif').classList.add('visible')
    })

    const cancel = select('.formulairetarif i.cancel')
    cancel.addEventListener('click', (e)=>{
        select('div.contentTarif').classList.remove('visible')
    })
}

const LesActivs = selectAll('div.cc')
const Bresilie = select('button.rc')
let Careilie = []

if(LesActivs != null && LesActivs.length > 0){
    LesActivs.forEach(activs => {
        activs.addEventListener('click', ()=>{
            activs.classList.toggle('activate')
            if(select('div.activate') != null){
                Bresilie.classList.add('notin')
            }else{
                Bresilie.classList.remove('notin')
            }
        })
    })
}

const cancel = select('button.cancel')
if(cancel != null){
    cancel.addEventListener('click', ()=>{
        window.location.reload()
    })
}

// const linksearch = window.location.href
// if(linksearch.includes("?search")){
//     select('.search-container').classList.add('searching')
//     select('div.content.search').classList.add('searching')
// }

