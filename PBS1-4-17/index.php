
<!DOCTYPE html>
<html>
<title>Mayawati Hospital</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-teal">
    <!-----------------------------PAGE-HEADER-------------------->
			<div class="w3-row w3-teal">
                <div class="w3-col l4">
                    <p> </p>
                </div>
                 <div class="w3-col l6">
                    <h1>Mayawati Hospital</h1>
                 </div>
                 <div class="w3-col l2">             
                
           <!-------------------------MODAL- start----------------------->
                            
                                 
                <div class="w3-container">
                
                  <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-black w3-large">Login</button>
                
                  <div id="id01" class="w3-modal">
                    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:500px">
                
                      <div class="w3-center"><br>
                         <header class="w3-container w3-small w3-white">
                        
                      <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-padding-8">&times;</span>
                        </header>               
                      </div>
                
                      <form class="w3-container" method="post" action="">
                        <div class="w3-section">
                          <label style="color: black;"><b>User-Id</b></label>
                          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter User_id" name="userid" required>
                          <label style="color: black;"><b>Password</b></label>
                          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
                          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="login">Login</button>
                          
                        </div>
                      </form>
                      

<?php       						?>
                
                      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        
                        <span class="w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
                        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-right w3-btn w3-red">Cancel</button>
                      </div>
                
                    </div>
                  </div>
                </div>

                <!-------------------------MODAL- end----------------------->
                 </div>
           </div>
                            <div class="w3-bar w3-teal">
                              <a href="index.php" class="w3-bar-item w3-button">Home</a>
                              <a href="#" class="w3-bar-item w3-button">About Us</a>
                              <a href="#" class="w3-bar-item w3-button">Notices</a>
                              <a href="javascript:void(0)" onclick="w3_open()" class="w3-bar-item w3-button">Departments <i class="fa fa-caret-down"></i></a>
                            </div>
                            
                            <nav class="w3-dropnav w3-card-2 w3-teal" style="display:none" id="myDropnav">
                              <div class="w3-container">
                              <span onclick="w3_close()" class="w3-closebtn w3-large" title="Close Menu">x</span>
                              </div>
                              <div class="w3-row-padding w3-padding-bottom">
                                <div class="w3-third">
                                <a href="#">Neurology</a>
                                <a href="#">Cardiology</a>
                                <a href="#">Dermatology</a>
                                </div>
                                <div class="w3-third">
                                <a href="#">Orthopedic</a>
                                <a href="#">Liver Transplant</a>
                                <a href="#">ENT</a>
                                </div>
                                <div class="w3-third">
                                <a href="#">Organ Transplant</a>
                                <a href="#">Neurosurgery</a>
                                <a href="#">Endocrinology</a>
                                </div>
                              </div>
                              <br>
                            </nav>
                            
                            
                            
                            <script>
                            var x = document.getElementById("myDropnav");
                            function w3_open() {
                                if (x.className.indexOf("w3-show") == -1) {
                                    x.className += " w3-show";
                                } else {
                                    x.className = x.className.replace(" w3-show", "");
                                }
                            }
                            function w3_close() {
                                x.className = x.className.replace(" w3-show", "");
                            }
                            </script>
                            
                            
    				
                <!-------------------------------------SLIDER------------------------------------------>		
            	<div class="row">
				<div class="col-sm-12" style="background-color:#fff;margin-left:-16px; ">
          			
                <script src="js/jssor.slider-22.1.9.min.js" type="text/javascript"></script>
                <script src="js/slider.js" type="text/javascript"></script>
                <link rel="stylesheet" href="css/slider.css">
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="img/red.jpg" />
                        <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">TOUCH SWIPE SLIDER</div>
                        <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                    </div>
                    <div>
                        <img data-u="image" src="img/purple.jpg" />
                    </div>
                    <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
                    <div>
                        <img data-u="image" src="img/blue.jpg" />
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                    <!-- bullet navigator item prototype -->
                    <div data-u="prototype" style="width:16px;height:16px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
                 </div>
                 <script type="text/javascript">jssor_1_slider_init();</script>
            		</div>
    <!--------------------------------------slider end-------------------------->
    
    <!---------------------------------footer-------------------->
			
				<p style="font-size: 14px;color:#3C3C3C;text-align: center; "> ©Copyright 2016 Apollo Hospitals	</p>
		

</body>
