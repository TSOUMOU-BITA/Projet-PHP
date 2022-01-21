<?php
    $db = new PDO('mysql:host=localhost;dbname=php_alex', 'root', '');
if (isset($_POST["titre"], $_POST["contenu"]) && !empty($_POST["titre"]) && !empty($_POST["contenu"]))
{
    $titre = htmlspecialchars(addslashes($_POST["titre"]));
    $contenu = nl2br(htmlspecialchars(addslashes($_POST["contenu"])));
    $NOW = date("Y-m-d H:i:s");


    $sql = "INSERT INTO article (titre, contenu, date_publication) VALUES (?, ?, ?)";
    $request = $db->prepare($sql);
    // $request->bindParam(':titre', $titre);
    // $request->bindParam(':contenu', $contenu);
    // $request->bindParam(':date_publication', $NOW);
    $request->execute(array($titre,$contenu,$NOW)); 
    // $request->execute(); 

    Header("Location: ../index.php");
    

    
}