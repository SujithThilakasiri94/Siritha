<?php
   include('connection1.php');
   
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $getData = "SELECT UserName FROM wu_logindetails WHERE UserName='$user_check'";
   $result = $connect->query($getData);
   $row = $result->fetch_assoc();
   
   $login_session = $row['UserName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:http://localhost/Project/Home.html");
   }
?>