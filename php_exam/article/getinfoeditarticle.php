<?php
$db = new PDO('mysql:host=localhost;dbname=php_alex', 'root', '');
if(isset($_GET["id"]) && !empty($_GET["id"])){

    $idarticle = $_GET["id"];
    $getarticle = $db -> prepare("SELECT * from article WHERE id =?");
    $getarticle -> execute(array($idarticle));
 
if($getarticle -> rowCount() > 0) {

    $articleinfo = $getarticle -> fetch();
    $articletitle = $articleinfo["titre"];
    $articlecontenu = $articleinfo["contenu"];
    $articlecontenu = str_replace("<br />", "", $articlecontenu);
    
    
}
else {
    
    echo "article pas trouvé";
}

} else {
        echo "l'article n'existe pas";
    }
    
?>