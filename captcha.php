<?php
// Fichier "captcha.php"
session_start();
//si captcha est envoyé et que le code existe en SESSION
if(isset($_POST['captcha'], $_SESSION['code'])){
  
 if($_POST['captcha'] == $_SESSION['code']){
 echo "<p>Code correct :)</p>";
    
 } else {
 echo "<p>Le code est incorrect :(</p>";
 }
}
?>
