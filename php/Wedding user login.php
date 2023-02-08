<!DOCTYPE html>

<style>
body {
        background-image: url("/Project/Images/back5.jpg");
		background-size:100% 100%;
		background-repeat: no-repeat;
     }


.list1 {
  width: 100%;
  height:930px;
  max-width: 1920px;
  margin: auto;
}

.list2 {
  width: 50%;
  height:400px;
  max-width: 1920px;
  background-color:#ccffb3;
  margin: auto;
  margin-top: 80px;
  border:2px solid green;
  border-radius: 2em;
  -webkit-animation: mymove 5s infinite;
  animation: mymove 2.5s infinite;
}

@keyframes mymove {
    from {background-color: #dcffcc;}
    to {background-color:  #f5f5f0;}
}

.textinside{
                text-align: center;
				color:green;
           }
		   
.button {
    background-color: green;
    border: none;
    color: white;
	text-decoration: none;
    font-size: 25px;
    padding: 15px 35px;
    text-align: center;
    margin-left:42%;   

}

.button span {
  cursor: pointer;
  display: inline-block;
  transition: 0.5s;
  position: relative;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	
</style>

<html>

<body>

<div class="list1">
              
	<div style="width:100%; height:135px;"> <a href=""><img src="\Project\Images\logo1.png" style="float:left;width:300px;height:101px; margin:20px;"></a> </div> 
	<hr style="border:solid black;">
	
	<div class="list2">
	<?php
    require 'connection1.php';
	session_start();
	
	if(isset($_POST["email1"]) && isset($_POST["pswrd1"]) )
	{
		$Email = $_POST["email1"];
		$Password = $_POST["pswrd1"];
		$psswrd = sha1($Password);
		
		$getData = "SELECT ID FROM wu_logindetails WHERE UserName='$Email' and Password='$psswrd' ";
		$result = $connect->query($getData);
		$row = $result->fetch_assoc();
		
		$count = mysqli_num_rows($result);
     		
      if($count == 1)
	  {  
         $_SESSION['login_user'] = $Email;
		 
         header("location: http://localhost/Project/php/Wedding user profile.php");
      }
	  else {
		 echo '<script language="javascript">';
         echo 'alert("Your Login Name or Password is invalid")';
         echo '</script>';
		 echo '<script type="text/javascript">';
         echo 'window.location.href = "http://localhost/Project/Home.html"';
         echo '</script>';
      }	
	}
	else
	{
		echo '<h1 class="textinside">Please fill all fields</h1>';
	}
	
    $connect->close();
    ?>
	</div>
</div>

</body>
</html> 