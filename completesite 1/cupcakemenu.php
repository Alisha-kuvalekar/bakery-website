<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    
    
    
    
    *{
    box-sizing:border-box;
    }
    
    .parallax {
    /* The image used */
    background-image: url("cupcakecover.jpg");
    /* Set a specific height */
    min-height: 500px; 
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}    
     ul {
    text-align: center;
    list-style-type: none;
    margin: 0;
    padding: 0;
   background-color: black;
    }
    
   
     .active{
        background-color:gray;
        color:white; 
     }
     .column{
    float:left;
    width:33.3%;
    padding:15px;
    display:table-cell;
    position:relative;     
     }
     
     .row:after{
    content:"";
    display:table;
    clear: both;
    }
     
     .image{
     width:100%;
     height:500px;     
      display: block;
      opacity: 1;
      backface-visibility: hidden;
     }
     
     .middle {
  opacity:0;
  position: absolute;
  top: 35%;
  left: 30%;
  text-align: center;
  padding: 25px;
  
  }
     
     
     .column:hover .image{
         opacity: 0.3;
     }
     
     .column:hover .middle{
        opacity: 1;
     }
     .text{
       color:white;
       font-size:30px;
       background-color: black;
       padding: 10px;
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
	
 .price {
  color: blue;;
  float: right;
  font-size: 25px;
}
</style>
<title>xyz bake shop</title>
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
   
    <div class="parallax"></div>
    <div>
   
    <h1 style="color: mediumaquamarine;font-size: 60px;"><i>CUPCAKES<br>...</h1>
    
         <div class="row">
            <div class="column">
                <img src="1cup.jpg"    alt="1stimg" class="image">
                <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
                <p><p class="price"> Rs.55</p><b>CHOCOLATE BUTTERSCOTCH CUPCAKE<br>(chocolate cupcake with butterscotch filling and chocolate frosting)</p>                                           
            </div>         
           <div class="column">
              <img src="2cup.jpg" alt="2ndimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>
              <p><p class="price"> Rs.50</p><b>LEMON CUPCAKE<br>(lemon cupcake with lemon frosting)</p>
           </div>
           <div class="column">
                <img src="3cup.jpg" alt="3rdimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div> 
              <p><p class="price"> Rs.45</p><b>STRAWBERRY CUPCAKE<br>(Strawberry cupcake with strawberry filling and frosting)</p>          
            </div>
         
         </div>
        <div class="row">
            <div class="column">
                <img src="4cup.jpg" alt="4thimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div> 
              <p><p class="price"> Rs.60</p><b>CLASSIC RAINBOW CUPCAKE<br>(Rainbow cupcake with buttercream frosting</p>               
            </div>         
           <div class="column">
               <img src="5cup.jpg" alt="5thimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>
              <p><p class="price"> Rs.50</p><b>VANILLA CUPCAKE<br>(Vanilla cupcake with Buttercream frosting)</p>
           </div>
           <div class="column">
                  <img src="6cup.jpg" alt="6thimgimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div> 
              <p><p class="price"> Rs.45</p><b>PINEAPPLE CUPCAKE<br>(Pineapple cupcake with buttercream frosting)</p>
           </div>
         
         </div>
        <div class="row">
            <div class="column">
                <img src="7cup.jpg" alt="2ndimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>                
            <p><p class="price"> Rs.55</p><b>SALTED CARAMEL CUPCAKE<br>(Caramel cupcake with salted caramel frosting)</p>
            </div>         
           <div class="column">
               <img src="8cup.jpg" alt="2ndimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>
           		<p><p class="price"> Rs.50</p><b>LEMON MERINGUE CUPCAKE<br>(Lemon cupcake with meringue frosting on top)</p>
           </div>
           <div class="column">
               <img src="9cup.jpg" alt="2ndimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>
              <p><p class="price"> Rs.65</p><b>COCONUT CUPCAKE<br>(Coconut cupcake with coconut frosting and coconut shreds on top)</p>
           </div>
         
         </div>
    <div class="row">
            <div class="column">
                <img src="10cup.jpg" alt="2ndimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>                
            <p><p class="price"> Rs.60</p><b>BLUEBERRY CARAMEL CUPCAKE<br>(Blueberry cupcake with blueberry frosting)</p>
            </div>         
           <div class="column">
               <img src="11cup.jpg" alt="2ndimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>
           		<p><p class="price"> Rs.45</p><b>CARROT CUPCAKE<br>(Carrot cupcake with cream cheese frosting on top)</p>
           </div>
           <div class="column">
               <img src="12cup.jpg" alt="2ndimg" class="image">
              <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>              
              
              </div>
              <p><p class="price"> Rs.65</p><b>OREO CUPCAKE<br>(oreo flavoured cupcake with chocolate vanilla frosting on top)</p>
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