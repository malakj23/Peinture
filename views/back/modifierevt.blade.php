@extends('layouts.app')
@section('title', 'Fouchty arts - Modifier evenement ' .$evenement->titre)

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      <li><a href="{{ url('')}}"><i class="fa fa-dashboard"></i> Tables /</a></li>
        <li class="active">Gestion des évenements</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <strong> Evenement</strong>
                
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
        <form action="{{url('Evenement/'.$evenement->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
            <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name="titre" class="form-control"value="{{ $evenement->titre}}"></div>
        
        
            <div class="form-group">
            <label for=""></label>
        
        
 
        
          <div class="form-group">
            <label for="">Date</label>
            <input type="text" name="date" class="form-control"value="{{ $evenement->date}}"></div>

<div class="form-group">
            <label for="">Description</label>
            <input type="text" name="desc" class="form-control"value="{{ $evenement->description}}"></div>
            
            <div class="form-group">
       <label>Mettez une photo descriptive pour l'évènement</label>
					<input id="photo" type="file" class="form-control" name="photo" src="{{ $evenement->photo}}" ></div>


         <div class="form-group">
       <label><strong>Mettez un video </strong></label>
					<input id="video" type="file" class="form-control" name="video" src="{{ $evenement->video}}"></div>
        
        <input type="submit" class=" btn btn-danger" value="Validate">
            <a href="{{ url('Evenements')}} " class="btn btn-secondary">Annuler</a>
      
        </div>
    </div>
</div>

@endsection