@extends('front.entete')
 @section('content')
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        <div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>Artistes
                </div>
            </div>
        </div>
    	<!--MAIN CONTENT AREA-->
        
                
                <div class="row">
                    <!-- portfolio_block -->
                    @foreach($artist as $artist)
                    <div class="projects">                                  
                        <div class="span3 element category01" data-category="category01">
                        
                        @if($artist->cache==="visualisé")
                            <div class="item_description">
                            <td><img src="{{asset('storage/'.$artist->photo)}}"  style="height: 150px; width: 150px;" ></td>
                                <h6><a href="{{ url('DetailArtist/'.$artist->id.'')}}"></h6><h4>  {{$artist->name}}</h4></a></h6>
                                <h6><h4>  {{$artist->email}}</h4></h6>
                                </div>
                        @endif
                   
                        </div>
                    <!-- //portfolio_block -->   
                </div>
                @endforeach 
            </div>
        
        </div>
    <!--//MAIN CONTENT AREA-->
    	
    
    
    <!--//page_container-->
    
    
      
@endsection