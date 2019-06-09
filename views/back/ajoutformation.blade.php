@extends('layouts.app')
@section('title', 'Fouchty arts - Ajout Formation ')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">

        <li class="active">Gestion des Formations</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <strong> Nouvelle Formation</strong>
                
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group">
        <form action="{{url('FormationEnvoit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}


            

            <div class="form-group">
            <label for=""><strong>Titre</strong></label>
            <input type="text" name="titre" class="form-control"placeholder="Entrer le nom de la formation">
            

        @if($errors->get('titre')) 
        @foreach( $errors-> get('titre') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif
        </div>


        <div class="form-group">
            <label for=""><strong>Description</strong></label>
            <input type="textarea" name="desc" class="form-control"placeholder="Entrer description">
            

        @if($errors->get('desc')) 
        @foreach( $errors-> get('desc') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif
        </div>

        <div class="form-group">
            <label for=""><strong>Date</strong></label>
            <input type="text" name="date" class="form-control"placeholder="Entrer la date de l evenement">
            

        @if($errors->get('date')) 
        @foreach( $errors-> get('date') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif

 </div>
      
       
       <div class="form-group">
       <label><strong>Mettez une photo de formateur</strong></label>
					<input id="photo" type="file" class="form-control" name="photo" >
            

        @if($errors->get('photo')) 
        @foreach( $errors-> get('photo') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif


        </div>


     

        
        
            
            <center>
        <input type="submit" class="btn btn-success active" value=" Enregistrer"></button>
         
         </center>
         
    
        </div>
    </div>
</div>

@endsection