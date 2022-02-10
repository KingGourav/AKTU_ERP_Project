<?php
include("connection.php");
$name = $_GET['a'];
$query = "DELETE FROM FEE WHERE NAME='$name'";
$data = mysqli_query($conn , $query);

if ($data) {
	echo "data delete successfully";
	
?>


<?php

}
else
{
	echo "not data left";
}

?>