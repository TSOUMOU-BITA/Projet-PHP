<?php
    $db = new PDO('mysql:host=localhost;dbname=php_alex', 'root', '');
    

        if(isset($_GET["id"]) && !empty($_GET["id"])){

            $idarticle = $_GET["id"];
            $getarticle = $db -> prepare("SELECT * FROM article WHERE id =?");
            $getarticle -> execute(array($idarticle));
         
        if($getarticle -> rowCount() > 0) {

            $sql = "DELETE FROM article WHERE id = ?";
            $request = $db->prepare($sql);
            $request->execute(array($idarticle));
            echo "article supprimé";
            Header("Location: ../index.php");
        } else {
            echo "article pas trouvé";
        }
    
}
 else {
     echo "id n'existe pas";
 }
    
