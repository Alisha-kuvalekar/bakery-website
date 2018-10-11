<!DOCTYPE html5>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<style type="text/css">

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



.para{

text-align: center;
font-size: 20px;
font-family: 'Pacifico', cursive;
}
.centre{
 position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);   
}
.container {
    position: relative;
    text-align: center;
    
}

.column {
  float: left;
  
  padding: 5px;
}

.para::after {
  content: "";
  clear: both;
  display: table;
}
.para1{
text-align: center;
padding: 80px 50px 0px 50px;
font-size: 30px;
font-family: 'Lobster', cursive;

}

.first{
font-size: 25px;
font-family: 'Pacifico', cursive;
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

<img src="head.jpg" alt="" style="width:100%">

<div class="para1">
Our classic treats are made daily by in-house bakery, using the freshest & finest ingredients.
Come visit us for delicious, sentimental sweets and a friendly, old-fashioned neighborhood experience.
<br>
<br><br>

<img src="ourstory.png" alt="" style="width:700px; height: 200px;">
</div>

<div class="para">
<div class="column">
<img src="bake.jpg" alt="" >
</div>
<div class="column">
<div class="container">
<img src="paper.jpg" alt="" style="width:900px; height:550px ">

	<div class="centre">
<p>
<span class="first">SWEET TREATS Founder, Shivani, Sidhi & Alisha lived in Thane.Where they were raised by there Grandma.</span><br>
Every day they would come home from school to enjoy their grandma's company
over a glass of milk and a fresh baked treat.This daily baking ritual and
special time together in the kitchen left a lasting impression.When they grew up
and moved to Mumbai,they brought along there grandma's recorded recipes.
The pure and simple connection those recipes fostered helped them
form Sweet Treats bakery to share their experience with others.
    
 
</p>
	</div>

</div>
</div>

</div>

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