@extends('front.entete')
 @section('content')
        
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                <a href="{{url('/')}}">Acceuil</a><span>/</span>Contacts
                </div>
            </div>
        </div>
        <form action="{{url('ContactEnvoit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span4">
                        	<h2 class="title"><span>Informations : </span></h2>
                          
                            <h4>Adresse : <b>Rue de Palestine, Immeuble Louzir 4054 Sahloul 2 Sousse، 4054 </b> </h4>

                            <h5>Téléphone : <b>+216 97 94 20 22</b><br/> Page Facebook :<a href="https://www.facebook.com/FouchtyArts/"> Fouchty arts</a><br/> </h5>                           
                        </div>
                    	<div class="span8">
                        	<h2 class="title"><span>Contactez-nous</span></h2>
                            <div class="contact_form">  
                            	<div id="note"></div>
                                <div id="fields">
                                    <form id="ajax-contact-form" action="">
                                        <input class="span7" type="text" name="nom" value="" placeholder="Nom et prénom " />
                                        <input class="span7" type="text" name="email" value="" placeholder="Email" />
                                        <input class="span7" type="text" name="telephone" value="" placeholder="Téléphone" />
                                        <textarea name="message" id="message" class="span8" placeholder="Message"></textarea>
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