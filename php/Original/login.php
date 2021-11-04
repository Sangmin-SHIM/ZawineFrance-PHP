<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/fontawesome.js"></script>
</head>
<body>
    <img class="wave" src="../images/register/wave2.png">
    <div class="container">
        <div class="img">
          <img src="../images/register/login.svg">
        </div>
        <div class="login-container">
          <!-- 여기에 SQL 넣어서 연동할 곳 -->
            <form action="index.php">
              <img class="avatar" src="../images/register/LogoGKM.jpg">
              <h2>Bienvenue</h2>
              <!--E-Mail-->
              <div class="input-div two">
                  <div class="i">
                      <i class="fas fa-at">
                      </i>
                  </div>
                  <div>
                    <h5>E-mail</h5>
                    <input class="input" type="text">
                  </div>
              </div>
              <!--Mot de Passe-->
              <div class="input-div">
                  <div class="i">
                      <i class="fas fa-lock">
                      </i>
                  </div>
                  <div>
                    <h5>Mot de passe</h5>
                    <input class="input" type="password">
                  </div>
              </div>
              <a> Mot de Passe oublié ? </a>
              <!--Partie Login-->
              <input type="submit" class="btn" value="log in">
            </form>
        </div>
    </div>

    <script type="text/javascript" src="../js/login.js"></script>
</body>
</html>
