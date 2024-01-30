//ce scrpt va nous permetre de communiquer avece le serveur ph
const formulaire = document.querySelector('form.appart')
if(formulaire != null){
    formulaire.addEventListener('submit', (e) => {
        e.preventDefault()
        sendpicture()
    })
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
                sendData(formulaire, forProfile);
            }
            else{
                console.log('erreur')
            }
        }
    }
    xhr.open("POST", "/appart/includes/media/images/savePictures.php", true)
    xhr.responseType = 'json'
    xhr.send(data);
}
/**
 * 
 * @param {HTMLFormElement} formulaire 
 */
function sendData(f, p){
    const data = new FormData()
    data.append("NbrePersonnes", parseInt(select("input#personne").value))
    data.append("Ville", select("input#ville").value)
    data.append("commune", select("input#Commune").value)
    data.append("Quartier", select("input#Quartier").value)
    data.append("Avenu", select("input#Avenu").value)
    data.append("numero", select("input#numero").value)
    data.append("idProprio", parseInt(select("div.Proprietaire input#id").value))
    data.append("idTarif", parseInt(select("div.Tarif input#id").value))
    data.append("Categorie", parseInt(select("div.Categorie input#id").value))
    data.append("Types", parseInt(select("div.Type input#id").value))
    data.append("photo", p)
    
    let equipements = ""
    document.querySelectorAll('div.lesequipements span').forEach(element => {
        equipements = equipements + element.innerHTML + ","
    });
    equipements = equipements.substring(0, equipements.length -1)
    data.append("equipements", equipements)
    

    const xhr = new XMLHttpRequest()

    xhr.onreadystatechange = function(){
        if(this.status === 200 && this.readyState === 4){
            if(this.response["succes"] != null){
                window.location.href = "/appart/Apparttement"
            }
            else{
                showerror(this.response["error"]);
            }
        }
    }

    xhr.open("POST", "/appart/control/Appartement.php", true)
    xhr.responseType = 'json'
    xhr.send(data)
}

const imprimer = select('button.flexBox-Center.add.listAppart')
if(imprimer != null){
    imprimer.addEventListener('click', ()=>{
        PrintListAppart()
    })
}

function PrintListAppart(){
    
    var printContents = select('div.tables.table.print').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    window.location.reload()

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