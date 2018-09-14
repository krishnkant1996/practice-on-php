<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>practice </title>
	<meta name="keywords" content="best way of searching rooms for rent">
	</head>
<body>			
			<!--Content comes here-->
			<div id="container"> 
					
			<br/><br/>
<?php
        
       require_once('connection.php');
	   if($_POST) {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $gender=$_POST["gender"];
        $query="Insert into r1 values('$name','$email','$address','$gender');";
        
        if(mysqli_query($conn, $query)){  
            
            echo "<script>alert('successfully ');</script>";  
        }
  		 else{  
            
            echo "<script>alert('not entered');</script>". mysqli_error($conn);  
        } 
		
		}
            require 'home.html';
        ?>



			</div>
			  <!--end of body-->
		  </div>
</body>
</html>