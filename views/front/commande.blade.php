@extends('front.entete')
 @section('content')
        
    <!--page_container-->
    <div class="page_container">
    @if (Route::has('login'))
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                <a href="{{url('/')}}">Acceuil</a><span>/</span>Commander
                </div>
            </div>
        </div>
        <form action="{{url('CommandeEnvoit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span4">
                        	<h2 class="title"><span>Passez votre commande : </span></h2>
                            <img src="{{asset('storage/'.$commande->image)}}" style="height: 350px; width: 500px;">
                            <h5> <b> {{$commande->titre}}</b> </h5>  
                            <h5> <b>Prix : {{$commande->prix}}</b> </h5>                           
                        </div>
                    	<div class="span8">
                        	<h2 class="title"><span></span><br> <br></h2>
                            <div class="contact_form">  
                            	<div id="note"></div>
                                <div id="fields">
                                    <form id="ajax-contact-form" action="">
                                        <input class="span7" type="hidden" name="tableau_id" value="{{$commande->id}}">
                                        <input class="span7" type="text" name="nom" value="" placeholder="Nom et prénom " />
                                        <input class="span7" type="text" name="email" value="" placeholder="Email" />
                                        <input class="span7" type="text" name="quantite" value="" placeholder="quantite" />
                                        <input class="span7" type="text" name="telephone" value="" placeholder="Téléphone" />
                                        <input class="span7" type="text" name="adresse" value="" placeholder="adresse" />
                                    
                                        <div class="clear"></div>
                                
                                        <input type="submit" class="btn send_btn" value="Commander" />
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>                   
                        </div>                	
                	</div>
                </section>
            </div>
        </div>
        @else
        <a href="{{ route('register') }}">Register</a>
        @endif
    </div>
    <!--//page_container-->
    
    <!--footer-->
    

	
@endsection