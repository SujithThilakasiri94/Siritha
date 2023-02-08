<!DOCTYPE html>

<style>
body {
        background-image: url("/Project/Images/back8.jpg");
		background-size:100% 100%;
		background-repeat: no-repeat;
     }


.list1 {
  width: 100%;
  height:1000px;
  max-width: 1920px;
  margin: auto;
}

.list2 {
  width: 50%;
  height:400px;
  max-width: 1920px;
  margin: auto;
  background-color:#ccffb3;
  float:center;
  border:2px solid green;
  border-radius: 2em;
  -webkit-animation: mymove 5s infinite;
  animation: mymove 3s infinite;
}

@keyframes mymove {
    from {background-color: #dcffcc;}
    to {background-color:  #f5f5f0;}
}

.textinside{
                text-align: center;
				margin-top:18%;
				color:green;
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
	
	if(isset($_POST["email"]) && isset($_POST["pswrd"] ))
	{
		$Email = $_POST["email"];
		$Password = $_POST["pswrd"];
		$ID= null;
		
		$AddData = "INSERT INTO wu_logindetails (UserName,Password) VALUES('$Email','$Password')";
		
		if($conn->query($AddData) === TRUE)
		{
		    $last_id = $conn->insert_id;
			echo '<h1 class="textinside">Your account successfully created<h1>';
			echo '<button><a href="\Project\Home.html">Click here to login</a></button>';
		}
		else
		{
			echo "Error: " . $conn . "<br>" . $conn->error;
			
		}
		
	}
	else
	{
		echo '<h1 class="textinside">Please fill all fields</h1>';
	}
	
    $conn->close();
    ?>
	</div>
</div>

</body>
</html> 