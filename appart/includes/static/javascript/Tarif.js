//ce scrpt va nous permetre de communiquer avece le serveur ph
const formulaire = document.querySelector('form.tarif')
    if(formulaire != null){
        formulaire.addEventListener('submit', (e) => {
            e.preventDefault()
            sendData(formulaire);
        })
    }

/**
 * 
 * @param {HTMLFormElement} formulaire 
 */
function sendData(formulaire){
    const data = new FormData(formulaire)
    const xhr = new XMLHttpRequest()

    xhr.onreadystatechange = function(){
        if(this.status === 200 && this.readyState === 4){
            if(this.response["succes"] != null){
                window.location.href = "/appart/tarif"
            }
            else{
                showerror(this.response["error"]);
            }
        }
    }

    xhr.open("POST", "/appart/control/Tarif.php", true)
    xhr.responseType = 'json'
    xhr.send(data)
}


