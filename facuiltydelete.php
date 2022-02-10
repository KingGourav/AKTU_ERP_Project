<?php
include("connection.php");
$name = $_GET['z'];
$query = "DELETE FROM FACUILTY WHERE ID='$name'";
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