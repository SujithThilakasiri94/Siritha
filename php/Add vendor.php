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

.button {
    background-color: green;
    border: none;
    color: white;
	text-decoration: none;
    font-size: 25px;
    padding: 15px 35px;
    text-align: center;
    margin-left:35%;   

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
              
	<div style="width:100%; height:135px;"> <a href="http://localhost/Project/Home.html"><img src="\Project\Images\logo1.png" style="float:left;width:300px;height:101px; margin:20px;"></a> </div> 
	<hr style="border:solid black;">
	
	<div class="list2">
	<?php
    require 'connection1.php';
	
	if(isset($_POST["email"]) && isset($_POST["pswrd"]) && isset($_POST["jobroll"] ))
	{
		$Email = $_POST["email"];
		$Password = $_POST["pswrd"];
		$Jobroll = $_POST["jobroll"];
		$psswrd = sha1($Password);
		
		$AddData = "INSERT INTO ven_logindetails (UserName,Password,JobRoll) VALUES('$Email','$psswrd','$Jobroll')";
		
		if($connect->query($AddData) === TRUE)
		{
		    
			echo '<h1 style="margin-top:12%;" class="textinside">Thank You!<h1>';
			echo '<h2 class="textinside">Your account successfully created<br/><br/></h2>';
			echo '<a href="http://localhost/Project/Home.html" class="button" ><span>Get Back to Home</span></a>';
		}
		else
		{
			echo "Error: " . $connect . "<br>" . $connect->error;
			
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