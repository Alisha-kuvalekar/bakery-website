<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    *{
    box-sizing:border-box;
    }
     .price {
  color: blue;;
  float: right;
  font-size: 25px;
}
     .header {
    background-color: transparent;
    text-align: center;
    padding: 20px;
    
    }
    
    h1{
        font-size:300%;
        color:black;
        text-align:center; 
        font-style:italic;   
    }
		.parallax {
    /* The image used */
    background-image: url("coffemac.jpg");

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
    

    li {
    display: inline;
    }

    li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover {
    background-color: gray;
    color: white;
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
     height:400px;     
      display: block;
      opacity: 1;
      backface-visibility: hidden;
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
	   .middle {
  opacity:0;
  position: absolute;
  top: 40%;
  left:40%;
  text-align: center;
  padding: 25px;
   transform: translate(-20%, -30%);
  
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
</style>
<title>xyz bake shop</title>
</head>
<body>
    
    <div class="header">
        <h1>XYZ BAKE SHOP</h1>
    </div>
    
    <div>
    <ul>
    <li><a href="#home">HOME</a></li>
    <li><a href="#x">X</a></li>
    <li><a href="#y">Y</a></li>
    <li><a class="active" href="#cup">BUY ONLINE</a></li>
    <li><a href="#contact">CONTACT US</a></li>
   </ul>

    </div>
   <div class="parallax"></div>
    <div>
   
    <h1 style="color: red;font-size: 60px;"><i> BEVERAGES <br>...</h1>
    <p style="text-align: center;font-size: 30px;color: red;"> (*Online order of beverages is available only if u reside nearby our store)</p>
    
         <div class="row">
            <div class="column">
                <img src="brewedcoffee.jpg"    alt="1stimg" class="image">
                 <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
                <p> <p class="price"> Rs.50</p><b>BREWED COFFEE<br></p>                                           
            </div>         
           <div class="column">
              <img src="mocha.jpg" alt="2ndimg" class="image">
               <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
              <p> <p class="price"> Rs.60</p><b>MOCHA<br></p>
           </div>
           <div class="column">
                <img src="hotchocolate.jpg" alt="3rdimg" class="image">
                 <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
              <p> <p class="price"> Rs.75</p><b>HOT CHOCOLATE<br></p>          
            </div>
         
         </div>
        <div class="row">
            <div class="column">
                <img src="lattemacchiato.jpg" alt="4thimg" class="image">
                 <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
              <p> <p class="price"> Rs.70</p><b>LATTE MACCHIATO<br></p>               
            </div>         
           <div class="column">
               <img src="capuchino.jpg" alt="5thimg" class="image">
                 <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
              <p> <p class="price"> Rs.80</p><b>CAPPUCCINO<br></p>
           </div>
           <div class="column">
                  <img src="espresso.jpg" alt="6thimgimg" class="image">
                   <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
              <p> <p class="price"> Rs.55</p><b>ESPRESSO<br></p>
           </div>
         
         </div>
        <div class="row">
            <div class="column">
                <img src="masalachai.jpg" alt="2ndimg" class="image">
                 <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>         
            <p> <p class="price"> Rs.45</p><b>MASALA CHAI<br></p>
            </div>         
           <div class="column">
               <img src="cookieshake.jpg" alt="2ndimg" class="image">
                <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
           		<p> <p class="price"> Rs.85</p><b>CHOCOLATE COOKIE SHAKE<br></p>
           </div>
           <div class="column">
               <img src="choccocomon.jpg" alt="2ndimg" class="image">
               <div class="middle">
                    <div class="text"><a href="#" style = "text-decoration: none; color: white;">Buy now</a></div>    
                </div>
              <p> <p class="price"> Rs.100</p><b>CHOCOLATE COCONUT MONSTER<br>(Chocolate Brownie & Coconut Monster Milkshake)</p>
           </div>
         
         </div>
    
    
    
    </div>
<div class="footer">
		<p style="font-style: normal;">WORKING HOURS:8 AM To 8 PM<br>Email:SweetTreats@gmail.com</p>
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