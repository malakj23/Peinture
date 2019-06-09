@extends('front.entete')
 @section('content')
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        <div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>Formations
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
                    @foreach($formation as $formation)
                    <div class="projects">                                  
                        <div class="span3 element category01" data-category="category01">
                        <h2 class="title"><span>{{$formation->titre}} </span></h2>
                        <div class="item_description">  

                                    

                        <img src="{{asset('storage/'.$formation->photo)}}" style="height: 200px; width: 500px;" >
                    <br><br>

                        <td><p>{{$formation->description}}</p> </td></a> 

                         
                                
                                                  
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