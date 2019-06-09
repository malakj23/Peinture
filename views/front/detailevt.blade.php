@extends('front.entete')
 @section('content')
<div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>Détail Evènement
                </div>
            </div>
        </div>
        <form action="" method="" enctype="multipart/form-data">
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span8">
                        	<div class="post">
                            	<h2 class="title"><span>{{$evenement->titre}}</a></span></h2>
                                <div class="post_info">
                                	<div class="fleft">Posté en <span>{{$evenement->created_at}}</span></br> 
                                	<div class="clear"></div>
                                </div>
                              
                                
                            </div>
                            
                        </div>
                        
                    	<div class="span4">
                        	<div class="sidebar">
                         
                                <div class="widget">
                                	<h2 class="title"><span>Description :</span></h2>
                                	
                                <p>{{$evenement->description}}</p>
                                </div>
                                </div>
                                <div class="span4">
                        	<div class="sidebar">
                         
                               
                               
                                
                          
                                   	
                	</div>
                </section>
            </div>
        </div>
    </div>
    </form>
    @endsection

