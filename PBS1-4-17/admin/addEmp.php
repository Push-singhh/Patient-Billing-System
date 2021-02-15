
<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/icon.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/address.js" type="text/javascript" charset="utf-8"></script>
<script src="js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<body>


<div class="w3-container"></div>
<div class="w3-row w3-teal" style="position: fixed; width : 100%;z-index:99">
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
<nav class="w3-sidenav w3-teal w3-card-2" style="margin-top:74px;;width:15%; overflow:auto;;">
          <a href="admin.php" ><i class="w3-medium material-icons">home</i> Home</a>
          <a href="" class="active"><i class="w3-medium material-icons">add</i> Add Employee</a>
          <a onclick="myAccFunc1()" href="#" > <i class="w3-medium material-icons">search</i> View Employee <i  class="fa fa-caret-down"></i></a>
          <div id="demoAcc1" class="w3-hide w3-teal w3-card-4">
            <a href="byEmpId.php" >&nbsp;&nbsp;&nbsp;By Employee Id</a>
            <a href="byEmpDOJ.php" >&nbsp;&nbsp;&nbsp;By Date Of Joining</a>
            <a href="byEmpName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>          
          <a onclick="myAccFunc2()" href="#"><i class="w3-medium material-icons">search</i> View Patient <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc2" class="w3-hide w3-teal w3-card-4">
            <a href="byPatientId.php" >&nbsp;&nbsp;&nbsp;By Patient Id</a>
            <a href="byPatientAdmissionDate.php" >&nbsp;&nbsp;&nbsp;By Date</a>
            <a href="byPatientName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>
          <a  href="viewAppointment.php"><i class="w3-medium material-icons">search</i>View Appointment</a>
          <a onclick="myAccFunc3()" href="#"><i class="w3-medium material-icons">search</i> View Bill <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc3" class="w3-hide w3-teal w3-card-4">
            <a href="byBillNo.php" >&nbsp;&nbsp;&nbsp;By Bill Number</a>
            <a href="byBillDate.php" >&nbsp;&nbsp;&nbsp;By Date</a>
            <a href="byBillName.php">&nbsp;&nbsp;&nbsp;By Name</a>
          </div>       
          <a onclick="myAccFunc4()" href="#"><i class="fa fa-hotel"></i> Manage Wards<i class="fa fa-caret-down"></i></a>
          <div id="demoAcc4" class="w3-hide w3-teal w3-card-4">
            <a href="generalWard.php">&nbsp;&nbsp;&nbsp;General Ward</a>
            <a href="privateRoom.php">&nbsp;&nbsp;&nbsp;Private Rooms</a>
            <a href="addNewWard.php">&nbsp;&nbsp;&nbsp;Design New Ward</a>
          </div>  
                    
    </nav>


        
<!-------------------------------------Side-Nav Ends------------------------------->  
<!-------------------------------------Add Employee----------w3-text-brown--------------------->
    <div class="w3-card-4 w3-card-4 w3-light-grey"  style="margin-left:15% ;margin-top:73px">
    <h3 align="center">Add Employee</h3>
          <form class="w3-container" action="" method="post">

            <h3 class="w3-bottombar w3-border-teal">Personal Details</h3>
                <table class="w3-table w3-small">
                    <tr >
                      <td class="w3-row" ><p class="w3-col l5" style="text-align: right;"><b>First Name:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" placeholder="First Name" name="firstName"></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Last Name:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Last Name" name="lastName"></td>
                    </tr>
                    <tr>
                      <td class="w3-row">
                        <p class="w3-col l5" style="text-align: right; "><b>Gender:<span class="req">*</span></b></p>
                          <input class="w3-radio" type="radio" name="gender" value="male">
                          <label class="w3-validate">Male</label>
                          <input class="w3-radio" type="radio" name="gender" value="female">
                          <label class="w3-validate">Female</label>
                         </td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Age:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Age" name="age"></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Date Of Birth:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="date" placeholder="DOB" name="dob"></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Upload Photo:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="file" name="photo"></td>
                    </tr>
                </table>
                      
                      <h3 class="w3-bottombar w3-border-teal">Contact Details</h3>
                <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Mobile Number:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" placeholder="Mobile Number" name="mobNumber"></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Email-Id:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Email-Id" name="emailId"></td>
                    </tr>
                 </table>
                 
                    
               
                <h3 class="w3-bottombar w3-border-teal">Permanent Address</h3>
                <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 1:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" name="addressLine1" placeholder="Flat No, Street etc..."></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 2:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Sector, Colony etc..." name="addressLine2"></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Country:<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l6" name="country" id="country">
                            <option value="">Select Country</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>State:<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l6" name="state" id="state">
                            <option value="" disabled selected>Select State</option>
                         </select></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>District:<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l6" name="district" id="district">
                            <option value="" disabled selected>Select District</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Pin Code:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Pincode" name="pincode"></td>
                    </tr>
                    
                </table>
                
         
                
                <p>
                    <label class="w3-validate "><b>Same As Boove:</b></label>
                  <input class="w3-check w3-small" type="checkbox" name="sameAsPermanent" onClick="presentSame(this.form);">
                  </p>
                <p>
                <h3 class="w3-bottombar w3-border-teal">Present Address</h3>
                <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 1:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text"  name="addressLine11" placeholder="Flat No, Street etc..."></td> 
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 2:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Sector, Colony etc..." name="addressLine21"></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Country:<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l6" name="country1" id="country1">
                            <option value="" disabled selected >Select Country</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>State:<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l6" name="state1" id="state1">
                            <option value="" >Select State</option>
                         </select></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>District:<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l6" name="district1" id="district1">
                            <option value="" >Select District</option>
                         </select></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Pin Code:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="pincode" name="pincode1"></td>
                    </tr>
                    
                </table>
                
                <h3 class="w3-bottombar w3-border-teal">Employment Information</h3>
                <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Designation:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" placeholder="Post" name="post"></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Department:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Department" name="department"></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Date Of Joining:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" placeholder="Date Of Joining" name="doj"></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Pay Scale:<span class="req">*</span></b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Pay Scale" name="payScale"></td>
                    </tr>
              
                    
                </table>
                <?php
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

echo randomPassword();
?>
                
                <div class="w3-row">
                    <p class="w3-col l11"> </p>
                    <button align="right" class="w3-btn w3-col l1"  type="submit" name="submit">submit</button></p>
                </div>
                
        </form>
</div>
<!-------------------------------------Add Employee Ends------------------------------->
</body>
</html>
