<?php header("content-type:text/css"); ?>
.tableauContain{
    width: 90%;
    flex-direction: column;
    margin-left: 2em;
    gap: 2em;
}
.td{
    flex-direction: column;
    gap: 1em;
}
.tableau{
    align-items: center;
    gap: 1.5em;
}
.cartestds{
    width: 100%;
    /* gap: 2em; */
    justify-content: space-between;
    /* align-items: center; */
}
.cartetd{
    background-color: #e9e9e9;
    border-radius: 10px;
    flex-direction: column;
    gap: 1em;
    padding: 1.3em 1.5em;
    justify-content: center;
    width: 230px;
}
.cartetd:hover{
    background-color: #4e73df;
    transition: all .2s;
}
.cartetd:hover svg{
    fill: #fff !important;
    transition: all .2s;
}
.cartetd:hover span{
    color: #fff !important;
    transition: all .2s;
}
i.apparts svg{
    width: 42px !important;
}
i.tarif svg{
    width: 48px !important;
}
i.proprio svg{
    width: 56px !important;
}
div.cartetd i svg{
    fill: #4e73df !important;
}
span.chiffre{
    font-family: Poppins-bold;
}
div.stat.flexBox{
    width: 100%;
}
div.stat p.flexBox{
    width: 50%;
    flex-direction: column;
    padding: 0em .5em;
    font-size: .8rem;
}
div.stat p.flexBox:first-child{
    align-items: end;
    border-right: 2px solid black;
}
p.l{
    font-size: .8rem;
}
i.dashboard svg, i.recents svg{
    fill: black;
}
table.flexBox{
    padding: 0px !important;
    width: 65% !important;
}
tbody{
    width: 100% !important;
    flex-direction: column;
}
td{
    display: flex;
}
td.c{
    justify-content: center;
    align-items: center;    
}
td.e{
    justify-content: flex-end;
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
tr{
    background-color: #e9e9e9;
    border-radius: 10px;
}
span.label{
    text-align: center;
    font-size: .8rem !important;
    /* color: white !important; */
    border-radius: 5px;
    width: 60%;
}
span.save{
    background-color: #2eb9af;
}
span.delete{
    background-color: #df4e4e;
}
span.edition{
    background-color: #4e73df;
}