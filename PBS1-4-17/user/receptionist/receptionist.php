
<!DOCTYPE html>
<html>
<title>Reception-Appointment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="admin/css/form.css">
<link rel="stylesheet" href="css/icon.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="admin/js/address.js" type="text/javascript" charset="utf-8"></script>
<script src="js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.min.js"></script>

<link rel="stylesheet" href="css/icon.css">
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
          <a href="" class="active" ><i class="w3-medium material-icons">home</i> Home</a>
          <a href="oldPatientBilling1.php"><i class="w3-medium material-icons">border_color</i> Billing</a>
          <a href="viewAppointment.php"><i class="w3-medium material-icons">search</i> View Appointment</a>
          <a onclick="myAccFunc1()" href="#"><i class="w3-medium material-icons">insert_invitation</i> Make Appointment <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc1" class="w3-hide w3-teal w3-card-4">
            <a href="appNew.php"  >&nbsp;&nbsp;&nbsp;New Patient</a>
            <a href="appOld.php" >&nbsp;&nbsp;&nbsp;Old Patient</a>
          </div>
          <a onclick="myAccFunc2()" href="#"><i class="w3-medium material-icons">search</i> View Patient <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc2" class="w3-hide w3-teal w3-card-4">
            <a href="byPatientId.php" >&nbsp;&nbsp;&nbsp;By Patient Id</a>
            <a href="byPatientAdmissionDate.php" >&nbsp;&nbsp;&nbsp;By patient Admission Date</a>
            <a href="byPatientName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
          <a onclick="myAccFunc3()" href="#"><i class="w3-medium material-icons">search</i> View Bill <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc3" class="w3-hide w3-teal w3-card-4">
            <a href="byBillNo.php" >&nbsp;&nbsp;&nbsp;By Bill Number</a>
            <a href="byDate.php" >&nbsp;&nbsp;&nbsp;By Date</a>
            <a href="byName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
          <a onclick="myAccFunc4()" href="#"><i class="fa fa-hotel"></i> Ward <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc4" class="w3-hide w3-teal w3-card-4">
            <a href="generalWard.php" >&nbsp;&nbsp;&nbsp;General Ward</a>
            <a href="privateRoom.php" >&nbsp;&nbsp;&nbsp;Private Rooms</a>
          </div>        
    </nav>


<!-------------------------------------Side-Nav Ends-------------------------------> 
<div class="w3-container" style="max-height:500px ;margin-left: 15%;;margin-top:150px" align="middle">
    <div class="w3-row">
        <div class="w3-col l4 w3-padding">
            <h4 class="" style="text-align: left;color:teal" ><img src="images/patient.jpg" style="max-width: 17px;"> Patients</h4>
            <h6 class="w3-bottombar w3-border-teal " style="text-align: left; font-size: 15px;" >Add and view patients</h6>
            <div class="w3-bar" style="text-align: left;"><a href="byPatientId.php" style="text-decoration: none;text-align: left;">   <img src="images/view.jpg" style="max-width: 17px;"> View Patient</a></div>
            
        </div>
        <div class="w3-col l4 w3-padding">
            <h4 class="" style="text-align: left;color:teal" ><img src="images/bill.jpg" style="max-width: 17px;"> Billing</h4>
            <h6 class="w3-bottombar w3-border-teal " style="text-align: left; font-size: 15px;" >Generate and view old bills</h6>
            <div class="w3-bar" style="text-align: left;"><a href="oldPatientBilling1.php"  style="text-decoration: none;text-align: left;"> <img src="images/bill.jpg" style="max-width: 17px;"> Prepare Bill</a></div>
            <div class="w3-bar" style="text-align: left;"><a href="byBillNo.php" style="text-decoration: none;text-align: left;"> <img src="images/view.jpg" style="max-width: 17px;"> View Bill</a></div>
            
        </div>
        <div class="w3-col l4 w3-padding">
            <h4 class="" style="text-align: left;color:teal" ><i class="material-icons" style="font-size:18px">event</i> Appointments</h4>
            <h6 class="w3-bottombar w3-border-teal " style="text-align: left; font-size: 15px;" >Schedule appointments</h6>
            <div class="w3-bar" style="text-align: left;"><a href="viewAppointment.php"  style="text-decoration: none;text-align: left;"><i class="material-icons" style="font-size:17px">event</i> View Appointments</a></div>
            <div class="w3-bar" style="text-align: left;"><a href="appNew.php"  style="text-decoration: none;text-align: left;"><img src="images/patient.jpg" style="max-width: 17px;"> New Patient</a></div>
            <div class="w3-bar" style="text-align: left;"><a href="appOld.php" style="text-decoration: none;text-align: left;"><img src="images/patient.jpg" style="max-width: 17px;"> Old Patient</a></div>
            
        </div>
    </div>
    <br />
    <div class="w3-row">
        <div class="w3-col l4 w3-padding">
                <h4 class="" style="text-align: left;color:teal" ><img src="images/ward.jpg" style="max-width: 17px;"> Ward</h4>
                <h6 class="w3-bottombar w3-border-teal " style="text-align: left; font-size: 15px;" >View ward details</h6>
                <div class="w3-bar" style="text-align: left;"><a href="generalWard.php"  style="text-decoration: none;text-align: left;"><img src="images/ward.jpg" style="max-width: 17px;">  General Ward</a></div>
                <div class="w3-bar" style="text-align: left;"><a href="privateRoom.php" style="text-decoration: none;text-align: left;"><img src="images/ward.jpg" style="max-width: 17px;">  Private Rooms</a></div>
            
            
        </div>
    </div>
</div>
</body>
</html>