@extends('front.entete')
 @section('content')
 <!--page_container-->
 <div class="page_container">
        <!--slider-->
        <div id="main_slider">
            <div class="camera_wrap" id="camera_wrap_1">
                <div data-src="imgfront/slider/4.jpg"></div>
                <div data-src="imgfront/slider/1.jpg"></div>
                <div data-src="imgfront/slider/3.jpg"></div>                                        
            </div><!-- #camera_wrap_1 -->
            <div class="clear"></div>	
        </div>        
        <!--//slider-->
        <div class="wrap planning">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <a href="{{url('Gallerie')}}">
                        	<span class="img_icon icon1"></span>
                            <span class="link_title">Gallerie</span>
                            Meilleurs instants coup de coeur.
                        </a>
                    </div>
                    <div class="span3">
                        <a href="#">
                        	<span class="img_icon icon2"></span>
                            <span class="link_title">Localisation</span>
                            Nos Adresses conventionnées d'exposition.                       </a>
                    </div>
                    <div class="span3">
                        <a href="#">
                        	<span class="img_icon icon3"></span>
                            <span class="link_title">Favoris</span>
                           Bibliographie de l'artiste du mois.
                        </a>
                    </div>
                    <div class="span3">
                        <a href="{{url('Contact')}}">
                        	<span class="img_icon icon4"></span>
                            <span class="link_title">Contactez nous!</span>
                             Nous contacter pour plus d'information.
                        </a>
                    </div>                           	
                </div>
            </div>
        </div> 
        <!--planning-->
               <!--Welcome-->
               <div class="wrap block">
            <div class="container welcome_block">
            	<div class="welcome_line welcome_t"></div>
            <span>	Fouchty Arts est une Startup qui fournit une Plateforme de classement des œuvres,la vente et la commande <br> spécifique par besoin et choix d’artiste. <br></span>
                <div class="welcome_line welcome_b"></div>
            </div>
        </div>
       <!-- </div>
        </div> -->
        
        <!--//Welcome-->
        
    
        <!--latest evts-->
        <div class="wrap block">
        	<div class="container">
        		<div class="row news_block">
                    <div class="span6">
                    	<h2 class="title">Nos formations</h2>
                        <ul id="newscarousel" class="jcarousel-skin-tango">
                        @foreach($formation as $formation)

                            <li>
                            	<div class="news_date"><span>{{$formation->date}}</span></div>
                                <div class="news_t"><a href="{{url ('FormationShow')}}">{{$formation->titre}}</a></div>
                                
                                <div class="news_info">{{$formation->description}}  </div>
                                <div class="clear"></div>
                            </li>
                            @endforeach
                         </ul> 
                    </div>       		
        			
                    <div class="span6">
                    	<h2 class="title">Nos évènements</h2>
                        <ul id="newscarousel" class="jcarousel-skin-tango">
                        @foreach($evenement as $evenement)

                            <li>
                            	<div class="news_date"><span>{{$evenement->date}}</span></div>
                                <div class="news_t"><a href="{{url ('Events')}}">{{$evenement->titre}}</a></div>
                                
                                <div class="news_info">{{$evenement->description}}</div>
                                <div class="clear"></div>
                            </li>
                            @endforeach
                         </ul> 
                    </div>       		
            	</div>
        	</div>
        </div>
        
        <!--//latest evts--> 
       

        <div class="wrap block carousel_block">
            <div class="container">
                <h2 class="upper">Nos Nouveautées</h2>
              
            	<div class="row">
                    
                    <div class="span12">
                        <ul id="mycarousel2" class="jcarousel-skin-tango">
                        @foreach($tableau as $tableau)
                            <li>
                           
                            	<div class="post_carousel">
                                @if($tableau->cache==="visualisé")

                                <img src="{{asset('storage/'.$tableau->image)}}" style="height: 200px; width: 200px;" >
                                	<div class="title_t"><a href="{{ url('Detail/'.$tableau->id.'')}}"><h4>  {{$tableau->titre}}</h4></a></div>
                                    <div class="post_meta">
                                    Posté par {{$tableau->name}}   / {{$tableau->created_at}}
                                    </div>
                                @endif
                                </div>	
                               
                            </li>
                            @endforeach                                                                    
                        </ul>                        
                    </div>                
                </div> 
                              
            </div>
        </div>        




        
      
        </div>    </div>    </div>
    <!--//page_container-->
    </div>
    <!--footer-->
   
        

    @endsection
    <!--//footer-->    