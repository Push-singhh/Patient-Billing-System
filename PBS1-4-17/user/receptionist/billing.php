
<!DOCTYPE html>
<html>
<title>Reception-Patient Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/icon.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/address.js" type="text/javascript" charset="utf-8"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        var i=5;
        $(".add-row1").click(function(){
           var markup1 = "<tr><td class='w3-row'>"+(i+1)+"</td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='treat"+i+"' type='text' placeholder='Treatment'></td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='treatcharge"+i+"' type='text' placeholder='Charges'></td></tr>  </table>";
            $("#treat").append(markup1);
            i++;
        });
    });
   
    $(document).ready(function(){
        var j=5;
        $(".add-row2").click(function(){
           var markup2 = "<tr><td class='w3-row'>"+(j+1)+"</td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='lab"+j+"' type='text' placeholder='Lab Test'></td><td class='w3-row'><input class='w3-input  w3-col l12 w3-border' name='labcharge"+j+"' type='text' placeholder='Charges'></td></tr>  </table>";
            $("#lab").append(markup2);
            j++;
        });
    });    
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
    
    

</script>

			<body>

<div class="w3-container"></div>
<div class="w3-row w3-teal" style="position: fixed; width : 100%; z-index:99;">
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
          <a href="receptionist.php" ><i class="w3-medium material-icons">home</i> Home</a>
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
<!-------------------------------------By Bill Number starts----------w3-text-brown--------------------->
    <div class="w3-card-4 w3-light-grey w3-padding"  style="margin-left:15% ;margin-top: 73px;" >
        <h3 align="middle" class="w3-bottombar w3-border-teal" style="color: teal;">Feed Patient Info</h3>
        <form class="w3-container w3-small " style="margin: 0px;" action="" method="post">
                  <table class="w3-table w3-small">
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>First Name:<span class="req">*</span></b></p>
                        <input class="w3-input  w3-col l6 w3-border" type="text" placeholder=""></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Last Name:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder=""></td>
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
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder=""></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Date Of Birth:</b></p>
                        <input class="w3-input w3-col l6 w3-border" type="date" placeholder=""></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Blood Group:</b></p>
                        <select class="w3-select w3-border w3-col l6" >
                            <option value="" disabled selected>Select Blood Group</option>
                            <option >O+</option>
                            <option >O-</option>
                            <option >A+</option>
                            <option >A-</option>
                            <option >B+</option>
                            <option >B-</option>
                            <option >AB+</option>
                            <option >AB-</option>
                         </select></td>
                    </tr>
                     <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Mobile Number:<span class="req">*</span></b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" placeholder=""></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Email-Id:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder=""></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 1:</b></p>
                        <input class="w3-input w3-col l6 w3-border" type="text" name="addressLine1" placeholder=""></td>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Address Line 2:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="" name="addressLine2"></td>
                    </tr>
                    <tr>
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b >Country:<span class="req">*</span></b></p>
                        <select class="w3-select w3-border w3-col l6" name="country" id="country">
                            <option value="" disabled selected>Select Country</option>
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
                      <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Pin Code:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="" name="pincode"></td>
                    </tr>
                    <tr>
                        <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Department:</b></p>
                        <input class="w3-input w3-border w3-col l6" type="text" placeholder="" name="department"></td>
                        </td>
                         <td class="w3-row"><p class="w3-col l5" style="text-align: right;"><b>Doctor:</b></p>
                         <input class="w3-input w3-border w3-col l6" type="text" placeholder="" name="doctor"></td>
                        </td>
                    </tr>

                </table>
                <div class="w3-container w3-row">
                    <div class="w3-col l5">
                 <h3 style="color: teal;"">Treatment Charges</h3>
                       <table class="w3-table w3-border w3-small" id="treat" style="max-width: 600px;;">
                                <thead>
                                   <tr>
                                        <th>#</th>
                                        <th>Treatment</th>
                                        <th>Charges</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td class="w3-row">1</td>
                                      <td><input class="w3-input  w3-col l12 w3-border" name="treat0" type="text" placeholder="Treatment"></td>
                                      <td class="w3-row"><input class="w3-input  w3-col l12 w3-border" name="treatcharge0" type="text" placeholder="Charges"></td>
                                    </tr>
                                    <tr>
                                      <td class="w3-row">2</td>
                                      <td><input class="w3-input  w3-col l12 w3-border" name="treat1" type="text" placeholder="Treatment"></td>
                                      <td class="w3-row"><input class="w3-input  w3-col l12 w3-border" name="treatcharge1" type="text" placeholder="Charges"></td>
                                    </tr>
                                    <tr>
                                      <td class="w3-row">3</td>
                                      <td><input class="w3-input  w3-col l12 w3-border" name="treat2" type="text" placeholder="Treatment"></td>
                                      <td class="w3-row"><input class="w3-input  w3-col l12 w3-border" name="treatcharge2" type="text" placeholder="Charges"></td>
                                    </tr>
                                    <tr>
                                      <td class="w3-row">4</td>
                                      <td><input class="w3-input  w3-col l12 w3-border" name="treat3" type="text" placeholder="Treatment"></td>
                                      <td class="w3-row"><input class="w3-input  w3-col l12 w3-border" name="treatcharge3" type="text" placeholder="Charges"></td>
                                    </tr>
                                    <tr>
                                      <td class="w3-row">5</td>
                                      <td><input class="w3-input  w3-col l12 w3-border" name="treat4" type="text" placeholder="Treatment"></td>
                                      <td class="w3-row"><input class="w3-input  w3-col l12 w3-border" name="treatcharge4" type="text" placeholder="Charges"></td>
                                    </tr>
                                </tbody>
                    </table>
                        <input type="button" class="add-row1 w3-btn w3-left" value="Add Row">
                 </div>
                 <div class="w3-col l2">
                    <p> </p>
                 </div>
                   <div class="w3-col l5">
                 <h3 style="color: teal;"">Allot Room</h3>
                       <a href="">Check Availability</a>
                 </div>
             </div>
    
         
                <br />
               
                
                <div class="w3-row">
                    
                    <button align="left" class="w3-btn w3-col l1"  type="submit" name="save">Save</button>
                    <p class="w3-col l9"> </p>
                    <button align="right" class="w3-btn w3-col l2"  type="submit" name="submit">Generate Bill</button>
                </div>
                
        </form>

    </div>
</body>