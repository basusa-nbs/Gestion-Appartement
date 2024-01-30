// dans cette classe nous implementons 

select('form.formSeCoonecter').addEventListener('submit', (e)=>{
    e.preventDefault()
    const form = e.currentTarget;

    let data  = new FormData()

    data.append('email', form.querySelector('input#adresseMail').value)
    data.append('password', form.querySelector('input#password').value)

    let validator = new Validator(form)
    if (validator.isValid){
        sendData(data)
    }else{
        printEroor("Veullez bien Completew le champ")
    }
})

/**
 * 
 * @param {FormData} form 
 */
function sendData(data){

    let xhr = new XMLHttpRequest()
    
    xhr.onreadystatechange = function(){
        if(this.status === 200 && this.readyState === 4){
            select('div.loadeur').classList.remove('active')
            if(this.response["succes"] != null){
                window.location.href = "/appart/dashboard"
            }
            else{
                showerror(this.response["error"]);
            }
        }
    }

    xhr.open("POST", "/appart/control/login.php", true)
    xhr.responseType = 'json'
    xhr.send(data)
    select('div.loadeur').classList.add('active')
}

function showerror(error){
    // alert("error")
    const er = String(error)

    if(er.includes("mot")){
        const input = select("input#password")
        trairement(input)   
    }
    else{
        const input = select("input#adresseMail")
        trairement(input)
    }
    
    select('p.instruct').innerHTML = er
    select('p.instruct').classList.add('error')
}

/**
 * 
 * @param {HTMLInputElement} input 
 */
function trairement(input){
    const avant = select('p.instruct').innerHTML
    input.style.border = "2px solid red"
    input.style.color = "red"
    input.addEventListener('focus', ()=>{
        input.style.color = "black"
        select('p.instruct').innerHTML = avant
        select('p.instruct').classList.remove('error')
    })
}