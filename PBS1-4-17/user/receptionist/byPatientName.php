<!DOCTYPE html>
<html>
<title>Reception-Search Bill</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/icon.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <a href="receptionist.php" ><i class="w3-medium material-icons">home</i> Home</a>
          <a href="oldPatientBilling1.php"><i class="w3-medium material-icons">border_color</i> Billing</a>
          <a href="viewAppointment.php"><i class="w3-medium material-icons">search</i> View Appointment</a>
          <a onclick="myAccFunc1()" href="#"><i class="w3-medium material-icons">insert_invitation</i> Make Appointment <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc1" class="w3-hide w3-teal w3-card-4">
            <a href="appNew.php"  >&nbsp;&nbsp;&nbsp;New Patient</a>
            <a href="appOld.php" >&nbsp;&nbsp;&nbsp;Old Patient</a>
          </div>
          <a onclick="myAccFunc2()" class="active" href="#"><i class="w3-medium material-icons">search</i> View Patient <i class="fa fa-caret-down"></i></a>
          <div id="demoAcc2" class="w3-hide w3-teal w3-card-4">
            <a href="byPatientId.php" >&nbsp;&nbsp;&nbsp;By Patient Id</a>
            <a href="byPatientAdmissionDate.php" >&nbsp;&nbsp;&nbsp;By patient Admission Date</a>
            <a href="" class="active">&nbsp;&nbsp;&nbsp;By Name</a>
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
<!-------------------------------------By Bill Name starts----------w3-text-brown--------------------->
    <div class="w3-card-4 w3-padding w3-card-4 w3-light-grey"  style="margin-left:15% ;margin-top: 73px;" align="middle">        <h3>By Name</h3>
        <form class="w3-container" action="" method="post">
            <div class="w3-row-padding">
                <div class="w3-col l5">
                    <p> </p>
                </div>
              <div class="w3-col l2 center ">
                <input class="w3-input w3-border" name="fname" type="text" placeholder="Enter Name">
              </div>
              <div class="w3-col l2">
                    <button class="w3-btn w3" type="submit" name="search">Search</button></p>
                </div>
            </div>
        </form>
        <div class="row">
            	<div class="w3-container">
                	<table class="w3-table w3-bordered">
                        <?php
								if(isset($_POST['search']))
								{									
									$fname=$_POST['fname'];
									$con=mysqli_connect('localhost','root','','pbs');
									$query="select * from billinfo where firstName like '$fname'";
									$result=mysqli_query($con,$query);
									
									if(mysqli_num_rows($result)!=0)
									{
										echo "<thead>";
					                        	echo "<tr>";
					                            	echo "<th>Bill No.</th>";
					                                echo "<th>Date</th>";
				                    	            echo "<th>First Name</th>";
					                                echo "<th>Last Name</th>";
				                    	            echo "<th>Age</th>";
				                	                echo "<th>Mobile</th>";
				                	                echo "<th>Address</th> ";                               
					                                echo "<th>Doctor Name</th>";
					                                echo "<th>Disease</th>";                             
					                            echo "</tr>";
					                        echo "</thead>";
											
									}
									else
										echo '<h3 align="center" style="color:#f00;">'."No entry found!!!".'</h3>';
									while($row=mysqli_fetch_array($result))
									{
										
										echo "<tbody>";
										echo "<tr>";
										print '<td><a style="color:#f00;" href="viewBill.php?bill='.$row['billNo'].'" target="_blank">'.$row['billNo'].'</a></td>';
										echo "<td>".$row['date']."</td>";
										echo "<td>".$row['firstName']."</td>";
										echo "<td>".$row['lastName']."</td>";
										echo "<td>".$row['age']."</td>";
										echo "<td>".$row['mobileNo']."</td>";
										echo "<td>".$row['address']."</td>";
										echo "<td>".$row['doctorName']."</td>";
										echo "<td>".$row['disease']."</td>";
										echo "</tr>";
										echo "</tbody>";
										
									}
								}
							?>
                            
                    </table>
                </div>
            </div>
			
        
    </div>
<!-------------------------------------By Name Ends------------------------------->
</body>
</html>
