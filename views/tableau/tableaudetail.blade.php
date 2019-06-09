@extends('front.entete')
 @section('content')
<div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>Détails de tableau 
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
                            	<h2 class="title"><span>{{$tableau->titre}}</a></span></h2>
                                <img src="{{asset('storage/'.$tableau->image)}}" style="height: 500px; width: 500px;">
                                <div class="post_info">
                                	<div class="fleft">Posté en <span>{{$tableau->created_at}}</span></br> par {{$tableau->name}} </br><img src="{{asset('storage/'.$tableau->photo)}}" style="height: 100px; width: 100px;"> </div>
                                                                     
                                	<div class="clear"></div>
                                </div>
                              
                                
                            </div>
                            
                        </div>
                        
                    	<div class="span4">
                        	<div class="sidebar">
                         
                                <div class="widget">
                                	<h2 class="title"><span>Description :</span></h2>
                                	
                                <p>{{$tableau->description}}</p>
                                </div>
                                </div>
                                <div class="span4">
                        	<div class="sidebar">
                         
                               
                               
                                
                                                           
                        </div> 
                             <td>  <a href="{{url('Commande/'.$tableau->id.'')}}" class=" btn btn send_btn"style="padding:10px 70px;" >Commander</a>
                               </td>
                                
                                                           
                        </div>    
                                   	
                	</div>
                </section>
            </div>
        </div>
    </div>
    </form>
    @endsection


