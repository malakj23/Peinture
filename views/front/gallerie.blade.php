@extends('front.entete')
 @section('content')
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        <div class="wrap">
            	<div class="container">
                    
                </div>
            </div>
        </div>
    	<!--MAIN CONTENT AREA-->
        <div class="wrap">
            <div class="container inner_content">
                <div id="options">                                           
                    <ul id="filters" class="option-set" data-option-key="filter">
                    </ul>                                           
                    <div class="clear"></div>
                </div>
                
                <div class="row">
                    <!-- portfolio_block -->
                    @foreach($gallerie1 as $gallerie1)

                    <div class="projects">                                  
                        <div class="span3 element category01" data-category="category01">
                        
                            
                            <div class="item_description">
                            <img src="{{asset('storage/'.$gallerie1->photo)}}" alt="">

                                </div>
                                                   
                        </div>
                       
                    <!-- //portfolio_block -->   
                </div>
                @endforeach 

        
        </div>
        <div class="row">
                    <!-- portfolio_block -->
                    @foreach($gallerie2 as $gallerie2)

                    <div class="projects">                                  
                        <div class="span3 element category01" data-category="category01">
                        
                            
                            <div class="item_description">
                            <img src="{{asset('storage/'.$gallerie2->photo)}}" alt="">

                                </div>
                                                   
                        </div>
                       
                    <!-- //portfolio_block -->   
                </div>
                @endforeach 

        
        </div>
    <!--//MAIN CONTENT AREA-->
    	
    </div>   </div>
    
    <!--//page_container-->
    
    @endsection
      
