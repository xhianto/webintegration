<?php
include 'meetkunde.php';
$title = "Werkcollege 1";
$aantalkeerFunctiesGebruikt = 0;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <title><?php echo $title?></title>
</head>

<body>
    <div class="container">
        <h1 class="">Welcome to <?php echo $title?></h1>
        <label>Selecteer een oefening:</label>
        <select id=oefeningDropDown name="oefening" id="oefening">
            <option value="oef1">Oefening 1</option>
            <option value="oef2">Oefening 2</option>
            <option value="oef3">Oefening 3</option>
            <option value="oef4">Oefening 4</option>
            <option value="oef5">Oefening 5</option>
            <option value="oef6">Oefening 6</option>
            <option value="oef7">Oefening 7</option>
            <option value="oef8">Oefening 8</option>
            <option value="oef9">Oefening 9</option>
            <option value="oef10">Oefening 10</option>
            <option value="oef11">Oefening 11</option>
            <option value="oef12">Oefening 12</option>
            <option value="oef13">Oefening 13</option>
            <option value="oef14">Oefening 14</option>
            <option value="oef15">Oefening 15</option>
            <option value="oef16">Oefening 16</option>
            <option value="oef17">Oefening 17</option>
            <option value="oef18">Oefening 18</option>
            <option value="oef19">Oefening 19</option>
        </select>
        <div id="oef1" class="oefening">
            <h2 class="alert alert-info">Oefening 1 - Constante en functie</h2>
            <?php
            $straal = 2.2;
            print berekenOpperVlakteCirkel($straal);
            ?>
        </div>
        <div id="oef2" class="oefening">
            <h2 class="alert alert-info">Oefening 2 - Meetkunde</h2>
            <table class="table table-bordered">
                <tr>
                    <th>
                    </th>
                    <th>Gegevens</th>
                    <th>Oppervlakte</th>
                </tr>
                <tr>
                    <th>Driekhoek</th>
                    <td>
                        <p>basis = 3</p>
                        <p>hoogte = 2</p>
                    </td>
                    <td>
                        <?php 
                            print berekenOppervlakteDriehoek(2, 3);
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Vierkant</th>
                    <td>
                        <p>zijde = 4</p>
                    </td>
                    <td>
                        <?php
                            print berekenOppervlakteVierkant(4);
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Rechthoek</th>
                    <td>
                        <p>zijde1 = 5</p>
                        <p>zijde2 = 6</p>
                    </td>
                    <td>
                        <?php
                            print berekenOppervlakteRechthoek(5, 6);
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div id="oef3" class="oefening">
            <h2 class="alert alert-info">Oefening 3 - Globale variabelen</h2>
            <?php 
            function funtionsExecutedCounter(){
                global $aantalkeerFunctiesGebruikt;
                $aantalkeerFunctiesGebruikt++;
            }
            echo $aantalkeerFunctiesGebruikt;
            ?>
        </div>
        <div id="oef4" class="oefening">
            <h2 class="alert alert-info">Oefening 4 - Variabelen</h2>
            <?php
                $variabele1 = 0;
                $variabele4 = 0;
                $variabele5 = 0;
                echo "<b>isset(\$variabele1): </b>";
                echo isset($variabele1)? "true" : "false";
                echo "<br /><b>isset(\$variabele2): </b>";
                echo isset($variabele2)? "true" : "false";
                echo "<br /><b>empty(\$variabele3) == false: </b>";
                echo empty($variabele3)? "true" : "false";
                echo "<br /><b>empty(\$variabele4) == false: </b>";
                echo empty($variabele4)? "true" : "false";
                echo "<br /><b>isset(\$variabele5) && empty(\$variabele5): </b>";
                echo (isset($variabele5) && empty($variabele5))? "true" : "false";
            ?>
        </div>
        <div id="oef5" class="oefening">
            <h2 class="alert alert-info">Oefening 5 - Controlestructuren</h2>
            <?php 
            $array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,5,10,15,20,25,30);
            foreach ($array as $value){
                if ($value == 10 || $value == 20 || $value == 30){
                    echo "<p>Het nummer is gelijk aan ". $value ."</p>";
                }
            }
            ?>
        </div>
        <div id="oef6" class="oefening">
            <h2 class="alert alert-info">Oefening 6 - Controlestructuren</h2>
            <?php
            $som = 0;
            for ($teller = 0; $teller <= 30; $teller++){
                global $som;
                $som += $teller;
            }
            echo $som;
            ?>
        </div>
        <div id="oef7" class="oefening">
            <h2 class="alert alert-info">Oefening 7 Date-object</h2>
            <?php 
            switch(date("l")){
                case "Monday":
                    echo "Maandag ";
                break;
                case "Tuesday":
                    echo "Dinsdag ";
                break;
                case "Wednesday":
                    echo "Woensdag ";
                break;
                case "Thursday":
                    echo "Donderdag ";
                break;
                case "Friday":
                    echo "Vrijdag ";
                break;
                case "Saturday":
                    echo "Zaterdag ";
                break;
                case "Sunday":
                    echo "Zondag ";
                break;
            }
            echo date("d/m/Y, h:i");
            echo "<br />";
            if (date("m") == 12 || date("m") < 3){
                echo "Winter";
            } elseif (date("m") < 6){
                echo "Lente";
            } elseif (date("m") < 9) {
                echo "Zomer";
            } else{
                echo "Herfst";
            }
            ?>
        </div>
        <div id="oef8" class="oefening">
            <h2 class="alert alert-info">Oefening 8 - String</h2>
            <?php 
            function splitsNaam($naam){
                if (strpos($naam, " ") !== false){
                    $naamGesplits = explode(" ", $naam);
                    return "<ul><li>Voornaam: ". $naamGesplits[0] ."</li><li>Achternaam: ". $naamGesplits[1] ."</li></ul>";
                }
                else{
                    echo "<br />die(); <i>hier laat ik het zien i.p.v uitvoeren </i><br/>";
            }
            }
            function voegNamenSamen($voornaam, $achternaam){
            return $voornaam ." ". $achternaam;
            }
            $naam = "Kevin Felix";
            $naam2 = "KevinFelix";
            $voornaam = "Kevin";
            $achternaam = "Felix";
            echo "<b>Naam: </b>". $naam;
            echo splitsNaam($naam);
            echo "<br /><b>Naam: </b>". $naam2;
            echo splitsNaam($naam2);
            echo "<br /><b>Voornaam: </b>". $voornaam;
            echo "<br /><b>Achternaam: </b>". $achternaam ."<br />";
            echo voegNamenSamen($voornaam, $achternaam);
            ?>
        </div>
        <div id="oef9" class="oefening">
            <h2 class="alert alert-info">Oefening 9 - Array</h2>
            <h4>De Europese Unie:</h4>
            <p>De Europese Unie telt sinds 2020 in totaal 27 lidstaten.</p>
            <h5>De volledige lijst van listaten, alfabetische gerangschikt</h5>
            <ol>
                <?php 
                $landen = array("België", "Duitsland", "Frankrijk", "Italië", "Luxemburg", "Nederland", "Denemarken", "Ierland", "Griekenland", "Portugal", "Spanje", "Finland", "Oostenrijk", "Zweden", "Cyprus", "Estland", "Hongarije", "Letland", "Litouwen", "Malta", "Polen", "Slovenië", "Slowakije", "Tsjechië", "Bulgarije", "Roemenië", "Kroatië");
                asort($landen);
                foreach ($landen as $land) {
                    echo "<li>". $land ."</li>";
                }
                ?>
            </ol>
        </div>
        <div id="oef10" class="oefening">
            <h2 class="alert alert-info">Oefening 10 - Controlestructuren</h2>
            <table class="table table-bordered">
                <?php 
            for ($i = 1; $i <= 6; $i++){
                echo "<tr>";
                for ($j = 1; $j <= 5; $j++){
                    echo "<td>". $j ."*". $i ."=". $i * $j;
                }
                echo "</tr>";
            }
            ?>
            </table>
        </div>
        <div id="oef11" class="oefening">
            <h2 class="alert alert-info">Oefening 11 - String Functies</h2>
            <?php
            function caseMagic($zin){
                echo "<p><b>Zin is:</b> ". $zin ."</p>";
                echo "<p><b>Compleet uppercase: </b> ".strtoupper($zin) ."</p>";
                echo "<p><b>Compleet lowercase: </b> ". strtolower($zin) ."</p>";
                echo "<p><b>Enkel eerste letter van de zin uppercase: </b> ". ucfirst(strtolower($zin)) ."</p>";
                echo "<p><b>Eerste letters van alle woorden uppercase: </b> ". ucwords(strtolower($zin)) ."</p>";
            }
            function shuffleWoord($woord){
                echo "<p><b>". $woord ."</b> na shuffle: ". str_shuffle($woord) ."</p>";  
            }
            function isPalindroom($woord){
                echo "<p>Is <b>". $woord ."</b> een palindroom? "; 
                echo ($woord == strrev($woord))? "Ja" : "Nee";
                echo "</p>";
            }
            function isAnagram($woord1, $woord2){
                echo "<p>Is <b>". $woord1 ."</b> anagram van <b>". $woord2 ."</b>? "; 
                echo (count_chars(strtolower(str_replace(" ", "", $woord1))) == count_chars(strtolower(str_replace(" ", "", $woord2))))? "Ja" : "Nee";
                echo "</p>";
            }
            caseMagic("dIt iS eEn TEST");
            shuffleWoord("Superlangwoord");
            isPalindroom("kok");
            isPalindroom("radar");
            isPalindroom("tarwerat");
            isPalindroom("palindroom");
            isAnagram("Torchwood", "Doctor Who");
            isAnagram("Tom Marvolo Riddle", "I am lord Voldemort");
            isAnagram("eerste", "tweede");
            ?>
        </div>
        <div id="oef12" class="oefening">
            <h2 class="alert alert-info">Oefening 12 - Strings</h2>
            <?php 
            $emailKevin = "kevin@ehb.be";
            $emailEigen = "ka.hea.lam@student.ehb.be";
            function gebruikersNaam($email){
                echo "<p><b>Email:</b> ". $email ."<br /><b>Gebruikersnaam:</b> ". substr($email ,0 ,strpos($email, "@")) ."</p>";
            }
            function domeinNaam($email){
                echo "<p><b>Email:</b> ". $email ."<br /><b>Domeinnaam:</b> ". substr($email ,strpos($email, "@") + 1) ."</p>";
            }
            gebruikersNaam($emailKevin);
            gebruikersNaam($emailEigen);
            domeinNaam($emailKevin);
            domeinNaam($emailEigen);
            ?>
        </div>
        <div id="oef13" class="oefening">
            <h2 class="alert alert-info">Oefening 13 - Array</h2>
            <h4>De Europese Unie:</h4>
            <p>De Europese Unie telt sinds 2020 in totaal 27 lidstaten.</p>
            <h5>De volledige lijst van listaten, random gerangschikt</h5>
            <ol>
                <?php 
                $landen = array("België", "Duitsland", "Frankrijk", "Italië", "Luxemburg", "Nederland", "Denemarken", "Ierland", "Griekenland", "Portugal", "Spanje", "Finland", "Oostenrijk", "Zweden", "Cyprus", "Estland", "Hongarije", "Letland", "Litouwen", "Malta", "Polen", "Slovenië", "Slowakije", "Tsjechië", "Bulgarije", "Roemenië", "Kroatië");
                shuffle($landen);
                foreach ($landen as $land) {
                    echo "<li>". $land ."</li>";
                }
                ?>
            </ol>
        </div>
        <div id="oef14" class="oefening">
            <h2 class="alert alert-info">Oefening 14 - Array</h2>
            <h4>De Europese Unie:</h4>
            <p>De Europese Unie telt sinds 2020 in totaal 27 lidstaten.</p>
            <h5>Lidstaten die beginnen met letter B</h5>
            <ol>
                <?php 
                $landen = array("België", "Duitsland", "Frankrijk", "Italië", "Luxemburg", "Nederland", "Denemarken", "Ierland", "Griekenland", "Portugal", "Spanje", "Finland", "Oostenrijk", "Zweden", "Cyprus", "Estland", "Hongarije", "Letland", "Litouwen", "Malta", "Polen", "Slovenië", "Slowakije", "Tsjechië", "Bulgarije", "Roemenië", "Kroatië");
                asort($landen);
                foreach ($landen as $land) {
                    if ($land[0] == "B"){
                        echo "<li>". $land ."</li>";
                    }
                }
                ?>
            </ol>
        </div>
        <div id="oef15" class="oefening">
            <h2 class="alert alert-info">Oefening 15 - Array</h2>
            <h4>De Europese Unie:</h4>
            <p>De Europese Unie telt sinds 2020 in totaal 27 lidstaten.</p>
            <h5>Lidstaten die niet beginnen met letter B</h5>
            <ol>
                <?php 
                $landen = array("België", "Duitsland", "Frankrijk", "Italië", "Luxemburg", "Nederland", "Denemarken", "Ierland", "Griekenland", "Portugal", "Spanje", "Finland", "Oostenrijk", "Zweden", "Cyprus", "Estland", "Hongarije", "Letland", "Litouwen", "Malta", "Polen", "Slovenië", "Slowakije", "Tsjechië", "Bulgarije", "Roemenië", "Kroatië");
                foreach ($landen as $key => $land) {
                    if ($land[0] != "B"){
                        echo "<li>". $land ."</li>";
                    }
                    else{
                        unset($landen[($key)]);
                    }
                }
                echo "<p>Check of landen die beginnen met B verwijderd zijn van array</p>";
                print_r($landen);
                ?>
            </ol>
        </div>
        <div id="oef16" class="oefening">
            <h2 class="alert alert-info">Oefening 16 - Functies</h2>
            <?php 
            function parameterTest($a, $b){
                echo "<p>A is ". $a ."<br />B is ". $b ."</p>";
            }
            echo "<p><b>parameterTest(\"hallo\", 29)</b></p>";
            parameterTest("hallo", 29);
            ?>
            <?php 
            echo "<p><b>ParameterTest(): </b> Ik verwacht hier een error omdat de functie 2 parameters verwacht<p>";
            ?>
            <?php 
            echo "<parameterTest><b>ParameterTest(8): </b> Ik verwacht hier een error omdat de functie 2 parameters verwacht<p>";
            ?>
            <?php 
            echo "<parameterTest><b>ParameterTest(true, \"PHP\"): </b> Geen error omdat $ variabelen zijn<p>";
            parameterTest(true, "PHP");
            ?>
            <?php 
            echo "<parameterTest><b>ParameterTest('A, B', 3, 4.5): </b> <br />Hier pakt de functie alleen de eerste 2 parameters (had ik niet verwacht)<p>";
            parameterTest('A, B', 3, 4.5);
            ?>
            <?php 
            echo "<parameterTest><b>ParameterTest(1, 2, 3, 4): </b> <br />Hier paktt de functie alleen de eerst 2 parameters (had ik niet verwacht)<p>";
            parameterTest(1, 2, 3, 4);
            ?>
        </div>
        <div id="oef17" class="oefening">
            <h2 class="alert alert-info">Oefening 17 - Strings en Arrays</h2>
            <?php 
            $tekst = "een;drie;nul;vijf";
            function convertTextToNumber($tekst){
                $getallenInTekst = explode(";", $tekst);
                foreach ($getallenInTekst as $getalInTekst){
                    switch(strtolower($getalInTekst)){
                        case "een":
                            echo "1";
                        break;
                        case "twee":
                            echo "2";
                        break;
                        case "drie":
                            echo "3";
                        break;
                        case "vier":
                            echo "4";
                        break;
                        case "vijf":
                            echo "5";
                        break;
                        case "zes":
                            echo "6";
                        break;
                        case "zeven":
                            echo "7";
                        break;
                        case "acht":
                            echo "8";
                        break;
                        case "negen":
                            echo "9";
                        break;
                        case "nul":
                            echo "0";
                        break;
                    }
                }
            }
            echo "<h4>Convert text to number</h4>";
            echo "<p><b>". $tekst ."</b></p>";
            echo "<p>". convertTextToNumber($tekst) ."</p>";
            ?>
        </div>
        <div id="oef18" class="oefening">
            <h2 class="alert alert-info">Oefening 18 - Functies en Logica</h2>
            <?php 
            function rijVanFibonacci($n){
            if ($n < 0){
                echo "n mag niet negatief zijn";
            } elseif ($n == 0){
                echo "0";
            } else{
                $a = 0;
                $b = 1;
                $teller = 1;
                echo $a ." ". $b; 
                while ($teller < $n){
                    //global $teller;
                    $teller++;
                    $hulp = $a;
                    $a = $b;
                    $b += $hulp;
                    echo " ". $b;
                }
            }
        }
        rijVanFibonacci(10);
        ?>
        </div>
        <div id="oef19" class="oefening">
            <h2 class="alert alert-info">Oefening 19</h2>
            <?php
            function veelvoud($getal){
                $teller = 0;
                while (pow(2, $teller) < $getal){
                    $teller++;
                }
                if (pow(2, $teller) == $getal){
                    echo "<p>". $getal ." is een veelvoud van 2, 2^". $teller ."</p>";
                } else if (($getal - pow(2, $teller - 1)) < (pow(2, $teller) - $getal)){
                    echo "<p>". $getal ." is geen veelvoud van 2, het dichste veelvoud is ". pow(2, $teller -1) .", 2^". ($teller -1) ."</p>";
                } else if (($getal - pow(2, $teller - 1)) > (pow(2, $teller) - $getal)){
                    echo "<p>". $getal ." is geen veelvoud van 2, het dichste veelvoud is ". pow(2, $teller) .", 2^". ($teller) ."</p>";
                } else {
                    echo "<p>". $getal ." ligt in het midden van ". pow(2, $teller -1) ." (2^". ($teller -1) .") en ". pow(2, $teller) ." (2^". $teller .")</p>"; 
                }
            }
            $getal1 = 64;
            $getal2 = 13;
            $getal3 = 48;
            veelvoud($getal1);
            veelvoud($getal2);
            veelvoud($getal3);
            ?>
        </div>
    </div>
</body>

</html>