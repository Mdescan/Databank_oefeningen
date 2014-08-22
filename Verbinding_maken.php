<?php
class PersoonLijst{
    public function getLijst(){
        $Lijst = array();
        
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp","cursusgebruiker","cursuspwd");
        
        $dbh = null;
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Databanken introductie</title>
    </head>
    <body>
        <?php
        $pl = new PersoonLijst();
        $pl->getLijst();
        echo "hier is een eerste poging";
        ?>
    </body>
</html>