@extends('front.entete')
 @section('content')
    <!--page_container-->
    <div class="page_container">
        <!--slider-->
        <div id="main_slider">
            <div class="camera_wrap" id="camera_wrap_1">
                <div data-src="img/slider/1.jpg"></div>
                <div data-src="img/slider/2.jpg"></div>
                <div data-src="img/slider/3.jpg"></div>                                        
            </div><!-- #camera_wrap_1 -->
            <div class="clear"></div>	
        </div>        
        <!--//slider-->
                       
        <!--planning-->
        <div class="wrap planning">
            <div class="container">
                <div class="row" style="margin-left: 250px;">
                    <form >
                <h3 class="form-signin-heading">Merci de vous authentifier</h3>
			  
			  <input type="text" class="form-control" name="login" placeholder="Login" required autofocus="" />
			  <input type="password" class="form-control" name="pwd" placeholder="Password" required/>     		  
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" type="Submit">Login</button>                      

                                            	
                </div>
                

            </div>
        </div>
    
    <!--footer-->
   
        
        <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                          
                        </div>
                        <div class="span7">
                        	<div class="foot_right_block">
                            	
                                <div class="follow_us">
                                	<ul>
                                     <span style="color:aliceblue">Contact us: </span>   <li><a rel="tooltip" href="https://www.facebook.com/Fouchty-Arts-616117298834985/" title="Facebook" class="facebook">Facebook</a></li>
                                       
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="home.blade.php">Home</a></li>
                                        <li><a href="artist.blade.php">Artist</a></li>
                                        <li><a href="artist.blade.php">Painting</a></li>
                                        <li><a href="artist.blade.php">Sculpture</a></li>  
                                        <li><a href="artist.blade.php">Private sale</a></li>
                                        <li><a href="contacts.blade.php">Contacts</a></li>
                                    </ul>
                            	</div>
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->    

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			//Slider
			$('#camera_wrap_1').camera();
			
			//Featured works & latest posts
			$('#mycarousel, #mycarousel2, #newscarousel').jcarousel();													
		});		
	</script>
</body>
</html>
@endsection