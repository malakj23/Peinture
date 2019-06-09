@extends('front.entete')
 @section('content')
        
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                <a href="{{url('/')}}">Acceuil</a><span>/</span>Dons
                </div>
            </div>
        </div>
        <form action="{{url('DonateEnvoit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span4">
                        	<h4 class="title"><span>Merci d'encourager notre artiste {{$donate->name}} </span>
                            <img src="{{asset('storage/'.$donate->photo)}}" style="height: 250px; width: 300px;">
                            <h5> <b></b> </h5>  
                          
                            <h4><b></b> </h4>

                                                  
                        </div>
                    	<div class="span8">
                        	<h2 class="title"><span>Faire un don :</span></h2>
                            <div class="contact_form">  
                            	<div id="note"></div>
                                <div id="fields">
                                    <form id="ajax-contact-form" action="">
                                    <input class="span7" type="hidden" name="artist_id" value="{{$donate->id}}"  />

                                        <input class="span7" type="text" name="nom" value="" placeholder="Nom et prénom " />
                                        <input class="span7" type="text" name="telephone" value="" placeholder="Téléphone" />
                                        <input class="span7" type="text" name="montant" value="" placeholder="Montant" />
                                        <div class="clear"></div>
                                        <input type="reset" class="btn dark_btn" value="Effacer" />
                                        <input type="submit" class="btn send_btn" value="Envoyer" />
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>                   
                        </div>                	
                	</div>
                </section>
            </div>
        </div>
    </div>
    <!--//page_container-->
    
    <!--footer-->
    

	
@endsection