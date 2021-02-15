
<!DOCTYPE html>
<html>
<title>Doctor-View Appointment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/icon.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<body>

<div class="w3-container"></div>
<div class="w3-row w3-teal" style="position: fixed; width : 100%;">
                <div class="w3-col l5">
                    <p> </p>
                </div>
                 <div class="w3-col l4" >
                    <h1>Mayawati Hospital</h1>
                 </div>
                 <div class="w3-col l3" style="">
                       <div class="w3-card-1 w3-small  w3-row">
                          <a href="profile.php"><img src="images/my_photo.jpg" alt="Avatar" class="w3-col l2 w3-left w3-circle w3-margin-right" style="width:50px; margin-top:5px;    "></a>
                          <p class="w3-col l9" style="margin-top: 2px;">Pushpraj Singh Yaduvanshi<br>
                          Login Time:02/03/2017 11:44 AM   
                          <br /><a href="http://localhost/PBS/PBS-PHP/index.php">Logout</a></p> 
                       </div>
                  </div>
                
             </div>      
                       <!-------------------------------------Side-Nav starts------------------------------->
  <nav class="w3-sidenav w3-teal w3-card-2" style="position: relative;margin-top: 73px;;width:15%;">
          <a href="doctor.php"><i class="w3-medium material-icons">home</i> Home</a>
          <a href="viewAppointment.php" class="active"><i class="w3-medium material-icons">search</i> View Appointment</a>
          <a onclick="myAccFunc1()" href="#"><i class="w3-medium material-icons">search</i> View Patient <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc1" class="w3-hide w3-teal w3-card-4">
            <a href="byPatientId.php" >&nbsp;&nbsp;&nbsp;By Patient Id</a>
            <a href="byPatientAdmissionDate.php" >&nbsp;&nbsp;&nbsp;By Admission Date</a>
            <a href="byPatientName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
    </nav>


<!-------------------------------------Side-Nav Ends------------------------------->

<!-------------------------------------By Date starts----------w3-text-brown--------------------->
    <div class="w3-card-4 w3-padding w3-card-4 w3-light-grey"  style="margin-left:15% ;margin-top: 73px;" align="middle">
            <h3>By Date</h3>
        <form class="w3-container" action="" method="post">
            <div class="w3-row-padding">
                <div class="w3-col l5">
                    <p> </p>
                </div>
              <div class="w3-col l2 center ">
                <input class="w3-input w3-border" name="date" type="text" id="datepicker" placeholder="Enter Date">
              </div>
              <div class="w3-col l2">
                    <button class="w3-btn w3" type="submit" name="search">Search</button></p>
                </div>
            </div>
        </form>
</div>
</body>
</html>
