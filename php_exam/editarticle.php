<?php 
require("article/getinfoeditarticle.php");
require("article/editarticleAction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Publier un article</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<?php include "includes/navbar.php";?>
<?php if(isset($articlecontenu)) { ?>

    <form method="POST" >
  titre : <br/>
  <input type="text" value="<?php echo $articletitle ?>" name="titre" required /><br/>
  description : <br/>
  <textarea name="contenu" required ><?php echo $articlecontenu ?></textarea><br/>
  <input type="submit"  name="submit" value="Modifier"/>
</form>
<?php
} 
?>

</body>
</html>