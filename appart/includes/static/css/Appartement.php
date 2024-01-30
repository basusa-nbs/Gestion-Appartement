<?php header("content-type:text/css"); ?>
.imageAppartemets{
    flex-grow: 1;
    /* background-image: url(/appart/includes/media/images/"th (1)".jpg); */
    background-size: cover;

}
.table{
    grid-template-columns: 1fr 1fr 1fr !important;
}
div.appartement{
    flex-direction: column;
    box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, .1)!important;
    /* width: 100%!important; */
}
.containImage{
    border-radius: 20px !important;
}
.image {
    border-radius: 15px !important;
}
.imageAppartemets {
    height: 250px;
}
.twoChild {
    border-radius: 20px 20px 0px 0px !important;
    width: 100% !important;
}
.inputs>div{
    width: 100% !important;
}
.flexEnd{
    justify-content: flex-end;
}
div.table i{
    font-size: .8em;
    font-family: 'Poppins-bold';
    color: #4e73df ;
}
div.table i svg{
    fill: #4e73df!important;
}
div.table p{
    font-size: .8em;
}
div.attributs{
    margin-bottom: .5em;
    border-bottom: 1px solid #707070;
}
div.attributs:last-child{
    border-bottom: none;
    margin-bottom: 0px;
}
.info{
    padding: .5em 0px;
    display: flex;
    flex-direction: column;
    gap: .5em;
}
p.email{
    font-size: .8em!important;
}
div.aboutAppartement svg{
    height: 24px!important;
}
table{
    width: 100% !important;
    padding: 0px !important;
    border-radius: 10px;
    align-items: start !important;
    border: 1px solid #4e73df;
    justify-content: start !important;
}
thead{
    border-radius: 10px 10px 0px 0px !important;
    margin-bottom: 0px !important;
    /* position: fixed !important;
    margin-top: 0px !important;
    margin-left: 0px !important;
    margin-right: 0px !important; */
}
tbody{
    gap: 0px !important;
    max-height: 60vh;
    overflow-y: scroll;
    align-items: start !important;
    justify-content: start !important;
    scrollbar-width: 8px;
}
tbody tr{
    border-radius: 0px !important;
    box-shadow: none !important;
    border-bottom: 1px solid #434343;
}
tbody tr:last-child{
    border: none !important;
}
