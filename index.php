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
        </div>
        <div id="oef9" class="oefening">
            <h2 class="alert alert-info">Oefening 9 - Array</h2>
        </div>
        <div id="oef10" class="oefening">
            <h2 class="alert alert-info">Oefening 10 - Controlestructuren</h2>
        </div>
        <div id="oef11" class="oefening">
            <h2 class="alert alert-info">Oefening 11 - String Functies</h2>
        </div>
        <div id="oef12" class="oefening">
            <h2 class="alert alert-info">Oefening 12 - Strings</h2>
        </div>
        <div id="oef13" class="oefening">
            <h2 class="alert alert-info">Oefening 13 - Array</h2>
        </div>
        <div id="oef14" class="oefening">
            <h2 class="alert alert-info">Oefening 14 - Array</h2>
        </div>
        <div id="oef15" class="oefening">
            <h2 class="alert alert-info">Oefening 15 - Array</h2>
        </div>
        <div id="oef16" class="oefening">
            <h2 class="alert alert-info">Oefening 16 - Functies</h2>
        </div>
        <div id="oef17" class="oefening">
            <h2 class="alert alert-info">Oefening 17 - Strings en Arrays</h2>
        </div>
        <div id="oef18" class="oefening">
            <h2 class="alert alert-info">Oefening 18 - Functies en Logica</h2>
        </div>
        <div id="oef19" class="oefening">
            <h2 class="alert alert-info">Oefening 19</h2>
        </div>
    </div>
</body>

</html>