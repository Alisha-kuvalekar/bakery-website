<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<script>
        $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
        function myFunction() {
    alert("Succesfully LOGIN..!");
}
      </script>

<style>
       body {
  background:url('http://cdn.wallpapersafari.com/13/6/Mpsg2b.jpg');
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
  background-size: 100% 110%;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}
.login {
  margin:0 auto;
  max-width:500px;
}
.login-header {
  color:#fff;
  text-align:center;
  font-size:300%;
}
/* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */
}
.login-form {
  border:.5px solid #fff;
  background:#4facff;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color:#fff;
}
.login-form {
  box-sizing:border-box;
  padding-top:15px;
  padding-bottom:10%;
  margin:5% auto;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
  width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:10px;
}
.login-form input[type="button"] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
.sign-up{
  color:#f2f2f2;
  margin-left:-70%;
  cursor:pointer;
  text-decoration:underline;
}
.no-access {
  color:#E86850;
  margin:20px 0px 20px -57%;
  text-decoration:underline;
  cursor:pointer;
}
.try-again {
  color:#f2f2f2;
  text-decoration:underline;
  cursor:pointer;
}

/*Media Querie*/
@media only screen and (min-width : 150px) and (max-width : 530px){
  .login-form h3 {
    text-align:center;
    margin:0;
  }
  .sign-up, .no-access {
    margin:10px 0;
  }
  .login-button {
    margin-bottom:10px;
  }
}
#scr{
  text-align: center;
  vertical-align: 300px;
  border-style: dotted;
  height: 700px;
}
</style>
  </head>
    </style>
</head>
<body>


    <!-- Login Form -->
    <div id="scr">
    <div class="form-div">
        <h2 style="vertical-align: 300px">Login Here</h2><br><br>
        <form action="sidd.php" method="post" >
          <h4>Username:</h4><br>
            <input type="text" name="user" placeholder="Username" onkeyup="showHint(this.value)">
            <br><p>Suggestions: <span id="txtHint"></span></p><br>
            <h4>Password:</h4><br>
            <input type="password" name="pass" placeholder="Password"><br><br>
            <input type="submit" value="Login" onclick="myFunction()"><br>
             <a class="sign-up">Sign Up!</a>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
  
        </form>
    </div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
</div>
</body>
</html>

