// creation de la structure personne pour les locataires et les proprietaites

function findValue(id){
    return select('input#'+id).value
}

function sendData(data){
    let personne = select('span#namePersonne').innerHTML
    let xhr = new XMLHttpRequest()
    const Timeout = 400
    xhr.onreadystatechange = function(){
        if(this.status === 200 && this.readyState === 4){
            if( this.response["succes"] != null ){
                saved(this.response["succes"])
            } 
        }
        setTimeout(() => {
            console.log("une erreur") 
        }, Timeout);
    }

    xhr.open("POST", "/appart/control/"+personne+".php", true)
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.responseType = 'json'
    xhr.send(JSON.stringify(data));
}

function sendpicture(){
    let data = new FormData();
    data.append("image", select('input#image').files[0])

    let xhr = new XMLHttpRequest()
    const Timeout = 400
    xhr.onreadystatechange = function(){
        if(this.status === 200 && this.readyState === 4){
            console.log(this.response["succes"], this.responseType)
            if( this.response["succes"] != null){
                const forProfile = this.response["succes"]
                let informations = collectData(forProfile)
                sendData(informations)
            }
        }
        setTimeout(() => {
            console.log("une erreur") 
        }, Timeout);
    }
    xhr.open("POST", "/appart/includes/media/images/savePictures.php", true)
    xhr.responseType = 'json'
    xhr.send(data);
}

function collectData(forProfile){
    let data =
    {
        "Nom": findValue("nom"),
        "Prenom":findValue("prenom"),
        "NumeroTel1":{
            "codePays":findValue("pays1"),
            "numero":findValue("numtel1")
        },
        "NumeroTel2":{
            "codePays":findValue("pays2"),
            "numero":findValue("numtel2")
        },
        "addresse1":{
            "Ville":findValue("ville1"),
            "commune":findValue("Commune1"),
            "quartier":findValue("Quartier1"),
            "avenu":findValue("Avenu1"),
            "Numero":findValue("numero1")
        },
        "addresse2":{
            "Ville":findValue("ville2"),
            "commune":findValue("Commune2"),
            "quartier":findValue("Quartier2"),
            "avenu":findValue("Avenu2"),
            "Numero":findValue("numero2")
        },
        "images":forProfile,
        "codePostal":findValue("codePostal"),
        "mail":findValue("Email"),
    }
    return data
}
let formulaire = select('form.personne')
if (formulaire != null){
    formulaire.addEventListener('submit', (e)=>{
    e.preventDefault()
    sendpicture()
})}

function saved(message){
    let affichage = document.querySelector('p.info')
    affichage.parentElement.classList.add('succes')
    affichage.innerHTML = message
}

const imprimer = select('button.flexBox-Center.add.imprimerLoc')
if(imprimer != null){
    imprimer.addEventListener('click', ()=>{
        PrintListAppart()
    })
}

function PrintListAppart(){

    var printContents = select('div.toprint').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    document.querySelectorAll('td,th').forEach(tds => {
        tds.style.fontSize = ".6em"
    })
    document.querySelectorAll('td span.email').forEach(sps => {
        sps.style.fontSize = ".9em"
    })
    document.querySelectorAll('td span.nom').forEach(spn => {
        spn.style.fontSize = "1.5em"
        spn.style.fontWeight = "bold"
    })
    window.print();
    document.body.innerHTML = originalContents;
    window.location.reload()
    // tds.style.fontSize = ".8em"

    
    // let data = new FormData();
    // data.append("html", printContents)

    // let xhr = new XMLHttpRequest()
    
    // xhr.onreadystatechange = function(){
    //     if(this.status === 200 && this.readyState === 4){
    //         console.log(this.response["succes"], this.responseType)
    //         if( this.response["succes"] != null){
    //             const forProfile = this.response["succes"]
    //         }
    //         else{
    //             console.log('erreur')
    //         }
    //     }
    // }
    // xhr.open("POST", "/appart/control/printLocataire.php", true)
    // xhr.responseType = 'json'
    // xhr.send(data);
}