<?php
 
 $VotreAdresseMail = "gherri.yesmine@gmail.com";
                   
  $Entetes = "Content-type: text/html; charset=UTF-8\r\n";
  $Entetes .= "From: Gherri Yesmine <".$_POST['email'].">\r\n";
  $Entetes .= "Reply-To: Gherri Yesmine <".$_POST['email'].">\r\n";

  $Mail=$_POST['email']; 
  $Message= $_POST['message'];
  $Message .= "<br>";
  $Message .= $_POST['nom'] . " " .$_POST['prenom'];
  if(mail($VotreAdresseMail,$_POST['sujet'],nl2br($Message),$Entetes)){
      echo "Le mail à été envoyé avec succès!";
  } else {
      echo "Une erreur est survenue, le mail n'a pas été envoyé";
  }
  ?>