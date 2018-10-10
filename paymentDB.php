<?php
 
  $FNAME=filter_input(INPUT_POST,'fname');
  $EMAIL=filter_input(INPUT_POST,'email');
  $ADDRESS=filter_input(INPUT_POST,'address');
  $CITY=filter_input(INPUT_POST,'city');
  $STATE=filter_input(INPUT_POST,'state');
  $ZIP=filter_input(INPUT_POST,'zip');
  $CARDNAME=filter_input(INPUT_POST,'cardname');
  $CARDNUMBER=filter_input(INPUT_POST,'cardnumber');
  $EXPMONTH=filter_input(INPUT_POST,'expmonth');
  
  if(!empty($NAME)){
  		 if(!empty($EMAIL)){
  				 if(!empty($ADDRESS)){
  						 if(!empty($CITY)){
  						     if(!empty($STATE)){
  						     		if(!empty($ZIP)){
  						 
  	$host="localhost";
  	$username="root";
  	$password="";
  	$dbname="payment";
  	
  	//creating connection 
  	
  	$conn = new mysqli($host,$username,$password,$dbname);
  	if(mysqli_connect_error()){
  		die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
  	}
  	else{
  	   
  		$sql= "INSERT INTO billing(name,email,address,city,state,zip,cardname,cardnumber,expmonth) VALUES ('$NAME','$EMAIL','$ADDRESS','$CITY','$STATE','$ZIP','$CARDNAME','$CARDNUMBER','$EXPMONTH')";
  		if($conn -> query($sql) === TRUE){ 
  		 echo "feedback sent successfully"; 
  		 }
   	else{
  		echo" Error:" . $sql . "<br>" .$conn->error;
  		}
  		$conn->close();
  	}
  }
  else{
  echo "Zip cannot be empty";
  die();
  }
  }
  else{
  echo "state must not be empty";
  die();
  }
  }
  else{
  echo "city must not be empty";
  die();
  }
  }
  else{
  echo "address must not be empty";
  die();
  }
  else{
  echo "email must not be empty";
  die();
  }
  else{
  echo "name must not be empty";
  die();
  }

  

?>