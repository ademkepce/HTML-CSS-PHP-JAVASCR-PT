<?php

session_start();
ob_start();

if(($_POST['username']=="b191210058@sakarya.edu.tr" and ($_POST['password']=="1234")))
{
  $_SESSION["login"]="true";
  $_SESSION["username"]="b191210058@sakarya.edu.tr";
  $_SESSION["password"]="1234";

  echo "Hoşgeldiniz b191210058";
  header("Refresh:2; url=index.html");


}

if(($_POST['username']!="b191210058@sakarya.edu.tr" and ($_POST['password']!="1234")))
{
  echo "Kullanıcı adı ve şifre yanlış.";
  header("Refresh:1; url=index.php");


}

if(($_POST['username']=="" and ($_POST['password']=="")))
{
  echo "Kullanıcı adı ya da şifreyi boş bırakmayınız.";
  header("Refresh:1; url=index.php");


}


ob_end_flush();

?>