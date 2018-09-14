<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>practice </title>
	<meta name="keywords" content="best way of searching rooms for rent">
	</head>
<body>			
<form method="post" action="home.html">  
		  <input type="submit" name="submit" value="Back to Home">  
		</form>

			<!--Content comes here-->
			<?php
        
       require_once('connection.php');
	   if($_POST){
        $conn = mysqli_connect($servername, $user, $password,$dbname);  
        
        $query="select name,email,address,gender from r1;";
        
        $resultSet=mysqli_query($conn, $query);
        
        if(mysqli_num_rows($resultSet)>0){  
            
            while($row = mysqli_fetch_assoc($resultSet)){
                echo'<font size="+1" color="#000000">';
                echo " <br><br> Name : ".$row["name"]."<br> Email : ".$row["email"]."<br> Address : ".$row["address"]."<br> Gender : ".$row["gender"];           }
			echo"</font>";
			
            
        }
        else{  
            echo'<font size="+1" color="#000000">';
            echo "<br/><center> Not available rooms </center>";
			echo"</font>";

        }
		echo"<br/><br/>";
		}
		
	
        ?>



			</div>
			  <!--end of body-->
		  </div>
</body>
</html>