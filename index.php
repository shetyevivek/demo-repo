<?php
//connect mysql database
$hostname = "35.223.12.220";
$username = "vivekshetye1620";
$password = "vivekshetye@123";
$database = "vivekshetye_db";

$con = mysqli_connect($hostname, $username, $password, $database);

if($con)
{
    echo "Connection Successful";
}
else
{
    echo "Connection failed";
}
?>