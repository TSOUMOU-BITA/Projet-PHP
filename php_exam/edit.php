<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer un article</title>
</head>
<body>
<?php include "includes/navbar.php";?>
<section class="services" id="services">

        <h1 class="heading"> Les articles </h1>

        <div class="box-container">

        <ul>
  <?php
  $sql = "SELECT * from article ORDER BY date_publication DESC";
  $db = new PDO('mysql:host=localhost;dbname=php_alex', 'root', '');
  $request = $db->query($sql);
  while ($row = $request->fetch())
  {
    ?> <div class="box">
    <img src="images/service-1.png" alt="">
    <h3><li><a href="detail.php?id=<?= $row["id"] ?>"><?php echo stripslashes($row["titre"])?></a></li> 
    <a href="editarticle.php?id=<?= $row["id"] ?>"> Modifier </a>
    <a href="article/supprimer.php?id=<?= $row["id"] ?>"> Supprimer </a>
 
    <p>Publié le <?= $row["date_publication"]?></p>
    
</div>
        
    <?php
  }
    ?>
    
  </ul>

        </div>

    </section>

    <footer>
        <div class="footer-content">
            <h3>code opacity</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>© YNOV 2022 – Établissements d’enseignement supérieur technique privé hors contrat — informations non
                contractuelles</p>
        </div>
    </footer>
</body>
</html>