<?php
$connect = mysqli_connect("localhost", "root", "", "ipms");

?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
    
    <script src="main.js"></script>
    <style>
         body{
               margin: 0;
               padding: 0;
              
               
          }
          .box{
            position: absolute;
            top: 22%;
            left: 47%;
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
                         <li class="active"><a href="#">Patient Status </a></li>
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
     <br><br><br>
     <div class="dropdown">
         <a class="btn btn-primary dropdown-toggle" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Patient Name</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <?php 
                    $res=mysqli_query($connect,"SELECT * from signup");
                    while($rows=mysqli_fetch_array($res))
                    {
                    ?>
              <a class="dropdown-item" role="button"><?php echo $rows["patient"]?></a>
              <?php
                }
                ?>

          </div>
     
     
     
     
        </div>

 </div>
 
 
 <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 style ="center">Patient Status</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Date</th>
       <th>Time</th>
       <th>Min Temp</th>
       <th>Max Temp<th>
       <th>Min HR</th>
       <th>Max HR</th>

       
      </tr>
     </thead>
     <tbody>
     <?php
    /* while($row = mysqli_fetch_array($result))
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
     }*/
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html>  
<script src="js/popper.js"></script>  
<script src="js/main.js"></script>

