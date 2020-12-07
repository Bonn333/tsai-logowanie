


<html>
<head>
    <title>System logowania - Rejestracja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">System Logowania - Michał Bieniek KL 3B T5</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Strona główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Logowanie
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link">Rejestracja
            <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Kontener/body -->
  <body class="text-center">
    <form class="form-signin" method="post" action="register.php?add=<?php echo uniqid()?>">
      <i class="mb-4 fas fa-user fa-3x" alt=""></i>
      <h1 class="h3 mb-3 font-weight-normal">Rejestracja</h1>


      <?php
error_reporting(0);
session_start();
    // wiem, md5 kinda ugh ale nie chce mi sie inaczej 
   if (isset($_GET["add"])){
      if($error!=1){
               class Baza extends SQLite3
   {
      function __construct()
      {
         $this->open('baza.db');
      }
   }
   $db = new Baza();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Otwarto baze danych\n";
   }

   $username = $_POST["username"];
   $password = md5($_POST["password"]);
   $sql ="INSERT INTO USERS (ID,USERNAME,PASSWORD)"."\n"."VALUES ('".$_GET["add"]."', '".$username."', '".$password."');";



   $ret = $db->exec($sql);
   if(!$ret){
    echo '<div class="alert alert-primary" role="alert">';
      echo $db->lastErrorMsg();
      echo '</div>';
   } else {
       echo '<div class="alert alert-primary" role="alert">';
      echo "Zarejestrowano użytkownika!\n";
      echo '</div>';
   }
   $db->close();    
}
}

?>




      <label for="username" class="sr-only">Nazwa użytkownika</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Nazwa użytkownika" required autofocus>
      <label for="password" class="sr-only">Hasło</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Hasło" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Zapamiętaj mnie
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Wyślij</button>
    </form>
  </body>
<!-- Moduły javascript -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>