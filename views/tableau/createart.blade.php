@extends('layouts.app')
@section('title', 'Fouchty arts - Ajout tableau ')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">

        <li class="active">Gestion de tableaux</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <strong> Nouveau tableau</strong>
                
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group">
        <form action="{{url('Tableau')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="form-group">
            <label for=""><strong>Titre</strong></label>
            <input type="text" name="titre" class="form-control"placeholder="Entrer le nom de tableau">
            

        @if($errors->get('titre')) 
        @foreach( $errors-> get('titre') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif
        </div>

            <div class="form-group">
            <label for=""><strong>Image</strong></label>
            <input class="form-control"type="file" name="image">
            
            @if($errors->get('image')) 
        @foreach( $errors-> get('image') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif
        </div>

        <div class="form-group">
            <label for=""><strong>Description</strong></label>
            <input type="textarea" name="description" class="form-control"placeholder="Entrer description">
            

        @if($errors->get('description')) 
        @foreach( $errors-> get('description') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif
        </div>

        <div class="form-group">
            <label for=""><strong>Prix</strong></label>
            <input type="text" name="prix" class="form-control"placeholder="Entrer le prix de tableau">
            

        @if($errors->get('prix')) 
        @foreach( $errors-> get('prix') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif


        </div>

        <div class="form-group">
            <label for=""><strong>Type du tableau </strong></label><br>
      <select name="type">
          <option>peinture</option>
          <option>sculpture</option>
      </select>
      @if($errors->get('type')) 
        @foreach( $errors-> get('type') as $message)
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