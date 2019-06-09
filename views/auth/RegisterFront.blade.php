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

        <form class="form-horizontal" method="POST" action="/RegisterFront">
      {{ csrf_field() }}
			<h1>Creéz un compte Visiteur !</h1>
		</div>
				<ul class="left-form" >
                   
					<li>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nom et prénom">
						<div class="clear"> </div>
					</li> 
					<li>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
						<div class="clear"> </div>
					</li> 
					<li>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe"required autofocus placeholder="password">
					@if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                       </span>
                       @endif
						
						<div class="clear"> </div>
					</li> 
					<li>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmez le mot de passe" required> 
						<div class="clear"> </div>
                    </li> 
                    
                    <input type="submit" value="Creér compte" ><br><br>
                    <a href="{{url('loginFront')}}" class="text-center">Vous avez déja un compte ? cliquez-ici </a>				
				</ul>
                
				<div class="clear">  </div>
					
			</form>
			
		</div>
	

	
</body>
@endsection