
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
          <a href="addEmp.php" ><i class="w3-medium material-icons">add</i> Add Employee</a>
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
<!---------------------------------------------------------------------------->
<div class="w3-container w3-row w3-padding" style="margin-top: 73px;margin-left: 15%;">
    <h3 align="center" style="color: teal;">Update Contact Information</h3>
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
                        <input class="w3-input w3-col l6 w3-border" type="text" name="addressLine11" placeholder="Flat No, Street etc..."></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 2:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Sector, Colony etc..." name="addressLine21"></td>
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
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="Pincode" name="pincode1"></td>
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
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // Countries
        var country_arr = new Array("AUSTRALIA","INDIA","NEW ZEALAND","USA","UAE","MAURITIUS");

        $.each(country_arr, function (i, item) {
            $('#country').append($('<option>', {
                value: i,
                text : item,
            }, '</option>' ));
        });

        // States
        var s_a = new Array();
        s_a[0]="Select State|QUEENSLAND|VICTORIA";
        s_a[1]="Select State|ANDHRAPRADESH|KARNATAKA|TAMILNADU|DELHI|GOA|W-BENGAL|GUJARAT|MADHYAPRADESH|MAHARASHTRA|RAJASTHAN";
        s_a[2]="Select State|AUCKLAND";
        s_a[3]="Select State|NEWJERSEY|ILLINOIS";
        s_a[4]="Select State|DUBAI";
        s_a[5]="Select State|MAURITIUS";

        // Cities
        var c_a = new Array();
        c_a['QUEENSLAND']="Select District|BRISBANE";
        c_a['VICTORIA']="|Select District|MELBOURNE";
        c_a['ANDHRAPRADESH']="Select District|HYDERABAD";
        c_a['KARNATAKA']="Select District|BANGLORE";
        c_a['TAMILNADU']="Select District|CHENNAI";
        c_a['DELHI']="Select District|DELHI";
        c_a['GOA']="Select District|GOA";
        c_a['W-BENGAL']="Select District|KOLKATA";
        c_a['GUJARAT']="Select District|AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
        c_a['MADHYAPRADESH']="Select District|INDORE";
        c_a['MAHARASHTRA']="Select District|MUMBAI|PUNE";
        c_a['RAJASTHAN']="Select District|ABU";
        c_a['AUCKLAND']="Select District|AUCKLAND";
        c_a['NEWJERSEY']="Select District|EDISON";
        c_a['ILLINOIS']="Select District|CHICAGO";
        c_a['MAURITIUS']="Select District|MAURITIUS";
        c_a['DUBAI']="Select District|DUBAI";


        $('#country').change(function(){
            var c = $(this).val();
            var state_arr = s_a[c].split("|");
            $('#state').empty();
            $('#district').empty();
            if(c==0){
                $('#state').append($('<option>', {
                    value: '0',
                    text: 'Select State',
                }, '</option>'));
            }else {
                $.each(state_arr, function (i, item_state) {
                    $('#state').append($('<option>', {
                        value: item_state,
                        text: item_state,
                    }, '</option>'));
                });
            }
            $('#district').append($('<option>', {
                value: '0',
                text: 'Select district',
            }, '</option>'));
        });

        $('#state').change(function(){
            var s = $(this).val();
            if(s=='Select State'){
                $('#district').empty();
                $('#district').append($('<option>', {
                    value: '0',
                    text: 'Select district',
                }, '</option>'));
            }
            var district_arr = c_a[s].split("|");
            $('#district').empty();

            $.each(district_arr, function (j, item_district) {
                $('#district').append($('<option>', {
                    value: item_district,
                    text: item_district,
                }, '</option>'));
            });


        });
    });
    $(document).ready(function(){
        // Countries
        var country_arr = new Array("AUSTRALIA","INDIA","NEW ZEALAND","USA","UAE","MAURITIUS");

        $.each(country_arr, function (i, item) {
            $('#country1').append($('<option>', {
                value: i,
                text : item,
            }, '</option>' ));
        });

        // States
        var s_a = new Array();
        s_a[0]="Select State|QUEENSLAND|VICTORIA";
        s_a[1]="Select State|ANDHRAPRADESH|KARNATAKA|TAMILNADU|DELHI|GOA|W-BENGAL|GUJARAT|MADHYAPRADESH|MAHARASHTRA|RAJASTHAN";
        s_a[2]="Select State|AUCKLAND";
        s_a[3]="Select State|NEWJERSEY|ILLINOIS";
        s_a[4]="Select State|DUBAI";
        s_a[5]="Select State|MAURITIUS";

        // Cities
        var c_a = new Array();
        c_a['QUEENSLAND']="Select District|BRISBANE";
        c_a['VICTORIA']="Select District|MELBOURNE";
        c_a['ANDHRAPRADESH']="Select District|HYDERABAD";
        c_a['KARNATAKA']="Select District|BANGLORE";
        c_a['TAMILNADU']="Select District|CHENNAI";
        c_a['DELHI']="Select District|DELHI";
        c_a['GOA']="Select District|GOA";
        c_a['W-BENGAL']="Select District|KOLKATA";
        c_a['GUJARAT']="Select District|AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
        c_a['MADHYAPRADESH']="Select District|INDORE";
        c_a['MAHARASHTRA']="Select District|MUMBAI|PUNE";
        c_a['RAJASTHAN']="Select District|ABU";
        c_a['AUCKLAND']="Select District|AUCKLAND";
        c_a['NEWJERSEY']="Select District|EDISON";
        c_a['ILLINOIS']="Select District|CHICAGO";
        c_a['MAURITIUS']="Select District|MAURITIUS";
        c_a['DUBAI']="Select District|DUBAI";


        $('#country1').change(function(){
            var c = $(this).val();
            var state_arr = s_a[c].split("|");
            $('#state1').empty();
            $('#district1').empty();
            if(c==0){
                $('#state1').append($('<option>', {
                    value: '0',
                    text: 'Select State',
                }, '</option>'));
            }else {
                $.each(state_arr, function (i, item_state) {
                    $('#state1').append($('<option>', {
                        value: item_state,
                        text: item_state,
                    }, '</option>'));
                });
            }
            $('#district1').append($('<option>', {
                value: '0',
                text: 'Select district',
            }, '</option>'));
        });

        $('#state1').change(function(){
            var s = $(this).val();
            if(s=='Select State'){
                $('#district1').empty();
                $('#district1').append($('<option>', {
                    value: '0',
                    text: 'Select district',
                }, '</option>'));
            }
            var district_arr = c_a[s].split("|");
            $('#district1').empty();

            $.each(district_arr, function (j, item_district) {
                $('#district1').append($('<option>', {
                    value: item_district,
                    text: item_district,
                }, '</option>'));
            });


        });
    });
    
    
    
</script>
</html>