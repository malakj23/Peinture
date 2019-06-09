@extends('front.entete')
 @section('content')
<div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>/Profil Artiste
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
                            	<h2 class="title"><span>{{$artist->name}}</a></span></h2>
                                <img src="{{asset('storage/'.$artist->photo)}}" style="height: 300px; width: 250px;">
                                <div class="post_info">
                                
                                    
                                </div>
                                <p><b>Email :</b>{{$artist->email}}</p>
                              
                            </div>
                            
                        </div>
                        
                    	<div class="span4">
                        	<div class="sidebar">
                         
                                <div class="widget">
                                	<h2 class="title"><span>Bio:</span></h2>
                                	
                                <p>{{$artist->bio}}</p>
                                </div>
                                </div>
                               
                                <div class="widget tags">
                                	<h4 class="title"><span>Vous pouvez encourager notre artiste par un simple clique sur ce tag :</span></h4>
                                	<a href="{{ url('Donate/'.$artist->id.'')}}">Faire un don </a>
                                                                  
                                </div>
                                                           
                        </div>                	
                	</div>
                </section>
            </div>
        </div>
    </div>
    </form>
    @endsection
