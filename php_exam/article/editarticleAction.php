<?php
require("getinfoeditarticle.php");
    $db = new PDO('mysql:host=localhost;dbname=php_alex', 'root', '');
    if(isset($_POST["submit"])) {

        if (isset($_POST["titre"], $_POST["contenu"]) && !empty($_POST["titre"]) && !empty($_POST["contenu"])) {
    $titre = htmlspecialchars(addslashes($_POST["titre"]));
    $contenu = nl2br(htmlspecialchars(addslashes($_POST["contenu"])));
    $NOW = date("Y-m-d H:i:s");

   
    $sql = "UPDATE article SET titre = ?, contenu= ? WHERE id = ?";
    $request = $db->prepare($sql);
    // $request->bindParam(':titre', $titre);
    // $request->bindParam(':contenu', $contenu);
    // $request->bindParam(':date_publication', $NOW);
    $request->execute(array($titre,$contenu,$idarticle)); 
    // $request->execute(); 

    Header("Location: index.php");
    

    
}
    }
