
<!DOCTYPE html>
<html>
<title>Bill</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body align="center">
            <div class="w3-row w3-teal" style="">
                            <div class="w3-col l4">
                    <p> </p>
                </div>
                 <div class="w3-col l6">
                    <h1>Mayawati Hospital</h1>
                 </div>
                 <div class="w3-col l2">
                 </div>
                </div>
            <!-------------------------------------------Bill------------------------>
            <div class="w3-container w3-light-grey w3-padding w3-card" >
            <?php
				$billNumber=$_GET['bill'];
				$sum=0;
				$con=mysqli_connect('localhost','root','','pbs');
				$query1="select * from billinfo where billNo=$billNumber";
				$query2="select * from treatment_charges where billNo=$billNumber";
				$query3="select * from other_charges where billNo=$billNumber";
				$result1=mysqli_query($con,$query1);
				$result2=mysqli_query($con,$query2);
				$result3=mysqli_query($con,$query3);
				$row1=mysqli_fetch_array($result1);
				echo '<div class="w3-col l12">';
						echo '<table class="w3-table w3-small">';
							echo '<tbody>';
								echo '<tr>';
									echo '<td style="border-top:none;"><span>Bill Number:</span>'.$row1['billNo'].'</td>';
									echo '<td style="border-top:none;"><span>Date:</span>'.$row1['date'].'</td>';
									echo '<td style="border-top:none;"><span>Patient Name:</span>'.$row1['firstName'].'&nbsp;'.$row1['lastName'].'</td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td style="border-top:none;"><span>Age:</span>'.$row1['age'].'</td>';
									echo '<td style="border-top:none;"><span>Sex:</span>'.$row1['sex'].'</td>';
									echo '<td style="border-top:none;"><span>Mobile Number:</span>'.$row1['mobileNo'].'</td>';
								echo '</tr>';
								echo '<tr>';
									echo '<td style="border-top:none;"><span>Address:</span>'.$row1['address'].'</td>';
									echo '<td style="border-top:none;"><span>Doctor\'s Name:</span>'.$row1['doctorName'].'</td>';
									echo '<td style="border-top:none;"><span>Disease:</span>'.$row1['disease'].'</td>';
								echo '</tr>';
							echo '</tbody>';
						echo '</table>';
				echo '</div>';
				
				echo '<div class="w3-col l5">';			
				echo '<h3>Treatment Charges</h3>';
				echo '<table class="w3-table w3-small w3-border w3-bordered">';
					echo '<thead>';
								echo '<tr>';
									echo '<th >Diagnosis</th>';
									echo '<th >Charge</th>';
								echo '</tr>';
							echo '</thead>';
							echo '<tbody>';
				while($row2=mysqli_fetch_array($result2))
				{
					echo '<tr>';
									echo '<td style="border-top:none;">'.$row2['service'].'</td>';
									echo '<td style="border-top:none;">'.$row2['charge'].'</td>';
					echo '</tr>';
					$sum=$sum+$row2['charge'];
				}
				echo '</table>';
				
				echo '</div>';
                echo '<div class="w3-col l2">';
                echo '<p> </p>';
                echo '</div>';
                echo '<div class="w3-col l5">';
				echo '<h3>Other Charges</h3>';
				echo '<table class="w3-table w3-small w3-border w3-bordered">';
					echo '<thead>';
								echo '<tr>';
									echo '<th >Service</th>';
									echo '<th >Charge</th>';
								echo '</tr>';
							echo '</thead>';
							echo '<tbody>';
				while($row3=mysqli_fetch_array($result3))
				{
					echo '<tr>';
									echo '<td style="border-top:none;">'.$row3['service'].'</td>';
									echo '<td style="border-top:none;">'.$row3['charge'].'</td>';
					echo '</tr>';
					$sum=$sum+$row3['charge'];
				}
                echo '</table><br>';
                echo '</div>';
                
                echo '<div class="w3-col l12"';
				echo '<tr><td style="border-top:none;"></td><td style="border-top:none;"><span>Total Charges:</span>'.$sum.'</td></tr>';				
				echo '</div>';
			?>         
            
            
                       
               <a href="viewBill.php"><button class="w3-button" onClick="print()">Print Bill</button></a>
            
            </div>
		
        <!---------------------------------footer-------------------->
            <div class="footer">
				<p align="middle" style="font-size: 14px;margin-bottom:0px; ">© Copyright 2016 Swami Keshvanad Hospital</p>
            </div>
            
</body>