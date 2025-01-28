<?php
    require_once "functions.php";
    showStartHtmlDoc(); 
    function showContent() {
        echo'
            <body>           
                <section class="introduction">
                <div><p>Demografie<br>
                    Ik ben een vrouw van 22 jaar<br>
                    Ik ben 1,54m lang en kom uit Nederland<br>
                    Ik woon in Sint Geertruid, een klein dorp in de buurt van Maastricht.
                    </p>
                    <p>Opleidingen<br>
                    Mijn middelbareschoolniveau is havo<br>
                    Vervolgens bij ik bij Zuyd Hogeschool bedrijfskunde gaan studeren<br>
                    Na mijn opleiding bij Zuyd ben ik de pre-master Information management and Business Intelligence gaan doen.
                    </p>
                    <p>Hobbies<br>
                    Mijn hobbies zijn lezen en koken. Het liefst aziatisch.</p></div>
                </section>
            </body>
        ';
    }
    showContent ();
    showEndhtmlDoc();
?>