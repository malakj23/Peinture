@extends('layouts.app')
@section('title', 'Fouchty arts - Ajout Article ')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">

        <li class="active">Gestion des Articles</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <strong> Nouveau Article</strong>
                
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group">
        <form action="{{url('ArticleEnvoit')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="form-group">
            <label for=""><strong>Titre</strong></label>
            <input type="text" name="titre" class="form-control"placeholder="Entrer le nom de l evenement">
            

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
       <label><strong>Mettez une photo descriptive pour l'article</strong></label>
					<input id="image" type="file" class="form-control" name="image" >
            

        @if($errors->get('image')) 
        @foreach( $errors-> get('image') as $message)
        <font color='#FB0101'>{{$message}}</font>
        @endforeach
        @endif


        </div>
        <div class="form-group">
            <label for=""><strong>Visualisation de l'article </strong></label><br>
      <select name="vis">
          <option>visualisé</option>
          <option>non-visualisé</option>

      </select>
      @if($errors->get('vis')) 
        @foreach( $errors-> get('vis') as $message)
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