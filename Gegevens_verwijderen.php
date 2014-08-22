<?php
class ModuleLijst{
    public function deleteModule($id){
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp","cursusgebruiker","cursuspwd");
        
        $sql = "delete from modules where id=".$id;
        
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
        <h1>Module verwijderen</h1>
        <?php
            $mLijst = new ModuleLijst();
            $mLijst->deleteModule(12);
            echo "Het vierde deeltje laat ons de gegevens die we toevoegden nu maar weer verwijderen";
        ?>
    </body>
</html>

