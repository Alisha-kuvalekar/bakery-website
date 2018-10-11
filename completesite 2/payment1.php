<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("input[name$='payment']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#mode" + test).show();
    });
})
</script>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-20 {
  -ms-flex: 20%; /* IE10 */
  flex: 20%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-60{
  -ms-flex: 60%; /* IE10 */
  flex: 60%;
}

.col-20,
.col-50,
.col-60 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

</style>
</head>
<body>

<div class="row">
  <div class="col-20" ></div>
  <div class="col-60">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <input type="radio" name="payment" value="1"  />Card Payment<br>
            <input type="radio" name="payment" value="2" />Cash On Delivery<br>
            <div id="mode1" class="desc" style="display:none;" >
            <br><label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
            </div>
          </div>
        <div id="mode2" class="desc" ></div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-20"></div>
</div>

</body>
</html>
 
 <script>
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
            var email = $('#email').val();  
              var address = $('#address').val();  
                var city = $('#city').val();  
                  var state = $('#state').val();  
                    var zip = $('#zip').val();
                      var cardname = $('#cardname').val();  
                        var cardnumber = $('#cardnumber').val();  
                          var expmonth = $('#expmonth').val();    
             
           if(name == '' || email == '' || address == '' || city == '' || state == '' || zip == '')  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
					 $('#error_message').html('');  
                $.ajax({  
                     url:"paymentDB.php",  
                     method:"POST",  
                     data:{name:name, email:email, address:address, city:city, state:state, zip:zip, cardname:cardname, cardnumber:cardnumber, expmonth:expmonth},    
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