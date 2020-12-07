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
    <form class="form-signin">
      <i class="mb-4 fas fa-user fa-3x" alt=""></i>
      <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>
      <label for="InputUsername" class="sr-only">Nazwa użytkownika</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Nazwa użytkownika" required autofocus>
      <label for="inputPassword" class="sr-only">Hasło</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Hasło" required>
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