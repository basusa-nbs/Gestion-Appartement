<div class="tables">
    <p>
        resultat de la recherche <span class="motcle"><?= $data[0] ?></span>
    </p>
    <?= $data[1] ?>
    <p class="null"><?= $data[2] ?></p>
    <style>
        div.tables > p{
            padding: .5em;
            padding-left: 2em;
        }
        p.who{
            font-weight: bold;
        }
        span.motcle{
            font-size: 1.5em;
            font-weight: bold;
        }
        table{
            padding-top: 1em;
        }
        tbody{
            gap: 0px !important;
        }
        tbody tr{
            box-shadow: none !important;
            border-radius: 0px !important;
        }
        tbody tr:nth-child(odd){
            background-color: #f6f6f6;
        } 
        thead{
            border-radius: 0px !important;
            margin: 0px !important;
        }
        p.null{
            padding: 1em 1em !important;
            font-size: 1.8em;
            font-weight: bold;
        }
        span.found{
            color: #1b54ff !important;
            font-weight: bold;
        }
    </style>
</div>
<script src="/appart/includes/static/javascript/search.js" defer></script>
