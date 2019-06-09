@extends('front.entete')
 @section('content')
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        <div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>Evènements
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
                    @foreach($evenement as $evenement)
                    <div class="projects">                                  
                        <div class="span3 element category01" data-category="category01">
                        <h2 class="title"><span>{{$evenement->titre}} </span></h2>
                        <td>{{$evenement->description}} </td></a> 

                        <img src="{{asset('storage/'.$evenement->photo)}}" style="height: 200px; width: 500px;" >

                            <div class="item_description">
                            
                            <div class="post_meta">
                                    </div>
                                </div>
                                                  
                        </div>
                       
                    <!-- //portfolio_block -->   
                </div>
                @endforeach 
            </div>
        
        </div>
    <!--//MAIN CONTENT AREA-->
    	
    </div>   </div>
    
    <!--//page_container-->
    
    
      
@endsection