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



/*------------------------------------------ Article --------------------------------------------------*/

div.Article_Tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the Article_Tab */
div.Article_Tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.Article_Tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.Article_Tab button.active {
    background-color: #ccc;
}

/* Style the Article_Tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
	height:500px;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 20px;
}

.topright:hover {color: red;}

/*------------------------------------------ Artical->Tab->Menu --------------------------------------------------*/
.menu1 {
    width: 200px;
	float:left;
	margin:20px;
}

.menu1 a {
    background-color: #99ff99;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
    border:1px solid white;
	text-align:center;
	margin:5px;
}

.menu1 a:hover {
    background-color: #ccc;
}

.class5{
	        float:left;
			width:20%;
			background-color: #ccffcc;
			margin:2%;
			min-height:100px;
			text-align:center;
			height:250px;
			border:2px solid black;
       }

.class5:hover,
.class5:focus {
    color: #00ace6;
    cursor: pointer;
	box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}	

.class7 {   width:50%;
            height:50px;
	        background-color: white;
			margin:auto;
        }

.class7 a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
			font-size:20px;
          }

.class7 a.active {
                    background-color: #4CAF50;
                    color: white;
                 }

.class7 a:hover:not(.active) {background-color: #ddd;}   

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
    require '../connection1.php';
	
	$getData = "SELECT productID, itemName, price FROM products";
    $result = $connect->query($getData);

    if ($result->num_rows > 0) 
	{   
         
        while($row = $result->fetch_assoc()) 
		{   	
         	echo '<a type="submit" href="http://localhost/Project/php/Products/Product details.php?productID=1">';
	        echo '<div class="class5">';
			echo '<img style="width:100%; height:70%" src="http://localhost/Project/php/Products/Images/'.$row["productID"].'.jpg">';
			echo $row["itemName"]."<br>";
			echo '<span style="color:blue; font-size:20px;">Rs:'.$row["price"].'</span>';
			echo '</div>';
			echo '</a>';
        }
 
    } 
    else 
	{
        echo "0 results";
    }
	
    $connect->close();
    ?>
	    
	</div>
	
	<div class="class7">
        <a style="margin-left:250px;" href="#">&laquo;</a>
        <a class="active" href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
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