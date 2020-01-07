<?php
    $conn=mysqli_connect('localhost','root','','ipms');
    
    
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Set Range</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" media="screen" href="home.css" />
    <script src="main.js"></script>


    <link rel="stylesheet" type="text/css" media="screen" href="setrange.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="welcome.css" />
    <style>
          body{
               margin: 0;
               padding: 0;
              
               
          }
          .box{
            position: absolute;
            top: 36%;
            left: 48%;
            transform: translate(-22%,-53%);
           
          }
          .box select{
              background: #f1f1f1;
              color: black;
              padding: 10px;
              width: 300px;
              height: 40px;
              border: none;
              font-size: 18px;
              
             
          }
          .box:before{
              content:'';
              position: absolute;
              top: 0;
              right: 0;
              width: 50px;
              height: 50px;
          }
          </style>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a href="#" class="navbar-brand"><i class="glyphicon glyphicon-king"></i>   Intelligent Patient Monitoring System</a>
            </div>
            <ul class="collapse navbar-collapse" id="navbar">
                
                <ul class="nav navbar-nav">
                    <li><a href="Welcome.html">Dashboard</a></li>
                    <li><a href="manage_userr.php">Manage User</a></li>
                    <li><a href="Patient1.php">Patient Status </a></li>
                    <li class="active"><a href="#">Set Range</a></li class="active">
                    <div class="dropdown">
                        <li><button class="dropbtn">My Account</button></li>
                        <div class="dropdown-content">
                          <a href="update.html">Update Profile</a>
                          <a href="changepassword.php">Change Password</a>
                          <a href="upload.html">Upload Photo</a>
                        </div>
                    </div>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                   <!-- <li><a href="signup.html">Sign Up  <i class="fas fa-user-plus"> </i></a></li>-->
                    <li><a href="logout.html" style="float:right;">Log Out <i class="fas fa-user"> </i></a></li>
                </ul>
            </div>
        </div>
    </nav>

        <form action="setrange.php" method="POST" style="border:3px solid #ccc">
            <div class="container1">

                <h1>Set Range</h1>
                
                    <div class="row">
                    <p  style="font-size: 2em; font-weight:200px ; margin-top: 10px; color: black;   justify-content: start;
            align-self: center;
            margin-left: 400px;
            
            width: 100%;
            float: right;
            padding-right: 40%"> Select Patient Name: </p>
                        <div class="box">
                        <select>
                            <?php 
                            $res=mysqli_query($conn,"SELECT patient from signup");
                            while($rows=mysqli_fetch_array($res))
                            {
                            ?>
        
                        
                        <option><?php echo $rows["patient"]?></option>
                        <?php
                        }
                        ?>
                        
                        </select>
                       
                    </div>
                    
                    </div>
                
                


                <div>
                    <label for="mintemp">Min Temp</label>
                    <input name="mintemp" id="mintemp" type="number" class="form-control" placeholder="Min Temp" aria-describedby="basic-addon1">

                </div>
                <div>
                    <label for="maxtemp">Max Temp</label>
                    <input name="maxtemp" id="maxtemp" type="number" class="form-control" placeholder="Max Temp" aria-describedby="basic-addon1">
                </div>
                <div>
                    <label for="minHR">Min Heart Rate</label>
                    <input name="minHR" id="minHR" type="number" class="form-control" placeholder="Min Heart Rate" aria-describedby="basic-addon1">
                </div>
                <div>
                    <label for="maxHR">Max Heart Rate</label>
                    <input name="maxHR" id="maxHR" type="number" class="form-control" placeholder="Max Heart Rate" aria-describedby="basic-addon1">
                </div>
            
                <div class="clearfix">
                    <button type="submit" class="submitbtn" id="submit">Submit</button>
                    <button type="cancel" class="cancelbtn" id="Cancel">Cancel</button>
                </div>
            </div>
        </form>
    </body>
    <script>
            var d = new Date();
        </script>
    



</html>