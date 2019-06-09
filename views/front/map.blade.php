@extends('front.entete')
 @section('content')
        
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                <a href="{{url('/')}}">Acceuil</a><span>/</span>Map
                </div>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    	
                    	
        </form>
        </div>
        </div>
    </div>          
          
    <!--//page_container-->
    
    <!--footer-->
    

	
@endsection