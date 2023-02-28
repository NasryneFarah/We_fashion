<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="title">Connectez-Vous</div>
    <form action="{{route('authenticate')}}" method="POST">
      @csrf
      <div class="Informations-personnelles">

        <div class="input-box">
          <span class="details">Email</span>
          <input type="email" placeholder="Entrez votre email" id="email" name="email">
        </div>

        <div class="input-box">
          <span class="details">Mot de passe</span>
          <input type="password" placeholder="Entrez votre mot de passe" id="password" name="password">
        </div>
        
      </div>
     <div class="button">
      <button  type="submit" class="btn text-decoration-none p-2 m-2 submit" >Connexion</button>
     </div>
    </form>
  </div>
</body>
</html>