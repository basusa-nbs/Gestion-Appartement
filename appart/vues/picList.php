<?php 
namespace Appart\vues;
use Appart\models\Locataire;
use Appart\models\Proprietaire;
use Appart\models\Tarif;
use Appart\models\categorie;
use Appart\models\Typer;
use Appart\models\Appartements;
use Appart\models\Dashboard;


class PicList{
    public static function personne($personne){
        $personnes = ($personne == "locataire") ? Locataire::getListeLocataires() :  Proprietaire::getListeProprietaires();
        ob_start();
        $media = "/appart/includes/media/images/";
        ?>
            <table class="flexBox-Column-Center picPersonne <?= $personne ?> with100">
                <thead class="with100">
                  <tr class="titreTable with100">
                    <th class="p25">Photo</th>
                    <th class="p">Identités</th>
                  </tr>
                </thead>
                <tbody class="with100 flexBox-Column-Center">
                    <?php
                    foreach ($personnes as $key => $value) {
                    ?>
                        <tr class="row with100">  
                            <td class="p25"><img src=<?php echo '"'. $media . $value->getPhoto().'"'?> alt="Photo"></td>
                            <td class="p40"><span class="nom"><?php echo $value->getNom(). " " . $value->getPrenom() ?></span><br><span class="email" style="font-family:Poppins-light;"><?= $value->getMail()?></span></td>
                            <input type="hidden" name="id" value="<?= $key ?>" id="id">
                        </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        <?php
        $picListPers = ob_get_clean();
        return $picListPers;
    }

    public static function types(){
        $types = Typer::getListType();
        ob_start();
        ?>
            <table class="flexBox-Column-Center Type picPersonne with100">
                <thead class="with100">
                  <tr class="titreTable with100">
                    <th class="p20">type</th>
                    <th >description</th>
                  </tr>
                </thead>
                <tbody class="with100 flexBox-Column-Center">
                    <?php
                    foreach ($types as $key => $value) {
                    ?>
                        <tr class="row with100">  
                            <td class="p20"><?= $value->getType() ?></td>
                            <td style="font-weight: 100; font-family:Poppins-light; font-size:.8em; width:80%"><?= $value->getDescription() ?></td>
                            <input type="hidden" name="id" value="<?= $key ?>" id="id">
                        </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        <?php
        $picListICon = ob_get_clean();
        return $picListICon;
    }
    
    private static function formatImage(string $imageName){
        $imageName = str_replace(' ', '\ ', $imageName);
        $imageName = str_replace('(', '\(', $imageName);
        $imageName = str_replace(')', '\)', $imageName);

        return $imageName;
    }

    public static function cartApparts(){
        $appartement = Appartements::getListeAppartements();
        $media = "/appart/includes/media/images/";
        ob_start();
        foreach ($appartement as $key => $value) {
            $proprio = Proprietaire::getProprietaire($value->getIdProprio());
            $tarif = Tarif::getTarif($value->getIdTarif());
            $categorie = categorie::getcatego($value->getCategorie());
            $typ = Typer::gettyp($value->getTypes());
            // $equipements = Equipements::getListEquiement($value->getIdEqui())
        ?>
            <div class="carte appartement  flexBox-Center" style="width:350px !important">
                <input type="hidden" name="id" id="id" value="<?= $key ?>">
                <div class="twoChild flexBox imZoom">
                    <div class="imageAppartemets zoom1-1" style="background-image: url(<?= $media . PicList::formatImage($value->getPhoto()) ?>);">
                    </div>
                </div>
                <div class="aboutAppartement flexBox twoChild">
                    <div class="attributs flexBox prorpietaire">
                        <i class="proprietaire">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z"/>
                            </svg> 
                        </i>
                        <div class="info">
                            <p class="nom" style="font-size: .8em;"><?= $proprio->getNom() ." ".$proprio->getPrenom() ?></p>
                            <p class="email" style="font-size: .8em;"><a href="mailto:<?= $proprio->getMail() ?>"><?= $proprio->getMail() ?></a></p>
                            <p class="tel" style="display: flex; gap:1em; font-size: .8em;">
                                <span class="t1">prixSemHs : <?= $tarif->getprix_semhs() ?> </span>
                                <span class="t2">prixSemHs : <?= $tarif->getprix_semBs() ?> </span>
                            </p>
                        </div>
                    </div>
                    <div class="attributs flexBox adresse">
                        <i class="adresse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                            </svg>
                        </i>
                        <div class="info">
                            <p class="adresse" style="font-size: .8em;">
                                <?= $value->getVille() .'/'.$value->getCommune().'/'.$value->getQuartier().'/'.$value->getAvenu().'/'.$value->getNumero() ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        $cartApparts = ob_get_clean();
        return $cartApparts;
    }

    public static function categorie(){
        $categories = categorie::getListCategorie();
        ob_start();
        ?>
            <table class="flexBox-Column-Center Categorie picPersonne with100">
                <thead class="with100">
                  <tr class="titreTable with100">
                    <th class="p">categories</th>
                  </tr>
                </thead>
                <tbody class="with100 flexBox-Column-Center">
                    <?php
                    foreach ($categories as $key => $value) {
                    ?>
                        <tr class="row with100">  
                            <td class="p40"><?= $value->getCategorie() ?></td>
                            <input type="hidden" name="id" value="<?= $key ?>" id="id">
                        </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        <?php
        $picListICon = ob_get_clean();
        return $picListICon;
    }

    public static function tarif(){
        $tarifs = Tarif::getListetarifs();
        ob_start();
        ?>
            <table class="flexBox-Column-Center Tarif picPersonne with100">
                <thead class="with100">
                  <tr class="titreTable with100">
                    <th class="p20">code</th>
                    <th class="p25">prixemHS</th>
                    <th class="p25">prixemBS</th>
                  </tr>
                </thead>
                <tbody class="with100 flexBox-Column-Center">
                    <?php
                    foreach ($tarifs as $key => $value) {
                    ?>
                        <tr class="row with100">  
                            <td class="p20"><?= $value->getcode_tarif() ?></td>
                            <td class="p25"><?= $value->getprix_semhs() ?></td>
                            <td class="p25"><?= $value->getprix_semBs() ?></td>
                            <input type="hidden" name="id" value="<?= $key ?>" id="id">
                        </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        <?php
        $picListICon = ob_get_clean();
        return $picListICon;
    }
    public static function pays(){
        $pays = json_decode(file_get_contents(dirname(__DIR__). DIRECTORY_SEPARATOR .'includes'.DIRECTORY_SEPARATOR.'static'.DIRECTORY_SEPARATOR.'allContry.json'), true);
        ksort($pays); 
        $icon = "/appart/includes/static/";

        ob_start();
        foreach ($pays as $key => $value) {
            // $value = get_object_vars($value);
            ?>
            <div class="items">
                <i class="icon<?= $value["identifiant"]?>">
                    <img src="<?= $icon.$value["flag_4x3"]?>" alt="icon<?=$value["identifiant"] ?>">
                </i>
                <span class="code"><?=$value["code"]?></span>
                <span class="name"><?=$value["nom"]?></span>
            </div>
            <?php
        }
        $pays = ob_get_clean();
        return $pays;
    }

    public static function recents(){
        $tarifs = Dashboard::activites();
        ob_start();
        ?>
            <table class="flexBox">
                <tbody class="flexBox">
                    <?php
                    $i = 0;
                    foreach ($tarifs as $key => $value) {
                        $i = $i + 1;
                    ?>
                    <tr class="flexBox">
                        <td class="p10 c"><span class="1"><?= $i ?></span></td>
                        <td class="p25"><span class="action "><?= $value->getTablename() ?></span></td>
                        <td class="p35 c"><span class="save label"><?= $value->getTypeopetation() ?></span></td>
                        <td class="p25 e"><span class="date "><?= $value->getDatetime()->format("Y-m-d H:i:s") ?></span></td>
                    </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        <?php
        $picListICon = ob_get_clean();
        return $picListICon;
    }

}