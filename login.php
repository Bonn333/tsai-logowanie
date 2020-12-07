<!--- To jest rak, jestem straszny, Bieniek Michał -->
<html>
<head>
    <title>System logowania - Logowanie</title>
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
          <li class="nav-item active">
            <a class="nav-link">Logowanie
            <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Rejestracja</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Kontener/body -->
  <body class="text-center">
    <form class="form-signin" method="post" role="form" action="login.php?login=true">
      <i class="mb-4 fas fa-user fa-3x" alt=""></i>
      <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>


      <?php
error_reporting(1);
session_start();
     if (isset($_GET["login"])){
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
      // echo "Opened database successfully\n";
   }
// wiem, md5 kinda ugh ale nie chce mi sie inaczej 
   $sql ='SELECT * from USERS where USERNAME="'.$_POST["username"].'";';


   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $id=$row['ID'];
      $username=$row["USERNAME"];
      $password=$row['PASSWORD'];
  }
    if ($id!=""){
        if ($password==md5($_POST["password"])){
           $_SESSION["login"]=$username;
           echo '<div class="alert alert-primary" role="alert">';
           echo 'Witaj, <b>'.$username. ' </b>i guess? Nie robiłem redirów i innych podrzędnych rzeczy na ten moment, just to co napisane w treści';
           echo '</div>'; // to i tak nie działa, nie chciało mi się poprawiać,ale no, rediruje po zalogowaniu
        }else{
          echo '<div class="alert alert-primary" role="alert">';
          echo "Nieprawidłowe hasło";
          echo '</div>';
        }
      }else{
       echo '<div class="alert alert-primary" role="alert">';
       echo "Użytkownik nie istnieje";
       echo '</div>';
      }
   //echo "Operation done successfully\n";
   $db->close();
     }

?>


      <label for="username" class="sr-only">Nazwa użytkownika</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Nazwa użytkownika" required autofocus>
      <label for="password" class="sr-only">Hasło</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Hasło" required>
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