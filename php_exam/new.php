<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FORUM NEW</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<?php include "includes/navbar.php";?>
<form method="POST" action="data.php">
  titre : <br/>
  <input type="text" name="titre" required /><br/>
  description : <br/>
  <textarea name="contenu" required ></textarea><br/>
  <input type="submit" name="submit" value="Publier"/>
</form>
</body>
</html>