<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {  margin:0;
        background-image: url("http://localhost/Project/Images/back5.jpg");
		background-size:100% 100%;
		background-repeat: no-repeat;
     }


.list2 {
  width: 100%;
  height:100px;
  max-width: 1920px;
  margin: auto;
}

.list3 {
  width: 100%;
  overflow: hidden;
  max-width: 1920px;
  margin: auto;
  background-color:gray;
}

.list3 a{
                    color:#e6e6e6;
                    text-decoration:none;  
					text-align: center;
					float: left;
					font-size:18px;
					padding: 15px 18px;
					font-weight: bold;
 				  }

.list3 a:hover {
  background-color: #ddd;
  color: black;
}

.list3 a.fsrtTab {
    background-color: #0073a2;
    color: white;
}

.list4 {
  width: 50%;
  height:auto;
  overflow: hidden;
  margin: auto;
  margin-top: 25px;
  background-color:white;
}

				  
/*------------------------------------------ Search Bar --------------------------------------------------*/
#myInput {
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-top: 45px;
  margin-left: 220px;
  float:left;
}

.buttonx {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #ff6600;
  border: none;
  border-radius: 15px;
  margin-top:40px;

}

.buttonx:hover {background-color: #3e8e41}

.buttonx:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

/*------------------------------------------ Footer --------------------------------------------------*/
footer{
		        background-color:#707070;
				text-align:center;
				color:white;
				padding:10px;
				font-size:120%;
				margin:auto;
				
		      }
footer a{
            color:#e6e6e6;
            text-decoration:none;
            padding:10px;
        }	


</style>
</head>
<body>

<?php
   include('../session.php');
?>

<!----------------------------------------------------------- Header Content ----------------------------------------------------------------------------->
<div class="list2">
                 <div style="float:left; width:75%">
					 <a href="http://localhost/Project/php/Wedding user profile.php"><img src="http:\\localhost\Project\Images\logo1.png" style="float:left;width:300px;height:101px; margin:20px;"></a> 
					 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="I'm lokking for..." title="Type in a name">
					 <img src="http://localhost/Project/Images/searchbutton.png" style="margin-top: 45px; float:left; height:44px">
				</div>
 
                <div style="float:left; width:25%"> 
					 <H3 style="float:right; margin-right:20px;"><span style="color:#00b359">Welcome</span> <?php echo $login_session; ?></H3>
					  <br><br><br><br>
					  <a href="http://localhost/Project/php/logout.php" style="float:right; margin-right:20px;" onclick="document.getElementById('id03').style.display='block'"><img src="http:\\localhost\Project\Images\logout.png" style="float:left;width:75px;height:33px; margin:0px;" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a>
					  <a style="float:right; margin-right:20px;" onclick="downFunction()"><img src="http:\\localhost\Project\Images\wishlist.png" style="float:left;width:75px;height:33px; margin:0px;" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a>
                      <a style="float:right; margin-right:20px;" onclick="downFunction()"><img src="http:\\localhost\Project\Images\Shoppingcart.png" style="float:left;width:75px;height:33px; margin:0px;" onmouseover="bigImg(this)" onmouseout="normalImg(this)"></a>					  
                     </p>
			    </div>
</div>

<div class="list3">

                     <a class="fsrtTab" href="http://localhost/Project/php/Wedding user profile.php">Home</a>	
                     <a href="!--url--">About Us</a>
                     <a href="!--url--">Membership</a>	
                     <a href="!--url--">Search</a>	
                     <a href="!--url--">New Arrivals</a>
                     <a href="!--url--">Staff</a>	 
	    
</div>

<div style="width:100%; overflow: hidden; min-height:670px;">

    <div class="list4">
	
	<?php
	
	    $productID = $_GET['productID'];
		
		require '../connection1.php';
		
		$getData = "SELECT productID, itemName, price, Shipping, Details FROM products WHERE productID='$productID'";
        $result = $connect->query($getData);
		$row = $result->fetch_assoc();
	
	    echo '<div style="width:25%; float:left; margin:5%;">';
	    echo '<img style="width:100%; height:70%; border-right:2px solid black;" src="http://localhost/Project/php/Products/Images/'.$row["productID"].'.jpg">';
		echo '<button class="buttonx">Add to Cart</button>';
		echo '</div>';
		
		echo '<div style="width:65%; float:left;">';
		echo '<br>';
	    echo '<span style="font-size:120%; font-weight:bold;"><u>'.$row["itemName"].'</u></span>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo 'Price:';
		echo '<span style="font-size:140%; font-weight:bold; color:blue; margin-left:25px">Rs:'.$row["price"].'</span>';
		echo '<br>';
		echo '<br>';
		echo 'Shipping:';
		echo '<span style="font-size:110%; font-weight:bold; margin-left:15px">'.$row["Shipping"].'</span>';
		echo '<br>';
		echo '<br>';
		echo 'Description:';
		echo '<br>';
		echo '<hr></hr>';
		echo '<br>';
		echo $row["Details"];
		echo '</div>';
	?>
	    
	</div>
	
	
	
</div>

<!----------------------------------------------------------- Footer ----------------------------------------------------------------------------->
<footer>
       <a href="">About us</a>
	   <a href="">Privacy Policy</a>
	   <a href="">Terms of Use</a>
	   <a href="">Customer Service + FAQ</a><br><br>
       Copyright @ www.siritha.lk,2017-All rights Reserved
</footer>

</div>

<script>

// Login & Register Button-----------------------------------------------------------------------------------------------------------------------------
    function bigImg(x) {
        x.style.height = "37px";
        x.style.width = "85px%";
        }

    function normalImg(x) {
        x.style.height = "33px";
        x.style.width = "75px";
        }
		
	var form = document.getElementById('id01');

    window.onclick = function(event) {
        if (event.target == form) {
            form.style.display = "none";
        }
}
//------------------------------------------------------------------------------------------------------------------------------------------------------


// Top Register Button----------------------------------------------------------------------------------------------------------------------------------
function downFunction() {
    window.scrollBy(0,1000);	
}
//------------------------------------------------------------------------------------------------------------------------------------------------------



// Article----------------------------------------------------------------------------------------------------------------------------------
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
//------------------------------------------------------------------------------------------------------------------------------------------------------
</script>

</body>
</html> 