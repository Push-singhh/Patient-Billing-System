
<!DOCTYPE html>
<html>
<title>Doctor-Update Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/icon.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/address.js" type="text/javascript" charset="utf-8"></script>
<script src="js/dropdown.js" type="text/javascript" charset="utf-8"></script>

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
          <a href="viewAppointment.php"><i class="w3-medium material-icons">search</i> View Appointment</a>
          <a onclick="myAccFunc1()" href="#"><i class="w3-medium material-icons">search</i> View Patient <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc1" class="w3-hide w3-teal w3-card-4">
            <a href="byPatientId.php" >&nbsp;&nbsp;&nbsp;By Patient Id</a>
            <a href="byPatientAdmissionDate.php" >&nbsp;&nbsp;&nbsp;By Admission Date</a>
            <a href="byPatientName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
    </nav>


    
<!-------------------------------------Side-Nav Ends------------------------------->
<!---------------------------------------------------------------------------->
<div class="w3-container w3-row w3-padding" style="margin-top: 73px;margin-left: 15%;">
    <div class="w3-card-0 w3-col l4 w3-center" style="max-height: 180px; max-width:180px;">
        <img class="w3-circle" src="images/my_photo.jpg" style="max-width: 180px;"/>
    </div>
    <div class="w3-container w3-col l8" >
    
        <table class="w3-table w3-small">
                    <tr >
                      <td id="leftCol">
                      <p id="leftColP"><b>Mobile Number:</b></p>
                      </td>
                      <td>  <input class="w3-input w3-border" value="7597517125" />
                      </td>
                      
                    </tr>
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Email-Id:</b></p></td>
                      <td>
                      <input class="w3-input w3-border" value="rajeshgupta99@gmail.com" />
                      </td>
                    </tr>
                    
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Present Address:</b></p></td>
                      <td>
                      <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 1:</b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" name="addressLine1" placeholder="Flat No, Street etc..."></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 2:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Sector, Colony etc..." name="addressLine2"></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Country:</b></p>
                        <select class="w3-select w3-border w3-col l6" name="country" id="country">
                            <option value="" disabled selected>Select Country</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>State:</b></p>
                        <select class="w3-select w3-border w3-col l6" name="state" id="state">
                            <option value="" disabled selected>Select State</option>
                         </select></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>District:</b></p>
                        <select class="w3-select w3-border w3-col l6" name="district" id="district">
                            <option value="" disabled selected>Select District</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Pin Code:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Pincode" name="pincode"></td>
                    </tr>
                    
                </table>
                      </td>
                    </tr>
                    
                    <tr>
                      <td id="leftCol">
                      <p  id="leftColP"><b>Permanent Address:</b></p></td>
                      <td>
                      <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 1:</b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" name="addressLine1" placeholder="Flat No, Street etc..."></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 2:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Sector, Colony etc..." name="addressLine2"></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Country:</b></p>
                        <select class="w3-select w3-border w3-col l6" name="country1" id="country1">
                            <option value="" disabled selected>Select Country</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>State:</b></p>
                        <select class="w3-select w3-border w3-col l6" name="state1" id="state1">
                            <option value="" disabled selected>Select State</option>
                         </select></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>District:</b></p>
                        <select class="w3-select w3-border w3-col l6" name="district1" id="district1">
                            <option value="" disabled selected>Select District</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Pin Code:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Pincode" name="pincode"></td>
                    </tr>
                    
                </table>
                      </td>
                    </tr>
        </table>
        <button class="w3-button w3-teal">Update</button>
    </div>
</div>

<!---------------------------------------------------------------------------->
</body>
</html>