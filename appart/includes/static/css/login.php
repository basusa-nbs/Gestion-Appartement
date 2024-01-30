<?php header("content-type:text/css"); ?>
.imageAppartemets{
    flex-grow: 1;
    background-image: url(../images/backgroung.jpg);
    background-size: cover;

}

.seConnecterFormulaire{
    padding: 3em 5vw;
    gap: 1em;
}
.formSeCoonecter{
    align-items: stretch!important;
    gap: 1em;
    margin: 2em 0px 0px 0px;
    /* flex-grow: 1; */
}
.formGroupe{
    margin:0px;
}
.gap05em{
    gap: .5em;
}
.labelcheck{
    font-size: .8em;
}
.flexEnd{
    justify-content: flex-end;
}
input{
    padding: .7em 1em ;
    border-radius: 5px;
    border: 1px solid #181818;
}
.autreMethodes{
    gap: 1em;
}
.submitButton{
    font-family: 'Poppins-bold';
}
.ContentcheckLabel{
    padding: 1em 0px 0px 0px;
}
/* configuration
 */
a{
    text-decoration: none;
    text-decoration-style: none;
    color: #4e73df!important;
}
#seSouvenir{
    padding: 6px!important;
}
p.instruct{
    padding: 1em;
    font-size: .7em;
    text-align: center;
    color: #5f5f5f;
    border: 1px solid #c4c4c4;
    border-radius: 5px;
    min-height: 72.8px;
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: center;
}
p.instruct.error{
    color: #e50000;
    border: 1px solid #e50000;
}
div.seConnecterFormulaire{
    position: relative;
}
div.loadeur{
    display: none;
    opacity: 0;
    position: absolute;
    left: 0px;
    right: 0px;
    top: 0px;
    bottom: 0px;
    border-radius: 0px 20px 20px 0px;
    background-color: rgba(255, 255, 255, .8);
    overflow: hidden;
}