<!doctype html5>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
/**{
background-color: pink;
}*/

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
/*.footer {
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
   
   }*/
   ul {
    text-align: center;
    list-style-type: none;
    margin: 0;
    padding: 0;
   background-color: grey;
    }
    
    li {
    display: inline;
    font-size: 30px;
    padding:10px;
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
       .text{
       color:white;
       font-size:30px;
       background-color: black;
       padding:px;      
       .column:hover .image{
         opacity: 0.3;
     }
     
     .column:hover .middle{
        opacity: 1;
     }
         /* .column:hover .image{
         opacity: 0.3;
     }
     
     .column:hover .middle{
        opacity: 1;
     }*/





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

</style>
</head>
<body >

<div class="header">
<h1>SWEET    TREATS</h1>
      <img src="abc.png" alt=""> 
      <br><br> 
 </div>
    
   <div class="shivani" >
    <ul>
    <li><a href="home1.html">HOME</a></li>
    <li><a href="about.html">ABOUT</a></li>
    <div class="dropdown">
    <button class="dropbtn">MENU
      <i class="fa-caret-down"></i>
    </button>
     <div class="dropdown-content">
      <a href="cake.html">CAKE</a>
      <a href="pastry.html">PASTRY</a>
      <a href="cupcakemenu.html">CUPCAKE</a>
      <a href="bread.html">BREAD</a>
      <a href="beverage.html">BEVRAGES</a>
          </div>
    </div>  
    <li><a href="contact.html">CONTACT_US</a></li>
    <li><a href="signin.html">SIGN IN</a></li>
   </ul>
   </div>



<div class="row">
<div class="container">
<img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2016/2/26/1/WU1303H_White-Sandwich-Bread_s4x3.jpg.rend.hgtvcom.616.462.suffix/1459542226650.jpeg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>loaf of bread stock<br>&#8377 60<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">25% OFF</span> </p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://d2gk7xgygi98cy.cloudfront.net/1360-3-large.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>fresh bread<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="http://www.ndtv.com/cooks/images/Bread%20Rolls.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>bread rolls receipe<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>


<div class="row">
<div class="container">
<img src="https://cdn-ami-drupal.heartyhosting.com/sites/muscleandfitness.com/files/images/bread.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>bread for bodybuilding<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.tasteofhome.com/wp-content/uploads/2017/10/Apple-Bread_EXPS_SDAS17_3432_B04_06_5b-2-696x696.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>apple bread receipe<br>&#8377 45<br><span style="text-decoration: line-through; color: gray;">&#8377 60</span>  <span style="color :green;">25% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://img.buzzfeed.com/thumbnailer-prod-us-east-1/dd75a8779ee14bed8599ae5ee7a949b1/BFV8810_Cream_Cheese-Filled_Banana_Bread_Muffins_FB_w-Bien_End_Card.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>cream cheeze<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>


<div class="row">
<div class="container">
<img src="https://realfood.tesco.com/media/images/Basic-Bread-LARGE-HERO-32adc330-cdd9-4cf7-b467-03bca920dc15-0-1400x919.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>bread roll receipe<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/4/5/4/FNM050111_Mix-And-Match-0152-Chocolate-Bread_s4x3.jpg.rend.hgtvcom.616.462.suffix/1382540008361.jpeg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>banna bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://cdn.shopify.com/s/files/1/2081/1175/products/Croissant_Bread.jpeg?v=1518203817" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>crossiont bread<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>




<div class="row">
<div class="container">
<img src="https://loperaindia.com/wp-content/uploads/2017/10/Milk-Bread.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>milk bread<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.ketovale.com/wp-content/uploads/2017/07/keto-bun-recipe.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>best low card bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://bromabakery.com/wp-content/uploads/2015/05/Lavender-Infused-Banana-Bread-4.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>lawender banna bread<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="http://joylovefood.com/wp-content/uploads/2014/11/Banana-Coconut-Bread-3-1.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>Banana coconut bread<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://cdn-image.myrecipes.com/sites/default/files/styles/medium_2x/public/amish-cinnamon-bread-mr.jpg?itok=9OTEDgGU" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>amish sinnapour<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="http://www.businesstorch.com.ng/wp-content/uploads/2018/09/bread1234.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>nigerian<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="https://chocolatecoveredkatie.com/wp-content/uploads/2017/01/greek-yogurt-banana-bread.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>helathy banana<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.bigbasket.com/media/uploads/p/l/40020506_1-fresho-bread-multigrain-chemical-free.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>buy fresho bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="http://breadgardenmarket.com/wp-content/uploads/2017/02/bread_bakery_iowacity_breadgardenmarket.gif" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>Choco Chip<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="https://mygluten-freekitchen.com/wp-content/uploads/2013/04/GF-Pull-Apart-Dinner-Rolls.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>gluten free bread<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://images.pexels.com/photos/209403/pexels-photo-209403.jpeg?auto=compress&cs=tinysrgb&h=350" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>beautiful bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.doctorportal.com.au/wp-content/uploads/bread-salt-500x299.jpg" alt="cake" class="image" style="width:350px;height:300px;">
  <figcaption><p>hidden salt in bread<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>
</body>