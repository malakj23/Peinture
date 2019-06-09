@extends('front.entete')
 @section('content')
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        <div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>Peinture
                </div>
            </div>
        </div>
    	<!--MAIN CONTENT AREA-->
        <div class="wrap">
            <div class="container inner_content">
                <div id="options">                                           
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li><div class=" btn btn send_btn">All</div></li>
                    </ul>                                           
                    <div class="clear"></div>
                </div>
                
                <div class="row">
                    <!-- portfolio_block -->
                    @foreach($tableau as $tableau)
                    <div class="projects">                                  
                        <div class="span3 element category01" data-category="category01">
                        
                            @if($tableau->cache==="visualisé")
                            <div class="item_description">
                            <img src="{{asset('storage/'.$tableau->image)}}" style="height: 300px; width: 500px;" >
                                <h6><a href="{{ url('Detail/'.$tableau->id.'')}}"><h4>  {{$tableau->titre}}</h4></a></h6>
                                <div class="post_meta">
                                		Posté par   <td>{{$tableau->name}} </td></a>  
                                    </div>
                                </div>
                             <!--  <div class="descr"><b>Description : </b>{{$tableau->description}}
                               <b>Prix:</b>  {{$tableau->prix}}     -->                         
                        </div>
                       @endif
                    <!-- //portfolio_block -->   
                </div>
                @endforeach 
            </div>
        
        </div>
    <!--//MAIN CONTENT AREA-->
    	
    </div>   </div>
    
    <!--//page_container-->
    
    
      
@endsection