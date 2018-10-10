<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<style>
*{
    box-sizing:border-box;
}
 	body{
 	background-image: url("background6.jpg");
 	background-repeat:no-repeat;
    background-size:cover; 
 	}
  .header {
    background-color: transparent;
    text-align: center;
    padding: 20px;
    
    }
    h1 {
    font-size:300%;
    color:black;    
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
   
    color:black;
    background-color:white;
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
  <h1><i>XYZ Bake Shop</i></h1>
</div>

<ul>
    <li><a href="#home">HOME</a></li>
    <li><a href="#x">X</a></li>
    <li><a href="#y">Y</a></li>
    <li><a href="#z">Z</a></li>
    <li><a class="active" href="#contact us">CONTACT US</a></li>
    
</ul>


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
        		<li class="logotext"><a href="#" class="fa fa-clock-o"></a>Mon-Sat 8am till 8pm & Sun 8am till 6pm</li><br>
         	        <li class="logotext"><a href="#" class="fa fa-envelope-o"></a>SweetTreats@gmail.com</li>
 		</div>
    </div>
    <div class="column">
        <div class="container">
        <h2>Write Us(Feedback)...</h2>
        <p style="text-align:center"><b>(PLEASE ALLOW 48HRS FOR EMAIL RESPONSES)</b></p>
        <form id="submit_form"  style="background-color: transparent;">
        <label for="fname"> Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="tel">Mob. No</label>
        <input type="tel" id="mobile" name="mobile" placeholder="Your number..">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email..">
         <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea><br>
          <input id="submit" type="submit" value="Submit">
         <span id="error_message" class="text-danger"></span>  
         <span id="success_message" class="text-success"></span>
        </form>
        </div>
    
    
    </div>
</div>
<div class="footer">
		<p>WORKING HOURS:8 AM To 8 PM<br>Email:SweetTreats@gmail.com</p>
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
 <script>
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var mobile = $('#mobile').val();  
            var email = $('#email').val();  
             var subject = $('#subject').val();  
           if(name == '' || mobile == '' || email == '' || subject == '')  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
					 $('#error_message').html('');  
                $.ajax({  
                     url:"connect.php",  
                     method:"POST",  
                     data:{name:name, mobile:mobile, email:email, subject:subject},    
                     success:function(data){  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                          $('#success_message').fadeOut("Slow");  
                          },2000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  