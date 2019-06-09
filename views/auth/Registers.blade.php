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

			<h1>S'identifier ou créez un compte gratuit!</h1>
		</div>
				<ul class="left-form" >
                <h2> Nouveau compte Artiste :</h2>
                    <a href="{{ url('RegisterArtist') }}" class="btn btn-secondary ">Créer un compte artiste</a>
                    <h2> Nouveau compte Visiteur :</h2>
                    <a href="{{ url('RegisterFront') }}" class="btn btn-secondary ">Créer un compte visiteur</a><br><br>
					<a href="{{url('loginFront')}}" class="text-center">Vous avez déja un compte ? cliquez-ici </a>	
				</ul>
                
				<div class="clear">  </div>
					
			</form>
			
		</div>
	

	
</body>
@endsection