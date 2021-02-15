
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
<link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#general" ).on( "click", function() {
            $("#pri").hide();
            $( "#gen" ).show();
            $("#f").show();
        });
        $( "#private" ).on( "click", function() {
            $("#gen").hide();
            $( "#pri" ).show();
            $("#f").show();
        });
    $("#gen").hide();
    $("#pri").hide();
    $("#f").hide();
    });
    
    </script>
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
          <a href="addEmp.php"><i class="w3-medium material-icons">add</i> Add Employee</a>
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
          <a onclick="myAccFunc4()" href="#" class="active"><i class="fa fa-hotel"></i> Manage Wards<i class="fa fa-caret-down"></i></a>
          <div id="demoAcc4" class="w3-hide w3-teal w3-card-4">
            <a href="generalWard.php">&nbsp;&nbsp;&nbsp;General Ward</a>
            <a href="privateRoom.php">&nbsp;&nbsp;&nbsp;Private Rooms</a>
            <a href="" class="active">&nbsp;&nbsp;&nbsp;Design New Ward</a>
          </div>  
                    
    </nav>


        
<!-------------------------------------Side-Nav Ends------------------------------->  
<!-------------------------------------Main content----------w3-text-brown--------------------->
<div class="w3-card-4 w3-card-4 w3-light-grey"  style="margin-left:15% ;margin-top:73px">
    <h3 align="middle" class="w3-bottombar w3-border-teal" style="color: teal;">Design New Ward</h3><br />
    <form class="w3-container " style="margin: 0px;" action="" method="post">
                  <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l3" style="text-align: left;"><b>Ward Type<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l3" >
                            <option value="">Select Ward Type</option>
                            <option id="general" onclick="function">General Ward</option>
                            <option id="private">Private Room</option>
                         </select></td>
                      
                    </tr>
                    <tr id="gen">
                      <td class="w3-row"><p class="w3-col l3" style="text-align: left;"><b>Number Of beds:<span class="req">*</span></b></p>
                        <input class="w3-input  w3-col l3 w3-border" type="text" placeholder="Enter No. of beds"></td>
                    </tr>
                    <tr id="pri">
                      <td class="w3-row"><p class="w3-col l3" style="text-align: left;"><b>Number Of rooms:<span class="req">*</span></b></p>
                        <input class="w3-input  w3-col l3 w3-border" type="text" placeholder="Enter No. of rooms"></td>
                    </tr>
                    <tr id="f">
                      <td class="w3-row"><p class="w3-col l3" style="text-align: left;"><b>Floor Number:<span class="req">*</span></b></p>
                        <input class="w3-input  w3-col l3 w3-border" type="text" placeholder="Floor Number"></td>
                    </tr>
                  </table>
                   <div class="w3-row">
                    <p class="w3-col l11"> </p>
                    <button align="right" class="w3-btn w3-col l1"  type="submit" name="submit">submit</button></p>
                </div>
        </form>    
</div>
<!-------------------------------------Main content Ends------------------------------->
</body>
</html>
