@extends('front.entete')
 @section('content')
<div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>{{$article->titre}}
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
                                <div class="post_info">
                                <div class="fleft">Posté en <span>{{$article->created_at}}</span><br><br><br><br><br><br>

                                	<div class="clear"></div>

                                <img src="{{asset('storage/'.$article->image)}}" alt="" /><br>
                                </div>
                              
                                
                            </div>
                            
                        </div>
                        
                    	<div class="span4">
                        	<div class="sidebar">
                         
                                <div class="widget">
                                	<h2 class="title"><span></span></h2>
                                	
                                <p>{{$article->description}}</p>
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