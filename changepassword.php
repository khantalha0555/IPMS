<?php
    $conn=mysqli_connect('localhost','root','','ipms');
    
    
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <title>Password Change</title>
    <link rel="stylesheet" type="text/css" media="screen" href="signup.css" />
    <script src="main.js"></script>
</head>

<body>
    <div class="container">

        <h1>Change Password</h1>
        <hr>
        <div>
            <label for="ad"> Old Password</label>
            <input type="password" name="noc" id="ad" placeholder="Confirm Password">

        </div>
        
        <div class="input-group">
            <label for="ad"> New Password</label>
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="ad" type="password" class="form-control" name="no" placeholder="Password">
        </div>

        <div>
            <label for="ad"> Confirm Password</label>
            <input type="password" name="noc" id="ad" placeholder="Confirm Password">

        </div>
        <div class="clearfix">
            <button type="submit" class="submitbtn">Submit</button>
        </div>

        
</body>
</html>