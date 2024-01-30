<?php header("content-type:text/css"); ?>
    div.tableTarif{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr ;
        gap: 3em;
        padding: 0px 2em;
    }
    div.tarif{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* width: 300px; */
        aspect-ratio: 1;
        border: 1px solid #a7a7a7;
        border-radius: 10px;
    }
    p.prix{
        font-size: .8em;
    }
    .temes{
        overflow: hidden;
        border: 1px solid #a7a7a7;
        border-radius: 10px 10px 0px 0px;
    }
    div.contenThemes{
        background-image: url('../images/tarif3.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        transform: scale(1.1);
        aspect-ratio: 1.5;
    }
    div.tarifinfo h3{
        margin: .3em 0px;
        color: #4e73df;
    }
    div.tarifinfo{
        display: flex;
        padding: 1em 2em;
        flex-direction: column;
        width: 100%;
        border-top: 1px solid #a7a7a7;
        gap: .2em;
    }
    .contentTarif{
        position: fixed;
        display: none;
        align-items: center;
        justify-content: center;
        width: 100%;
        opacity: 0;
        height: 100vh;
        background-color: rgba(0, 0, 0, .3);
    }
    .contentTarif.visible{
        display: flex;
        opacity: 1;
        transition: all .4s;
    }
    form.tarif{
        gap: 1em;
        padding: 1em;
        background-color: white;
        border-radius: 20px;
    }
    div.cancel{
        justify-content: end;
    }
    div.cancel i{
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid #ea4335;
        width: 32px;
        aspect-ratio: 1;
        border-radius: 50%;
    }
    div.input{
        padding: 0px 3em;
    }
    div.cancel svg{
        height: 16px;
        fill: #ea4335!important;
    }
    form.tarif input{
        width: 400px;
        border-radius: 5px;
        border: 2px solid #a7a7a7;
    }
    form.tarif h2{
        margin-bottom: .5em;
    }
    form.tarif button{
        margin: 2em 0px;
    }
    
    .contratinfo{
        position: relative;
        flex-direction: column;
        padding: 2em;
        gap: 1em;
    }
    .contratinfo p{
        font-size: .7rem;
    }
    .contratinfo p.nom{
        font-family: 'Poppins-bold';    
    }
    .tarifinfo{
        border-radius: 0px 0px 9px 9px;
    }
    .tarifinfo h2{
        color: white;
    }
    .tarifinfo.encours{
        background-color: #4e73df;
        border: 4px solid #4e73df;
    }
    .tarifinfo.signe{
        background-color: #2eb9af;
        border: 4px solid #2eb9af;
    }
    .tarifinfo.resilie{
        background-color: #df4e4e;
    
        border: 4px solid #df4e4e;
    }
    button.rc{
        display:none; 
    }
    button.rc.notin{
        display: flex;
    }
    div.choisir{
        position: absolute;
        width: 20px !important;
        aspect-ratio: 1;
        border-radius: 5px !important;
        background-color: transparent ;
        border: 2px solid #4e73df !important;
        right: 2em;
    }
    div.choisir:hover{
        transform: scale(1.1);
        cursor: pointer;
        transform: all .3s;
    }
    div.choisir.activate{
        background-color: #4e73df;
    }