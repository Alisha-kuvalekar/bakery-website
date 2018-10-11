<!doctype html5>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

/**{
background-color: pink;
}*/

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
.row{
margin-top: 50px;
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

.container{
opacity: 1;
 position: relative;
 width: 350px;
 height: 350px;
}


.middle{
opacity: 0;
position: absolute;
text-align: center;
top: 40%;
left: 35%
}
.container:hover .image {
  opacity: 0.3;
  }
.container:hover .middle{
opacity: 1;
}
.text {
  background-color: purple;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
 }
  

figcaption{
background-color: babypink;
width: 350px;
height: 55px;
text-align: center;


}


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


h1{
text-align:center;
font-size: 65px;
color: cream;
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

</style>
</head>
<body>

<div class="header">
<h1>SWEET    TREATS</h1>
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

<br><br><br><br><br><br>

<div class="row">
<div class="container">
<img src="pastry1.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Black Forest<br>&#8377 60<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">25% OFF</span> </p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry2.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Orea Chocolate<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry3.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Cherry Pineapple<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
</div>


<div class="row">
<div class="container">
<img src="pastry4.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Desirable Rose<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry5.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Black Coffee<br>&#8377 45<br><span style="text-decoration: line-through; color: gray;">&#8377 60</span>  <span style="color :green;">25% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry6.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Zebra Tort<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
</div>


<div class="row">
<div class="container">
<img src="pastry7.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Truffle<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry8.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Kiwi Vanilla<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry9.png" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Truffle<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
</div>




<div class="row">
<div class="container">
<img src="pastry10.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Strawberry Cream<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry11.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Hide and Seek<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry12.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Bread brownie<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="pastry13.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Butterscotch<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry14.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Dutch Square<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry15.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Brownie<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="pastry16.png" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Tricolor Pastry<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry17.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Lemon Pastry<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry18.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Choco Chip<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="pastry19.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Rainbow<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry20.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>Chocolate Vanilla<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
</div>
</div>
<div class="container">
<img src="pastry21.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Cheese Pastry<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">BUY NOW</a></div>
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