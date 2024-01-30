//ce scrpt va nous permetre de communiquer avece le serveur ph
const formulaire = document.querySelector('form.tarif.Appartement')
if(formulaire != null){
    formulaire.addEventListener('submit', (e) => {
        e.preventDefault()
        sendData(formulaire)
    })
}


/**
 * 
 * @param {HTMLFormElement} formulaire 
 */
function sendData(f){
    const data = new FormData()
    data.append("Etat", select("input#Etat").value)
    data.append("Locataire", parseInt(select("div.Locataire.lister input#id").value))
    data.append("Appartement", parseInt(select("div.Appartement.lister input#id").value))
    data.append("dateCreation", select("input#dateCreation").value)
    data.append("dateDebut", select("input#dateDebut").value)
    data.append("dateFin", select("input#dateFin").value)
    if(select('.mC input#id') != null){
        data.append("id", parseInt(select('.mC input#id').value))
    }
    
    const xhr = new XMLHttpRequest()

    xhr.onreadystatechange = function(){
        if(this.status === 200 && this.readyState === 4){
            if(this.response["succes"] != null){
                if(select('.mC input#id') != null){
                    window.location.href = "/appart/contrat/modifierUnContrat"
                }else{
                    window.location.href = "/appart/contrat/passerUnContrat"
                }
            }
            else{
                console.log(this.response)
            }
        }
    }

    xhr.open("POST", "/appart/control/Contrat.php", true)
    xhr.responseType = 'json'
    xhr.send(data)
}

function takeAllid(){
    selectAll('.activate').forEach(els => {
        const pd = els.parentElement.parentElement
        Careilie.push(pd.querySelector('input#id').value)
    })
}

if(Bresilie != null){
    // alert(Bresilie)
    Bresilie.addEventListener('click', ()=>{
        takeAllid()
        resilie()
    })
}

function resilie(){
    if (Careilie.length > 0){
        const data = new FormData()
        
        for (let index = 0; index < Careilie.length; index++) {
            data.append("index"+index, Careilie[index])
        }
        data.append('resilie', 'resilie')    
        
        const xhr = new XMLHttpRequest()
    
        xhr.onreadystatechange = function(){
            if(this.status === 200 && this.readyState === 4){
                // console.log(this.response)
                if(this.response["succes"] != null){
                    window.location.href = "/appart/contrat/resilieUnContrat"
                }
                else{
                    console.log(this.response)
                }
            }
        }
    
        xhr.open("POST", "/appart/control/Contrat.php", true)
        xhr.responseType = 'json'
        xhr.send(data)
    }
}

const imprimer = select('button.flexBox-Center.add.listAppart')
if(imprimer != null){
    imprimer.addEventListener('click', ()=>{
        PrintListAppart()
    })
}

function PrintListAppart(){
    
    var printContents = select('div.tableTarif.contrat').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    window.location.reload()
}