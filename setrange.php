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


$mintemp=$_POST["mintemp"];
$maxtemp=$_POST["maxtemp"];
$minHR=$_POST["minHR"];
$maxHR=$_POST["maxHR"];




$conn=new mysqli('localhost','root','','ipms');
if($conn->connect_error)
{  
    die('connection failed :' .$conn->connect_error);
}

else
{
    $stmt=$conn->prepare("insert into setrange(mintemp,maxtemp,minHR,maxHR) VALUES(?,?,?,?)");
$stmt->bind_param("iiii",$mintemp,$maxtemp,$minHR,$maxHR);
    if (empty($mintemp)||empty($maxtemp)||empty($minHR)||empty($maxHR)) {
    echo 'enter the range';
    }
    else {

$stmt->execute();
echo "Range Successfully Set";
echo "<a href='Welcome.html'>go to dashboard page</a>";
}
}


$stmt->close();
$conn->close();
?>
