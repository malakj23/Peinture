@extends('front.entete')
@section('content')
<head>
		<meta charset="utf-8">
		<link href="csslogin/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body>
	<div class="main">
		<div class="header" >
        <h1>Se connecter à votre compte</h1>
		</div>
<form class="form-horizontal" method="POST" action="/loginFront">
{{ csrf_field() }}
<ul class="left-form">
					<h3>S'identifier</h3>
					<div>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe" required></li>
						
							<input type="submit"  value="Login" >
					</div>
					<div class="clear"> </div>
				</ul>
                <div class="clear">  </div>
					
                    </form>
                    
                </div>
            
        
            
        </body>
      @endsection