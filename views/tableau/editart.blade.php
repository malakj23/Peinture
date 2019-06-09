@extends('layouts.app')
@section('title', 'Fouchty arts - Modifier tableau ' .$tableau->titre)

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      <li><a href="{{ url('')}}"><i class="fa fa-dashboard"></i> Tables /</a></li>
        <li class="active">Gestion des tableaux</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <strong> Tableau</strong>
                
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-12">

                    

@if(count($errors))
<div class="alert alert-danger" role="alert">
 <ul>
  @foreach($errors->all() as $message)
  <li>{{ $message }}</li>
  @endforeach
  </ul>
</div>
@endif
        <form action="{{url('Tableau/'.$tableau->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
            <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="titre" class="form-control"value="{{ $tableau->titre}}"></div>
        
        
            <div class="form-group">
            <label for=""></label>
            
           <img src="{{asset('storage/'.$tableau->image)}}" style="width: 120px;"value= "{{asset('storage/'.$tableau->image)}}">
            <input class="form-control"type="file" name="image">
            </div>
        
 
        
          <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control"value="{{ $tableau->description}}"></div>

<div class="form-group">
            <label for="">Prix</label>
            <input type="text" name="prix" class="form-control"value="{{ $tableau->prix}}"></div>
          
            <div class="form-group">
            <label for=""><strong>Status du tableau</strong></label>
            <select name="status" >
            <option >vendu</option>
            <option >non-vendu</option>
            </select>
            @if($errors->get('status')) 
        @foreach( $errors-> get('status') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif
        </div>
           


            <div class="form-group">
            <label for=""><strong>Type du tableau </strong></label><br>
      <select name="type">
          <option>peinture</option>
          <option>sculpture</option>
          <option>art-plastique</option>

      </select>
      @if($errors->get('type')) 
        @foreach( $errors-> get('type') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif
        </div>



        
        <input type="submit" class=" btn btn-danger" value="Validate">
            <a href="{{ url('Tableau')}} " class="btn btn-secondary">Annuler</a>
      
        </div>
    </div>
</div>

@endsection