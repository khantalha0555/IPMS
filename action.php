<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'ipms');

$patient = filter_input_array($POST);

$gender = mysqli_real_escape_string($connect, $patient["gender"]);
$email = mysqli_real_escape_string($connect, $patient["email"]);
$mobile = mysqli_real_escape_string($connect, $patient["mobile"]);
$age = mysqli_real_escape_string($connect, $patient["age"]);

if($patient["action"] === 'edit')
{
 $query = "
 UPDATE signup
 SET gender = '".$gender."', 
 email = '".$email."', mobile = '".$mobile."', age = '".$age."'
 WHERE patient = '".$patient["patient"]."'
 ";

 mysqli_query($connect, $query);

}
if($patient["action"] === 'delete')
{
 $query = "
 DELETE FROM signup 
 WHERE patient = '".$patient["patient"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($patient);

?>
