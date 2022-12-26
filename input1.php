<!DOCTYPE html>
<html>
    <body>
   
        <?php

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "car_rental";

        $conn = new mysqli($servername,$username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: "
                . $conn->connect_error);
        }
        $Firstname =  $_REQUEST['Firstname'];
        $Lastname =  $_REQUEST['Lastname'];
		$Email = $_REQUEST['Email'];
        $PickupLocation = $_REQUEST['PickupLocation'];
        $Pickupdate=$_REQUEST['Pickupdate'];
        $DroppingLocation = $_REQUEST['DroppingLocation'];
        $State = $_REQUEST['State'];
        $sql = "INSERT INTO bookings VALUES('$Firstname', '$Lastname', '$Email', '$PickupLocation', '$Pickupdate',' $DroppingLocation', '$State')";
        if ($conn->query($sql) === TRUE) 
       { 
            header('Location:index1.html');
      }
      else 
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
      mysqli_close($conn);
        
        ?>
    </body>
</html>