// definition d4une classe pour valider les données
class Validator{

    form

    /**
     * 
     * @param {HTMLFormElement} form 
     */
    Validator(form){
        this.form = form
    }
    
    isValid(){
        this.form.querySelectorAll('input').forEach(element => {
            const type = element.getAttribute('type')
            switch (type) {
                case "text":
                    if (!this.checkInputText(element)){return false}
                    break;
                case "email":
                    if (!this.checkInputEmail(element)){return false}
                    break;
                default:
                    break;
            }
        });
        return true
    }
    
    /**
     * 
     * @param {HTMLInputElement} element 
     */
    checkInputEmail(element){
        const value = element.value
        return value === "" ? false : true
    }

    /**
     * 
     * @param {HTMLInputElement} element 
     */
    checkInputEmail(element){
        const value = element.value
        let regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        return regex.test(value) ? true : false
    }
}