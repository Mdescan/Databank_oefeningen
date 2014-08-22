<?php
class PersoonLijst{
    public function getLijst(){
        $Lijst = array();
        
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp","cursusgebruiker","cursuspwd");
        
        $resultSet = $dbh->query("select familienaam,voornaam from personen order by familienaam");
        
        foreach ($resultSet as $rij){
            $naam=$rij["familienaam"].",".$rij["voornaam"];
            array_push($Lijst, $naam);
        }
        
        $dbh = null;
        return $Lijst;
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Databanken introductie -> Gegevens ophalen</title>
    </head>
    <body>
        <?php
        $pl = new PersoonLijst();
        $tab = $pl->getLijst();
        echo"<ul>";
        foreach ($tab as $naam){
            echo("<li>".$naam."</li>");
        }
        echo"</ul>";
        echo "hier is een tweede poging";
        ?>
    </body>
</html>