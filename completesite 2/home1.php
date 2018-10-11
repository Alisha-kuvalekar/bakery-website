<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
<style>


 .header {
    background-color: transparent;
    text-align: center;
    margin-top: 0;
  /* padding: 10px;*/
  background-image: url("b.jpg");

   
    }

  ul {
    text-align: center;
    list-style-type: none;
    margin: 0;
    padding: 0;
   background-color: black;
   height: 78px;
 
    }
    
    li {
    display: inline;
    font-size: 30px;
    }
    li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding:16px 35px 16px 35px;
    text-decoration: none;
    }
    li a:hover {
    background-color: gray;
    color: white;
    }
 .header img{
float:left; 

}


.header h1{
text-align:center;
font-size: 65px;
color: black;
/*font-family: 'Lobster', cursive;*/
padding-top: 40px;
}

.dropdown {
      float: left;
  overflow: hidden;
}
.shivani {
  /*overflow: hidden;*/
  }
.shivani a {
  float: left;
  /*display: block;*/
}

.dropdown .dropbtn {
    font-size: 30px;    
    border: none;
    outline: none;
    color: white;
     padding:16px 35px 16px 35px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
  position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
}{
    float: right;
    display: block;
  }
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
   text-align: left;
}

.dropdown-content a:hover {
    background-color: grey;
}

.dropdown:hover .dropdown-content {
   display: block;
    
}
   


.footer ul {
    text-align: center;
    list-style-type: none;
    margin: 0;
    padding: 0;
   background-color: black;
    }
    
    .footer li {
    display: inline;
    }
    .footer li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }
    .footer li a:hover {
    background-color: gray;
    color: white;
    }
  .footer {
    background-color: black;
    text-align: center;
    padding: 10px;
    color: white;
    } 
   .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
  display: inline-table;
  }
	.fa:hover {
    background-color: white;
    color: black;
	}
	.fa-facebook {
  background: #3B5998;
  color: white;
	}
	.fa-twitter{
   background: #55ACEE;
  	color: white;
	}
	.fa-instagram {
  background:red;
  color: white;
	}
	.fa-pinterest {
  background: #cb2027;
  color: white;
	}

	
.mySlides {
display:none;
text-align: center;
font-family: 'Courgette', cursive;
font-size: 17px;
}
.myslides img{
float: right;
}
.myslides {
animation:fade 10s infinite;
}
@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 1}
  66.666% { opacity: 0}
  100% { opacity: 0}
}

.container {
  float: left;
  width: 33.33%;
  padding: 30px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    }
.contain {
    position: relative;
    text-align: center;
    color: purple;
    text-decoration: none;
    margin-top: 20%;
}

.row{
margin-top:150px;
margin-bottom:100px;
}
.container p{
font-family: 'Chicle', cursive;
font-size: 20px;
}
</style>
</head>





<body>

<div class="header">
<h1><b>SWEET    TREATS</b></h1>
      <img src="abc.png" alt=""> 
      <br><br> 
 </div>
    
     <div class="shivani" >
    <ul>
    <li><a href="home1.php">HOME</a></li>
    <li><a href="about.php">ABOUT</a></li>
    <div class="dropdown">
    <button class="dropbtn">MENU
      <i class="fa-caret-down"></i>
    </button>
     <div class="dropdown-content">
     <a href="cake.php">CAKE</a>
      <a href="pastry.php">PASTRY</a>
      <a href="cupcakemenu.php">CUPCAKE</a>
      
      <a href="beverage.php">BEVERAGES</a>
    </div>
    </div>  
    <li><a href="contact.php">CONTACT_US</a></li>
    <li><a href="signin.php">SIGN IN</a></li>
   </ul>
   </div>


<div class="section" >
	<div class="myslides">  
   <p>
    <img  src="bakery.jpg" style="width:60%; height: 60%">
	<br>
	<br>
	<br>
   <h1 style ="font-family: 'Concert One', cursive;">TREATS</h1>
	Our classic treats are made daily by in-house bakery, using the freshest & finest ingredients.
Come visit us for delicious, sentimental sweets and a friendly, old-fashioned neighborhood experience.

	</p>
	
	</div>
	
	
	<div class="myslides">  
   <p>
    <img  src="bread1.jpg" style="width:60%; height: 60%">
	<br>
	<br>
	<br>
   	  <h1 style ="font-family: 'Concert One', cursive;">BREADS</h1>
	Baked goods hand made the artisan slow way to develop flavour, texture and keeping quality.
	Breads and buns with the best ingredients we can source, organic where possible and nothing else added,
	so plenty gained.Bread for all.A slice of the good life.

	</p>
	
	</div>
	
	<div class="myslides">  
   <p>
    <img  src="cake.jpg" style="width:60%; height: 60%">
	<br>
	<br>
	<br>
   	 <h1 style ="font-family: 'Concert One', cursive;">CAKES</h1>
	Our traditional celebration cakes are the perfect finishing touch to your special occasion. 
	Make your get-together an occasion to remember with one of our amazing cake selections.
	</p>
	
	</div>
	
	<div class="myslides">  
   <p>
    <img  src="pastry.jpg" style="width:60%; height: 60%">
	<br>
	<br>
	<br>
   	 <h1 style ="font-family: 'Concert One', cursive;">PASRTIES</h1>
Our four pastry chefs have a passion for, well, pastry! 
Great for parties, our bite-size savouries are 
also a convenient snack on the run.
	
	
	</p>
	
	</div>
	
	<div class="myslides">  
   <p>
    <img  src="savouries.jpg" style="width:60%; height: 60%">
	<br>
	<br>
	<br>
   	 <h1 style ="font-family: 'Concert One', cursive;">SAVOURIES</h1>
We realise it's not always about decadent desserts and celebrations.
Sometimes you're just looking for a down-to-earth sweet treat to satisfy your appetite.
	</p>
	
	</div>
	
	
	<div class="myslides">  
<p>  
  <img  src="cupcake.jpg" style="width:60%; height:60%">
<br>
	<br>
<br>
 <h1 style ="font-family: 'Concert One', cursive;">CUPCAKES</h1>
	

For tea, school lunches, birthdays, weddings, baby showers and even corporate events, 
our cupcakes are the ideal treat for every occasion.
</p>  
  </div>
  
  <div class="myslides">  
<p>  
  <img  src="dessert.jpg" style="width:60%; height:60%">
<br>
	<br>
<br>
 <h1 style ="font-family: 'Concert One', cursive;">DESSERTS</h1>
	
Make your get-together an occasion
 to remember with one of our amazing dessert selections.

</p>  
  </div>
  
  
  
   <div class="myslides">  
<p>  
  <img  src="bevarage.jpg" style="width:60%; height:60%">
<br>
	<br>
<br>
 <h1 style ="font-family: 'Concert One', cursive;">BEVARAGES</h1>	
	
Regardless of why you’re drinking bevarages, what matters most is how it tastes, smells, and whether or not it makes you feel alert and happy. 
</p>  
  </div>

</div>

<div class="contain">
  <img src="pic.jpg" alt="Snow" style="width:100%;">
  
  <div class="centered"><a href="#">Check out our in-store menu -></a></div>
</div>
<div class="row">
<div class="container">
<img src="box.png" alt="cake" class="image" style="width:200px;height:150px;margin-left:85px;">
	<figcaption><p style="text-align:center;"><b><a href="#">ORDER</a></b><br>From our oven to your tummy, our cookies are always fresh and hand-made with love.</p></figcaption>

</div>
<div class="container">
<img src="join.png" alt="cake" class="image" style="width:200px;height:150px;margin-left:50px;">
<figcaption><p style="text-align:center;"><b><a href="#">JOIN US</a></b><br>We offer Nationwide Shipping, Local Delivery, and In-Store Pickup. </p></figcaption>

</div>
<div class="container">
<img src="about.png" alt="cake" class="image" style="width:200px;height:150px;margin-left:100px;">
	<figcaption><p style="text-align:center;"><b><a href="#">ABOUT US</a></b><br>At sweet treats, we like to keep it simple. We bake homemade products and pair them with locally-sourced milk and coffee.</p></figcaption>

</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 6000); // Change image every 2 seconds
}
</script>
<div class="footer">
		<p style="font-style: normal;">WORKING HOURS:8 AM To 8 PM<br>Email:asgah@gmail.com</p>
		<div>
		<ul>
			<li><a href="#" class="fa fa-facebook"></a></li>
			<li><a href="#" class="fa fa-twitter"></a></li>
			<li><a href="#" class="fa fa-instagram"></a></li>
			<li><a href="#" class="fa fa-pinterest"></a></li>
		</ul>
		</div>
		
</div>
</body>

</html>