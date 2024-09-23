
<?php
// Establish database connection
$con = mysqli_connect('localhost', 'root', 'Chinnari@709', 'crudseries');

// Check connection
if ($con) {
    // echo "connection successfull";
} else {
    // die(mysqli_error("Error"+$con));
    die("Connection failed: " . mysqli_connect_error());
}

?>
