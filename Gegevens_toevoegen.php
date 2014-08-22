<?php
class ModuleLijst{
    public function createModule($naam,$prijs){
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp","cursusgebruiker","cursuspwd");
        
        $sql = "insirt into modules(naam,prijs) values('".$naam."',".$prijs.")";
        
        $dbh->exec($sql);
        
        $dbh = null;
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modules</title>
    </head>
    <body>
        <h1>Module toevoegen</h1>
        <?php
           $mLijst = new ModuleLijst();
           $mLijst->createModule(Access, 85.0);
           echo "Derde deeltje gegevens toevoegen";
        ?>
    </body>
</html>