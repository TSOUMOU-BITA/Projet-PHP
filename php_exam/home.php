<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>


</head>
<style>
    <?php require("../css/style.css")
?>
</style>
<body>
    <header class="header">
        <a href="#" class="logo"><span>ProjetPhP</span></a>
        <nav class="navbar">
            <a href="#home-1">home</a>
            <a href="new.php">New</a>
            <a href="#Edit-4">Edit</a>
            <a href="#Account-5">Account</a>
            <a href="#Connexion Admin/Panel Admin-6">Connexion Admin/Panel Admin</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>
    </header>

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
    <h3><li><a href="detail.php?id=<?= $row["id"] ?>"><?php echo stripslashes($row["titre"]) ?></a></li></h3>
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