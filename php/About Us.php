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


div.Article_Tab button:hover {
    background-color: #ddd;
}


div.Article_Tab button.active {
    background-color: #ccc;
}

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
	height:500px;
}


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

<!----------------------------------------------------------- Header Content ----------------------------------------------------------------------------->
<div class="list2">
                 <div style="float:left; width:75%">
					 <a href="http://localhost/Project/php/Wedding user profile.php"><img src="http:\\localhost\Project\Images\logo1.png" style="float:left;width:300px;height:101px; margin:20px;"></a> 
					 
				</div>
 
                
</div>

<div class="list3">

                     <a class="fsrtTab" href="http://localhost/Project/php/Wedding user profile.php">Home</a>	
                     <a href="http://localhost/Project/php/About Us.php">About Us</a>
					 <a href="http://localhost/Project/php/Contact Us.php">Contact Us</a>
                     <a href="!--url--">Membership</a>		
                     <a href="!--url--">New Arrivals</a>
                     <a href="!--url--">Staff</a>	 
	    
</div>

<div style="width:100%; overflow: hidden; min-height:670px;">

    <div class="list4">
	
	    <h1 style="margin:10px;"><u>About Us</u></h1>
	    <p style="color:green; padding:10px; text-align:left; font-size:140%; ">

We know every bride is unique and so is her wedding. We understand the importance of listening to you; get to know your tastes and wishes to help create 
a celebration that completely reflects you as a couple.Our specialty is working closely with you, to create a wedding that is pure magic in every detail, 
but at an affordable price, whilst helping you to have a wonderful wedding planning experience.</p>
<p style="color:green; padding:10px; text-align:left; font-size:140%; ">
A wedding with our services allow you to completely relax 
and enjoy this time as a couple while we make sure everything runs smoothly no matter what may arise throughout the planning process and/or the day of the 
wedding. All brides can benefit from experienced help, especially those who have a demanding work schedule, are planning a large detailed wedding, or are 
considering an off-site venue. Under your direction, we will help you budget, plan, coordinate, and most importantly add your signature touch to your 
wedding.
</p>
	</div>
	
</div>

<!----------------------------------------------------------- Footer ----------------------------------------------------------------------------->
<footer>
       <a href="http://localhost/Project/php/About Us.php">About us</a>
	   <a href="http://localhost/Project/php/Contact Us.php">Contact Us</a>
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

document.getElementById("defaultOpen").click();
//------------------------------------------------------------------------------------------------------------------------------------------------------
</script>

</body>
</html> 