<!DOCTYPE html>
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
 	body{
 	background-image: url("background6.jpg");
 	background-repeat:no-repeat;
    background-size:cover; 
 	}
 
    .col-container {
    width: 100%;
    display: table;
    border-radius: 5px;
    padding: 10px;
    
    }
    .container{
    border-radius: 5px;
    background: rgba(255,0,0,0.2); 
    padding: 10px;
    margin-top: 35px;
    color: black;
    }
    h2{
    text-align:center;
    margin-top: 20px;
    color:black;    
    }
    .column {
    display: table-cell;
    float: left;
    width: 50%;
    padding: 15px;
}
    .row:after {
    content: "";
    display: table;
    clear: both;
}
    
    h3{
     text-align:left;
     font-size:200%;
     color:blue;    
    }
    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }
    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}
    input[type=submit]:hover {
    background-color: #45a049;
	}
    input[type=tel]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
	}
    input[type=email] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
	}
    div.gallery {
    background-color: white;
     margin: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    float: left;
    width: 250px;
}
   
    div.gallery img {
    width: 100%;
    height: auto;
}
    div.desc {
    padding: 15px;
    text-align: center;											
}
   
 	.active{
        background-color:gray;
        color:white; 
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
    opacity: 0.7;
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
 	.fa-phone {
	background: black;
	color: white;
	}
	
   .fa-clock-o{
   background: black;
   color: white;
   }
   .fa-envelope-o{
   background: black;
   color: white;
   
   }
   .logotext{
   	color: white;
   	font-size: 22px;
   	font-style: ;
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

<div class="col-container" >
    <div class="column">
        <h2>Locations</h2>
        <div class="row">
            <div class="column">
                <div class="gallery">
                      <img src="bakery1.jpg" alt="1st location" width="600" height="400">
              <div class="desc"><b>Mumbai</b><br>Address:420,xyz street,bandra<br>Contact no:123456</div>
            </div>
            </div>        
            <div class="column">
                <div class="gallery">
                      <img src="bakery2.jpg" alt="2nd location" width="600" height="400">
              <div class="desc"><b>Pune</b><br>Address:12,ac sre nagar<br>Contact no:46789</div>
            </div>
            </div>        
        </div>
        <div class="row">
            <div class="column">
                <div class="gallery">
                      <img src="bakery3.jpg" alt="3rdlocation" width="600" height="400">
              <div class="desc"><b>Chennai</b><br>Address:25,villa street,gkjk<br>Contact no:456852</div>
            </div>
            </div>        
            <div class="column">
                <div class="gallery">
                      <img src="bakery5.jpg" alt="4th location" width="600" height="400">
              <div class="desc"><b>Kolkata</b><br>Address:4,xc<br>Contact.no:741258</div>
            </div>
            </div>        
        </div> 
	       <div >
        
			<li class="logotext" ><a href="#" class="fa fa-phone"></a>123-456-789</li> <br>    
        		<li class="logotext"><a href="#" class="fa fa-clock-o"></a>Mon-Sat 11am till 7pm & Sun 11am till 6pm</li><br>
         	        <li class="logotext"><a href="#" class="fa fa-envelope-o"></a>bakery@tasty.com</li>
 		</div>
    </div>
    <div class="column">
        <div class="container">
        <h2>Write Us...</h2>
        <p style="text-align:center"><b>(PLEASE ALLOW 48HRS FOR EMAIL RESPONSES)</b></p>
        <form style="background-color: transparent;">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="tel">Mob. No</label>
        <input type="tel" id="tel" name="mobile" placeholder="Your number..">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email..">
         <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea><br>
          <input type="submit" value="Submit">
        </form>    
        </div>
    
    
    </div>
</div>
<div class="footer">
		<p>WORKING HOURS:8 AM To 8 PM<br>Email:asgah@gmail.com</p>
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