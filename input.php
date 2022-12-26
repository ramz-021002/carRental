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

        $name =  $_REQUEST['name'];
		$email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $sql = "INSERT INTO LOGINDETAILS VALUES('$name','$email', '$password')";
        if(mysqli_query($conn, $sql)){
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
		}
     
        mysqli_close($conn);
        ?>
    </body>
</html>