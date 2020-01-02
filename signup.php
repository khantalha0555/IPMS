<html>
    <head>
        <style>
            p{
                font-size:40px;
                color:gold;
            }
            a{
                font-size:40px;
                color:red;
            }
            body{
                background-image:url('btp.jpg');
                background-repeat:no-repeat;
                background-size:cover;
            }
            </style>
</head>
<body>
</body>
</html>


<?php

$patient=$_POST["patient"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$confirm=$_POST["confirm"];
$password=$_POST["password"];
$ward=$_POST["ward"];
$gender=$_POST["gender"];
$addres=$_POST["addres"];
$adhaar=$_POST["adhaar"];
$doctor=$_POST["doctor"];
$age=$_POST["age"];

$conn=new mysqli('localhost','root','','ipms');
if($conn->connect_error)
{  
    die('connection failed :' .$conn->connect_error);
}
else if($password!=$confirm)
{
    echo "<p>password doesnt match,please confirm your password</p>";
    echo "<a href='signup.html'>back to signup</a>";
    
}

else
{
    $stmt=$conn->prepare("insert into signup(patient,mobile,email,addres,gender,adhaar,doctor,age,ward) VALUES(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sisssisi",$patient,$mobile,$email,$addres,$gender,$adhaar,$doctor,$age,$ward);
$stmt->execute();
echo "registration successfully";
echo "<a href='loginpage.html'>go to login page</a>";
}

$stmt->close();
$conn->close();






/*else if(empty($name)||empty($number)||empty($Age)||empty($e)||empty($dname)||empty($address))
{
echo "<p> username is already used,please try another</p>";
echo "<a href='signup.html'>back to signup</a>";
}*/
/*else if(!empty($resulte))
{
    echo "<p>e-mail id already used,try another</p>";
    echo "<a href='signup.html'>back to signup</a>";
}
else if($p!=$cp)
{
    echo "<p>password doesnt match,please confirm your password</p>";
    echo "<a href='signup.html'>back to signup</a>";
    echo "<a href='signup.html'>back to signup</a>";
}*/
/*else
{
$sql="INSERT INTO signup(patient,mobile,email,addres,gender,adhaar,doctor) VALUES('$patient','$mobile','$email','$addres','$gender','$adhaar','$doctor')";
if($conn->query($sql))
{ 

echo "<p>your account has been registered</p>" ;
echo "<a href='loginpage.html'>go to login page</a>";
echo "</br>";
}
else
{
    echo "<a href='loginpage.html'>go to login page</a>";
}
}*/

?>