<?php header("content-type:text/css"); ?>
@font-face {
    font-family: "Poppins-regular";
    src: url('/appart/includes/static/fonts/popins/Poppins-Regular.ttf');
}
@font-face {
    font-family: "Poppins-bold";
    src: url('/appart/includes/static/fonts/popins/Poppins-ExtraBold.ttf');
}
@font-face {
    font-family: "Poppins-light";
    src: url('/appart/includes/static/fonts/popins/Poppins-Light.ttf');
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family:  "Poppins-regular", sans-serif;
    box-sizing: border-box;
}
body{
    display: flex;
    background-color:white;
    min-height: 100vh;
}
.menusBox-item{
    color: black!important;
}
.pays{
    display: none;
    opacity: 0;
    flex-direction: column;
    gap: .5em;
    padding: 1em;
    max-height: 50vh;
    
    /* overflow-x: hidden; */
    overflow-y: scroll;
}
.pays.picpays{
    display: flex;
    opacity: 1;
    transition: all .1s;
}
.responses{
    position: relative;
    padding: 1em 0em  0em 3em;
    width: 50%;
    /* max-width: 50px; */
    /* flex-direction: column; */
    justify-content: flex-start;
    align-items: flex-end;
}
.appartsVis{
    display: flex;
    justify-content: space-between;
    align-items: start;
}
div.inputs{
    width: 100% !important;
}
div.scroll{
    overflow-y: scroll;
    padding: 0px 1em 1em 1em;
    width: 50%;
    height: 65vh;
}
.responses > div{
    border: 1px solid #707070;
    border-radius: 20px;
    height: 100%;
    padding: 1em;
}
.responses p{
    text-align: center;
    color: #707070;
}
.pays > div{
    display: flex;
    gap: 2em;
}
.pays img{
    height: 24px;
}
/* definition des classes pricipqles pour bien styli */
.flexBox{
    display: flex;
}
.flexBox-Center{
    display: flex;
    justify-content: center;
    align-items: center;
}
.flexBox-colum{
    display: flex;
    flex-direction: column;
}
.flexBox-Column-Center{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.conteneur{
    width: 65%;
}
.carte{
    width: 100%;
    box-shadow: 0px 0px 4px 4px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    flex-grow: 1;
    align-items: stretch!important;
}
.twoChild{
    width: 50%;
}
.imZoom{
    flex-grow: 1;
    align-items: stretch!important;
    overflow: hidden;
    border-radius: 20px 0px 0px 20px;
}
.with100{
    width: 100%;
}
.iconButton{
    height: 24px;
}
.iconButton svg{
    height: 24px;
}
.radius5{
    border-radius: 5px;
}
.gap1em{
    gap: 1em;
}
.googleButton, .facebookButton, .submitButton{
    border: none;
    gap: 1em;
    padding: .5em;
    font-family: 'Poppins-bold';
    color: white;
    min-height: 40px;
}
.submitButton{
    background-color:#4e73df;
    margin: 2em 0px 0px 0px;
}
.googleButton{
    background-color: #ea4335;
}
.facebookButton{
    background-color: #30497c;
}
.googleButton svg path, .facebookButton svg path{
    fill: #fff;
}
input:focus{
    border: 2px solid #30497c;
}
/* input:active{
    border: 2px solid #30497c;
} */
.linkText{
    font-size: .8em;
    color: #4e73df!important;
    font-family: 'Poppins-bold';
}
.textComprehension{
    text-align: center;
    color: rgb(134, 134, 134);  
    font-size: .9em;
    margin: 1em 0px 0px; 
}
a{
    align-items: center;
    gap: 1em;
}
.content{
    margin-left: 280px;
    flex-direction: column;
    padding: 2em;
    gap: 1em;
    width: 100%;
}
table {
    border-collapse: collapse;
    width: 93%!important;
    padding: 0em 0px 1em 2em;
}

thead{
    margin-bottom: 1em;
    background-color: #4e73df;
    padding: .5em 1em;
    border-radius: 10px;
}

th, td {
    border: none;
    padding: 8px;
    text-align: left;
    font-size: .9rem;
}
td span.nom{
    font-size: 1.3rem;
}
td img{
    width: 64px;
    aspect-ratio: 1;
    border-radius: 50%;
}
th.p25, td.p25{
    width: 25%;
}
th.p20, td.p20{
    width: 20%;
}
th.p10, td.p10{
    width: 10%;
}

th.p30, td.p30{
    width: 30%;
}
th.p35, td.p35{
    width: 35%;
}
td{
    line-height: 24px;
}
tr{
    display: flex;
    align-items: center;
}
th {
    color: white;
    font-family: 'Poppins-bold';
}
tr.row{
    padding: .5em 1em;
    border-radius: 20px;
    box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.search-container {
    margin-left: 2em;
    position: relative;
    display: flex;
    align-items: center !important;  
    border-radius: 10px;
}
.search-container.searching{
    z-index: 2 !important;
    position: fixed;
}
  
img {
    max-width: 100%;
    height: auto;
}
  
tbody{
    gap: 1em;
}
/* tbody tr:nth-child(even) {
    background-color: #f2f2f2;
} */
.lister{
    display: flex;
    margin-right: 10%;
    align-items: center;
    width: 100%;
    /* padding-right: 10%; */
}
.lister input{
    width: 100% !important;
}
.lister i{
    display: flex;
    align-items: center;
    width: 10px;
    position: absolute;
    right: 60px;
}
td svg{
    height: 24px;
    aspect-ratio: 1;
    fill: white;
}
tr.actions{
    justify-content: flex-end;
    position: absolute;
    width: 70%;
    padding: 1.2em!important;
    box-shadow: none!important;
    opacity: 0;
    background-color: #fff;
}
tr.actions:hover{
    background-color: rgba(255, 255, 255, 0.8);
    opacity: 1;
    transition: all .3s;
}
td.modifier, td.effacer{
    border-radius: 50%;
    padding: .2em;
    width: 48px;
    margin: .5em;
    aspect-ratio: 1;
}
td.modifier{
    background-color: #4e73df;
}
td.effacer{
    background-color: #ea4335;
}
input{
    overflow: hidden;
}
.barDessus{
    justify-content: space-between;
    align-items: center;
}
.search-container{
    width: 70%;
    gap: 1em;
}
#search{
    width: 90%;
    border: none;
    padding: 1em 1em 1em 4em;
    background-color: #ddd;
    border-radius: 5px;

}
button.search{
    background-color: transparent;
    border: none;
    left: 1em;
    display: flex;
    position: absolute;
    align-items: center;
    justify-content: center;
}
button.search i{
    display: flex;
    align-items: center;
    justify-content: center;
}
button.search svg{
    fill: black!important;
}
.adminConteneur{
    gap: 2em;
    align-items: stretch;
}
p.name{
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    font-size: .9em;
    padding: 0px 1em;
    border-right: 1px solid beige;
}
.barActions{
    gap: 1em;
    padding: 1em 0px 1em 2em;
}
.addicon{
    padding: .3em;
    aspect-ratio: 1;
    width: 24px;
    border: 2px solid white;
    border-radius: 50%;
}
button.add{
    border: none;
    background-color: #4e73df;
    gap: 1em;
    padding: .8em 1.5em;
    border-radius: 30px;
    color: #fff;
}
.image img{
    width: 48px;
    aspect-ratio: 1;
    border-radius: 50%;
}
.formGroupe{
    display: flex;
    align-items: center;
    position: relative;
}
.titleInput{
    display: none;
    color: #ddd;
    position: absolute;
    justify-content: center;
    align-items: center;
    font-size: .8rem;
    padding: .2em 5px;
    margin-left: 1.25em;
    /* height: 6px; */
}
select#Etat{
    position: absolute;
    margin-top: 0px;
    opacity: .0;
    margin-top:0px;
    margin-left: 0px;
    margin-bottom:0px;
    margin-right: 0px; 
    width: 95%;
    padding: .7em 1em;
}
.titleInput.anim{
    display: flex;
    animation: fadeIn .2s linear forwards;
}
.titleInput.animout{
    animation: fadeOut .2s linear forwards;
}

input#image:hover{
    cursor: pointer;
}

/* Scrollbar track */
/* tbody::-webkit-scrollbar-track {
    background-color: #f5f5f5;
    border-radius: 10px;
  }
  
  
  tbody::-webkit-scrollbar-thumb {
    background-color: #000;
    border-radius: 10px;
    border: 1px solid #ccc;
    box-shadow: inset 0 0 5px #ccc;
  }
  
  Scrollbar thumb on hover
  tbody::-webkit-scrollbar-thumb:hover {
    background-color: #333;
  }
  
  
  tbody::-webkit-scrollbar-button {
    background-color: #f5f5f5;
    border-radius: 50%;
  }
  
  
  tbody::-webkit-scrollbar-corner {
    background-color: #f5f5f5;
  } */

/* ::-webkit-scrollbar {
    width: 0px;
    height: 0px;
  }
::-webkit-scrollbar-track {
    opacity: 1;
}
::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background: rgb(255, 255, 255, .2);
} */

div.loadeur.active{
    display: block;
    opacity: 1;
    transition: all .2s;
}
span.loding{
    display: block;
    height: 4px;
    background-color: #4e73df;
    width: 20%;
    animation: loading 1s ease-in-out infinite;
}
@keyframes loading {
    0%{
        transform: translateX(0px);
        opacity: 1;
    }
    90%{
        transform: translateX(500px);
        opacity: 1;
    }
    91%{
        opacity: 0;
    }
    100%{
        transform: translateX(-10px);
        opacity: 0;
    }
}


/* animation */
@keyframes fadeIn {
    0%{ 
        transform: translate(-5px,0);
        color: #ddd;
        font-family: 'Poppins-bold';
        font-size: .8rem;
        background-color: tr;
    }
    95%{
        background-color: #fff;
    }
    100%{
        background-color: #fff;
        transform: translate(-5px,-19px);
        color: black;
        font-family: 'Poppins-bold';
        font-size: .7rem;
    }
}
@keyframes fadeOut {
    0%{
        background-color: #fff;
        transform: translate(-5px,-19px);
        color: black;
        font-family: 'Poppins-bold';
        font-size: .7rem;
    }
    5%{
        background-color: transparent;
    }
    100%{ 
        /* display: none; */
        transform: translate(-5px,0);
        color: #ddd;
        font-size: .8rem;
        font-family: 'Poppins-bold';
        background-color: tr;
    }
}


.zoom1-1:hover{
    transform: scale(1.05);
    transition: all .3s;
}
.tiitreForm{
    font-size: 2.5vw;
}
.linkText:hover{
    text-decoration:underline;
    transition: all .3s;
}
input{
    padding: .7em 1em;
    border: 2px solid #ddd!important;
}
button:hover, div.cancel svg:hover{
    transform: scale(1.02);
    cursor:pointer;
    transition: all .3s;
}
div.contenThemes:hover{
    transform: scale(1);
    transition: all .5s;
}

div.tables.moveLeft, div.barActions.moveLeft{
    animation: moveleft .2s linear both;
} 
@keyframes moveleft {
    0%{
        transform: translateX(0px);
    }
    100%{
        transform: translateX(110%);
    }
}
table.picPersonne{
    display: none !important;
    opacity: 0;
}
table.picPersonne.piclist{
    display: flex !important;
    opacity: 1;
    transition: all .3s;
}
div.carteAppart{
    opacity: 0 !important;
}
div.carteAppart.piclist{
    display: flex !important;
    opacity: 1 !important;
    transition: all .3s;
}
div.formulaireProprietaire.moveplace{
    /* position: absolute; */
    display: flex!important;    
    animation: moveplace .2s linear backwards;
}
i.piclist{
    transform: rotateZ(-90deg);
    transition: all .5s;
}

@keyframes moveplace {
    0%{
        opacity: 0;
        overflow: hidden;
    }
    100%{
        opacity: 1;
        overflow: hidden;
    }
}
table.picPersonne tbody tr:hover{
    background-color: #4e73df;
    color: white;
    transition: all .3s;
}
div.carte.appartement.piclist{
    box-shadow: 0px 0px 2px 2px rgba(78, 115, 223, .3) !important;
    border: 3px solid #4e73df;
    border-collapse: separate;
    /* transition: all .2s; */
}

div.image.upload{
    animation: upload .5s linear both;
}

@keyframes upload {
    0%{
        width: 192px;
        background-color: #4e73df;
        transform: translate(0px, 0px);
    }   
    70%{
        width: 56px; 
        position: absolute;
        transform: translate(1px, 1px);
    }
    100%{
        background-color: #4e72dfef;
        width: 56px;
        transform: translate(64px, 64px);
    }
}
.popup{
    display: none;
    opacity: 0;
    justify-content: center;
    align-items: center;
    position: fixed;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.3);
}
div.popup.view{
    display: flex;
    opacity: 1;
    transition: all .3s;
}
div.popupin{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 30%;
    background-color: #fff;
    border-radius: 20px;
}
div.poupText{
    display: flex;
    flex-direction: column;
    gap: 1em;
    padding: 2em;
}
p.infoaver{
    font-size: .8rem;
}
div.buttonspopup{
    width: 100%;
    justify-content: space-between;
    padding: 2em;
    border-top: 1px solid #cecece;
}   
button.action{
    border-radius: 5px;
    padding: .7em 2em !important;
    border: none;
    color: white;
} 
button.non{
    background: #ea4335;
}
button.oui{
    background-color: #4e73df;
}

@media screen and (max-width: 1024px) {
    input{
        font-size: .8em;
    }
}

div.content.search{
    display: none !important;
    position: fixed;
    opacity: 0;
    position: absolute;
    height: 100vh;
    width: 81%;
    background-color: rgba(255, 255, 255, 1);
}
div.content.search.searching{
    display: flex !important;
    position: fixed;
    opacity: 1;
    transition: all .2s;
}
