<!DOCTYPE html>
<html>
<head>
  <title>RedVitrine</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <?php
  include 'database.php';
     global $db;
?> 
<!-- Barre de navigation -->
<ul class="nav">

  <li><a class="active" href="/index">Acceuille</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="/Contact">Contact</a></li>
  <li><a href="/Apropos">A propos</a></li>
  <li><a href="Deezer">Twitch</a></li>
  <li><a href="/Nord VPN">Youtube</a></li>
  <li><a href="Disney plus">Instagram</a></li>


</ul>

</head>
<body>


<form method="post">
  <input type="email" name="email" id="email" placeholder="email" required><br/>
  <input type="password" name="password" id="password" placeholder="mot de passe" required><br/>
    <input type="password" name="cassword" id="cpassword" placeholder="confirmer le mot de passe" required><br/>
  <input type="password" name="rc" id="rc" placeholder="pseudo" required><br/>
  <input type="submit" name="send" id="send" value="s'inscrire">
</form>


<?php
 


  if(isset($_POST['send'])){
      // echo "formulaire envoyer";

     extract($_POST);

        if(!empty($password) && !empty($cpassword) && !empty($email)){

 if($password == $cpassword){


        $options = [
          'cost' => 12,
      ];

     $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

   
    $q - $db->prepare("INSERT INTO user(email,password,rc) VALUES(:email,:password,:rc)");
    $q->execute([
      'email' => $semail,
      'password' => $hashpass,
      'rc' => $rc
    ]); 
  }
 
  }
}
?>

<!-- //  if(password_verify('vinegrette22', $hashpass));
//       echo "le mot de passe est le bon";
//     }else{
//       echo "le mot depasse n'est pas correcte"
//     }

// }else{
//   echo "les champs ne sont pas tous remplies"
// }  -->


</body>
</html>