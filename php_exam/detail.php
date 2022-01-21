<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail article</title>
</head>
<body>
<?php
$db = new PDO('mysql:host=localhost;dbname=php_alex', 'root', '');
if(isset($_GET["id"]) && !empty($_GET["id"]))
{
    $sql = "SELECT * FROM article WHERE id =" . $_GET["id"];
    $request = $db->prepare($sql);
    $request = $db->query($sql);
    $article = $request->fetch();
    
}
else 
{
    Header("Location: index.php");
}

?>

<br>
<form method="POST" action="data.php">
  Titre : <?php echo $article["titre"]; ?>
 <br>
  Description : <?php echo $article["contenu"]; ?>
 <br>
  Date de l'article : <?php echo $article["date_publication"]; ?>


</form>

    
</body>
</html>