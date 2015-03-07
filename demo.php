<?php require('header.php'); ?>

    <div id="container">
        <div class="researchForm" id="f">
            <h2>RECHERCHER</h2>
            <input class="itemForm" id="inputCity" value="Las Vegas - Demo" disabled type="text"/>
            <input class="itemForm" id="inputDate" placeholder="Selectionner une date" type="text"/>
            <p id="textError" class="invisibility textError">Saisir une date entre 1984 et 2134</p>
            <button class="researchButton" type="button" id="locate">Voir le passé</button>
        </div>
        <div id="loaderLight" class="loaderLight">
            <div class="signal">   
                <span class="logoSoleil"></span>
                <div class="ligne" id="q"></div>
                <span class="logoTerre" ></span>
                <p class="signalText">RECEPTION DE LA LUMIÈRE</p>
            </div>
             <div class="flecheLoader">
                <img  src="img/arrow_blue.svg">
            </div>
            <div class="lightReception">
                <div class="carre"></div>
                <div class="ligne" id="p"></div>
                <img class="logoTerre" src="img/logoTerre.svg">
                <p class="signalTextRetour">RETOUR IMAGE</p>
            </div>
           
            <div class="clear"></div>
        </div>
        <div id="frite" class="blocMapClickable"></div>
    </div>

    <div id="webgl"></div>

    <div id="mapTime" class="mapTime">

        <div id="map" class="map"></div>

        <div class="zooming">
            <span id="zoom_plus" class="zoom_plus"></span>
            <span id="zoom_moins" class="zoom_moins"></span>
        </div>
        <div class="ct_timeline" id="ct_timeline">
            <div class="wrapper">
                <div id="timeline" class="timeline">
                    <input type="range" id="range_input">
                    <span class="before_range"></span>
                    <span class="after_range"></span>
                </div>
                <div class="control">
                    <span id="nb_annee"></span>
                    <label for="nb_annee" class="label">Année</label>
                </div>
            </div>
        </div>
    </div>

    <div class="pageFinal" id="pageFinal">
        <div class="crossContact">
            <img src="img/croix.svg" id="crossContact">
        </div>
        <div class="rondLumineu">
            <img src="img/light.png">
        </div>
        <div class="text">
            <p class="textPar">La technologie Timeloght n'est disponible à ce jour que pour Las Vegas.
                Avec votre soutien, ce projet pourrait s'étendre à la terre entière.</p>
            <p class="textPar">Offrir la vision d'un passé révolu était jusqu'alors la mission d'un satellite. Timelight innove en misant
                sur une ressource universelle, inépuisable et naturelle, la lumière</p>
            <p class="textPar">Si sa fonction principale est d'éclairer, ses propriétés peuvent également nous mener vers un chemin inexploré,
                celui du voyage temporel.</p>
            <p class="textPar gras">Si comme nous, vous croyez en ce potentiel</p>
        </div>
        <button class="contactButton" type="button"><a href="contact.php">CONTACTEZ-NOUS</a></button>
    </div>

    <div class="popinSoutien" id="popinSoutien">
        <div id="blockPopin" class="blockPopin">
            <p class="popinText" id="popinText">Soutenez nous ici</p>
        </div>
    </div>
<?php require('footer.php'); ?>