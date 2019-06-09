@extends('layouts.app')

@section('content')

<section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"></li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-9">
              <div class="card">
                <div class="card-header">
                  <strong> Profil</strong>
                
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-12">

                    
                    <form action="{{url('User/'.$user->id)}}" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        <div class="form-group">
            <label for=""><strong>Visualisation </strong></label><br>
            <input class="span7" type="hidden" name="name" value="{{$user->name}}">
            <input class="span7" type="hidden" name="id" value="{{$user->id}}">
            <input class="span7" type="hidden" name="bio" value="{{$user->bio}}">
            <input class="span7" type="hidden" name="email" value="{{$user->email}}">

                 <input class="span7" type="hidden" name="update" value="{{$user->updated_at}}">

        </div>



<div class="form-group">
            <label for=""><strong>Visualisation </strong></label><br>
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
            <input type="submit" class=" btn btn-danger" value="Validate">
            <a href="{{ url('Artiste')}} " class="btn btn-secondary">Retour</a>
      
            </div>
    
        </div>
    </div>
</div>

@endsection