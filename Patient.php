<?php
    $conn=mysqli_connect('localhost','root','','ipms');
    
    
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    

    <link rel="stylesheet" type="text/css" media="screen" href="home.css" >
    <link rel="stylesheet" type="text/css" media="screen" href="welcome.css" >
    
    <style>
        table, th, td {
            border: 2px solid black;
            width:600px ;
            line-height: 40px;
            margin-left:400px;
            color: black;
            text-align: center;
           



        }
       
        p
        {
           margin-left: 350px;
           font-size: 2em;
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
                            <li><a href="Manage_User.html">Manage User</a></li>
                            <li class="active"><a href="#">Patient Status </a></li>
                            <li><a href="setrange.html">Set Range</a></li>
                            <div class="dropdown">
                                <li><button class="dropbtn">My Account</button></li>
                                <div class="dropdown-content">
                                  <a href="update.html">Update Profile</a>
                                  <a href="change.html">Change Password</a>
                                  <a href="upload.html">Upload Photo</a>
                                </div>
                            </div>
                        </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="logout.html" >Log Out<i class="fas fa-user"> </i></a></li>
                            </ul>
            </ul>
        </div>
    </nav>

        <div class="container">

            <h1 style="font-size: 3em; font-weight: 500; margin-top: 10px; color: black;   justify-content: start;
            align-self: center;
            margin-left: 400px;
            margin-top: 75px;
            width: 75%;
            float: right;
            padding-right: 40%">Patient Status</h1>
            </div>
            <form action="#" class="customselect" method="POST">
            <div class="row">
            <p> Select Patient Name: </p>
                <div class="select">
                <select>
                    <?php 
                    $res=mysqli_query($conn,"SELECT* from signup");
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
            
            </form>


           <table>
              
            
                <t>
                   <th>id</th>
                   <th>patient</th>
                   <th>email</th>
                   <th>mobile</th>
                  
                   <th>gender</th>
                   
                   <th>age</th>
                  
                </t>
                <?php
                $query=" SELECT * FROM signup;";
                $result=mysqli_query($conn, $query);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                while($rows=mysqli_fetch_assoc($result))
                {
?>
                
                <tr>
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['patient'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['mobile'];?></td>
                    
                    <td><?php echo $rows['gender'];?></td>
                   
                    <td><?php echo $rows['age'];?></td>
                    
                    
                </tr>
        
                <?php
                }}
                ?>
            </table>



            

   














    </body>
    </html>

   
