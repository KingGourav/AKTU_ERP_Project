<?php 
require('connection.php');
$query = "SELECT * FROM FEE";
error_reporting(0);
$data = mysqli_query($conn, $query);
$html='<table><tr><td>Roll no</td><td>Name</td><td>Father Name</td><td>Course</td
><td>Branch</td><td>Date of Submission</td><td>semester1</td><td>semester2</td><td>semester3</td><td>semester4</td><td>semester5</td><td>semester6</td><td>semester7</td><td>semester8</td><td>Total amount Recived</td><td>Total left Amount</td></tr>';
while ($row=mysqli_fetch_assoc($data)) {

	$html.='<tr><td>'.$row['roll'].'</td><td>'.$row['name'].'</td><td>'.$row['father'].'</td><td>'.$row['course'].'</td><td>'.$row['branch'].'</td><td>'.$row['dat'].'</td><td>'.$row['semester1'].'</td><td>'.$row[semester2].'</td><td>'.$row[semester3].'</td><td>'.$row[semester4].'</td><td>'.$row[semester5].'</td><td>'.$row[semester6].'</td><td>'.$row[semester7].'</td><td>'.$row[semester8].'</td><td>'.$row[total].'</td><td>'.$row[leftamount].'</td><tr>';
}
$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=feereport.xls');


echo $html;










?>