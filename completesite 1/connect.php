<?php
 
  $NAME=filter_input(INPUT_POST,'name');
  $MOBILE=filter_input(INPUT_POST,'mobile');
  $EMAIL=filter_input(INPUT_POST,'email');
  $SUBJECT=filter_input(INPUT_POST,'subject');
  
  
  if(!empty($NAME)){
  		 if(!empty($MOBILE)){
  				 if(!empty($EMAIL)){
  						 if(!empty($SUBJECT)){
  						 
  	$host="localhost";
  	$username="root";
  	$password="#ace7dream";
  	$dbname="contactus_feedbackform";
  	
  	//creating connection 
  	
  	$conn = new mysqli($host,$username,$password,$dbname);
  	if(mysqli_connect_error()){
  		die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
  	}
  	else{
  	   
  		$sql= "INSERT INTO feedback_form(name,mobile,email,subject) VALUES ('$NAME','$MOBILE','$EMAIL','$SUBJECT')";
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
  echo "subject cannot be empty";
  die();
  }
  }
  else{
  echo "email id must not be empty";
  die();
  }
  }
  else{
  echo "mobile no must not be empty";
  die();
  }
  }
  else{
  echo "name must not be empty";
  die();
  }
 
 
  
?>