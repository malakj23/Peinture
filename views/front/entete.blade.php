<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
<title>Fourchty-Arts</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://use.fontawesome.com/icons/v5.0.7/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
crossorigin="anonymous">
<link href="../css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" id="camera-css"  href="../css/camera.css" type="text/css" media="all">
<link href="../css/bootstrapfront.css" rel="stylesheet">
<link href="../css/themefront.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/skins/tango/skin.css" />
<link href="../css/bootstrap-responsivefront.css" rel="stylesheet">
<link rel="shortcut icon" href="../../img/fouchty.jpg">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">



<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->    
</head>
<body>
	<!--header-->
    
    <div class="header">
            <div class=""style=' margin-left: 1150px;' >

            @if (!(Auth::check()))
                    <a href="{{url('Registers')}}" class='fas fa-user'>
                    {{ csrf_field() }}
                            &nbsp; S'identifier/ S'inscrire
                            </a> 
                            @else
                        
                          <div class="dropdown" style=' margin-left: 60px;' >
  <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"> <strong> Bienvenue {{Auth::user()->name}} &nbsp;</strong>
  <span class="caret"></span></button>
  <ul class="dropdown-menu ">
    <li><a href="{{route('logout')}}">Déconnexion &nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
  </ul>
  <a href="" class="btn btn-warning"> <strong>Panier &nbsp; <i class="fas fa-shopping-cart"></i></strong>
 </a>
</div>
@endif
<br>
<a href="{{url('Contact')}}" ><i class="fas fa-address-card"></i>  &nbsp; <strong>Contactez nous!</strong></a></li>

                     
</div>
    	<div class="wrap">
        	<div class="navbar navbar_ clearfix">
            	<div class="container">
                    <div class="row">
                        <div class="span4">
                        	<div class="logo"><a href=""><img src="../imgfront/fouchty.jpg" style="height:100px ;width: 230px; "/></a></div>                    
                        </div>
                        <div class="span8" style=' margin-left: 200px;'>
                        	
                            <div class="clear"></div>
                            <nav id="main_menu">
                                <div class="menu_wrap">
                                    <ul class="nav sf-menu">
                                    <li class="sub-menu"><a href="{{url('/')}}">Accueil</a></li>
                                    <li class="sub-menu"><a href="{{url('Apropos')}}">A propos</a></li>

                                      <li><a href="{{url('Artistes')}}">Artistes</a></li>

                                      <li class="sub-menu"><a href="{{url('Peinture')}}">Peinture</a></li>
                                                 
                                      
                                      <li class="sub-menu"><a href="{{url('Sculpture')}}">Sculpture</a></li> 
                                      <li class="sub-menu"><a href="{{url('Plastique')}}">Art Plastique</a></li> 
                                             
                                      <li class="sub-menu"><a href="{{url('Blog')}}">Blog</a></li> 

                                           
                                    
                                    </ul>
                                </div>
                             </nav>                            
                        </div>
                    </div>                
                </div>
             </div>
        </div>    
    </div>
    <!--//header-->    
    <main class="main">
    @yield('content')
        
    <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                        <span style="color:aliceblue"><a href ="contact" >Contact us: </a></span> 
                       <p> Suivez-nous</p>
                        <li><a rel="tooltip" href="https://www.facebook.com/Fouchty-Arts-616117298834985/" title="Facebook" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        </div>
                        <div class="span7">
                        	<div class="foot_block">
                            	
                                <div class="follow_us">
                                	<ul>
                                 <b> Téléphone:  +216 97 94 20 22</b><br>
                                 <b>E-mail: contact@fouchty.com</b><br>
                                 <b>Adresse: Rue de Palestine, Immeuble Louzir 4054 Sahloul 2 Sousse، 4054   </b>  
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	
                            </div>                            
                        </div>
                    </div>	
                    <div class="copyright">© 2019 Fouchty arts . All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
   
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="jsfront/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="jsfront/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="jsfront/camera.js"></script>
    <script src="jsfront/bootstrap.js"></script>
    <script src="jsfront/superfish.js"></script>
    <script type="text/javascript" src="jsfront/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="jsfront/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="jsfront/jquery.tweet.js"></script>
    <script type="text/javascript" src="jsfront/myscript.js"></script>
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


