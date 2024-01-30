<?php header("content-type:text/css"); ?>
.formulaireProprietaire{
    display: none;
    padding-top: 0em;
}
form.personne{
    gap: 1em;
    flex-direction: column;
    padding: .5em 2em;
}
div.entetes{
    width: 95%;
    justify-content: space-between;
    align-items: flex-end;
    padding-bottom: 1em;
    border-bottom: 1px solid rgb(249, 249, 249);
}
div.containImage{
    border: 2px solid #4e73df;
    width: 192px;
    border-radius: 50%;
    aspect-ratio: 1;
    background-repeat: no-repeat;
    justify-content: center;
    background-size: cover;
    /* background-position: center; */
    justify-content: center;
}
div.image{
    width: 192px;
    border-radius: 50%;
    aspect-ratio: 1;
    background-color: #4e73df;
    overflow: hidden;
}
.debutForm{
    gap: 2em;
    align-items: end;
}
i.addpicture{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 34px;
    height: 34px;
}
i.addpicture svg{
    width: 34px!important;
    aspect-ratio: 1!important;
}
input#image{  
    width: 128px;
    opacity: 0;
    border-radius: 50%;
    z-index: 1;
    aspect-ratio: 1;
    padding-top: 4em;
}
.debuttitle{
    flex-direction: column;
    gap: 2em;
}
.debuttitle p:first-child{
    color: #4e73df;
    font-family: 'Poppins-bold';
}
.debuttitle p:last-child{
    font-size: .9em;
    color: #434343;
}
.actions{
    gap: 1em;
}
button.action{
    padding: .8em 2.5em;
    border-radius: 7px;
    border: none;
    color: white;
}
button.action:first-child{
    background-color: #f82e1c;
}
button.action:last-child{
    background-color: #4e73df;
}
.inputs{
    flex-direction: column;
    gap: 1em;
    padding-top: 1em;
}
.inputs>div{
    width: 100%;
    display: flex;
    border: none;
    gap: 2em;
    padding: 1em 1em;
    border-radius: 10px;
    box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, .2);
}
div.inputsContenur{
    flex-direction: column;
    gap: 1em;

}
form.personne input{
    border: 1px solid rgb(88, 88, 88);
    border-radius: 5px;
    width: 90%;
}
.table, div.champs{
    padding: 0px 2em;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2em;
}
div.champs{
    gap: 1em ;
    padding: 1em 3em;
}
div.champs div{
    padding: .5em!important;
}
div.champs div input{
    width: 300px!important;
}
.aboutAppartement{
    padding: 1em;
    gap: .1em;
    flex-direction: column;
}
.attributs{
    gap: 1em;
}
.groupinput{
    width: 90%;
    gap: 1em;
}
.groupinput input{
    width: 100%!important;
}
.groupinput>div:first-child{
    width: 30%;
}
.groupinput>div:last-child{
    width: 70%;
}
.items:hover{
    transform: scale(1.01);
    font-weight: bold;
    transition: all .2s;
}
div.succes{
    border: 2px solid #2eb9af !important;
}
.formGroupe.ppays{
    position: relative;
}
.formGroupe.ppays i{
    position: absolute;
    right: 1em;
    display: flex;
    justify-content: center;
    align-items: center;
}
.formGroupe.ppays i img{
    height: 24px;
}
/* div.appartsVis {
    padding: 1em 1em;
    overflow-y: scroll !important;
    max-height: 55vh !important;
    scrollbar-width: 4px;
}
div.appartsVis::-webkit-scrollbar{
    width: 0px;
} */