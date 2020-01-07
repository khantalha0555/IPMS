<?php
$connect = mysqli_connect("localhost", "root", "", "ipms");
$query = "SELECT * FROM signup ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>
<html>  
 <head>  
 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Manage User</title>  
          <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" media="screen" href="home.css" >
    <link rel="stylesheet" type="text/css" media="screen" href="welcome.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
    
    <script src="main.js"></script>
   <style>
       p{
           text-align: center;
            margin-left:200px;
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
                            <li class="active"><a href="#">Manage User</a></li>
                            <li><a href="Patient1.php">Patient Status </a></li>
                            <li><a href="setrange1.php">Set Range</a></li>
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
                                <li><a href="logout.html" >Log Out<i class="fas fa-user"> </i></a></li>
                            </ul>
            </ul>
        </div>
    </nav>

  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 style ="center">Manage User</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Patient</th>
       <th>Mobile No</th>
       <th>Email</th>
       <th>Gender</th>
       <th>Age</th>

       
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["patient"].'</td>
       <td>'.$row["mobile"].'</td>
       <td>'.$row["email"].'</td>
       <td>'.$row["gender"].'</td>
       <td>'.$row["age"].'</td>
       
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div> 
  <a href="signup.html">Add New user</a> 
 </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "patient"],
       editable:[[1, 'mobile'], [2, 'email'], [3, 'gender'], [4, 'age']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.patient).remove();
       }
      }
     });
 
});  
 </script>