@extends('layouts.app')
@section('title', 'Fouchty  - Profil '.$user->name)
@section('content')

    <!-- Content Header (Page header) -->
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

                    

@if(count($errors))
<div class="alert alert-danger" role="alert">
 <ul>
  @foreach($errors->all() as $message)
  <li>{{ $message }}</li>
  @endforeach
  </ul>
</div>
@endif
            <form action="{{url('User/'.$user->id)}}" method="post"  enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
            <div class="form-group">
            <label for=""><b>Nom</b></label>
            <input type="text" name="name" class="form-control" value="{{ $user->name}}"></div>
         

        
        <div class="form-group">
            <label for=""><b>Email</b></label>
            <input type="text" name="email" class="form-control" value="{{ $user->email}}"></div>
           
            <div class="form-group">
            <label for=""><b>Bio</b></label>
            <input type="text" name="bio" class="form-control" value="{{ $user->bio}}"></div>

            <div class="form-group">
            <label for=""><b>Image</b></label>
            <img src="{{asset('storage/'.$user->photo)}}" style="width: 120px;"value= "{{asset('storage/'.$user->photo)}}">
            <input class="form-control" name="photo" value="{{$user->photo}}" type="file">
            </div>

           
            <div class="form-group">
            <label for=""> <b>Mot de passe actuel</b> </label>
            <input id="userPassword" type="password" name="oldpassword" class="form-control">
            </div>
         
            <div class="form-group">
            <label for=""><b> Nouveau Mot de passe</b> </label>
            <input id="userPassword" type="password" name="password" class="form-control">
            </div>
         
            
        </br>
           
            <input type="submit" class=" btn btn-danger" value="Validate">
            <a href="{{ url('profil')}} " class="btn btn-secondary">Retour</a>
      
            </div>
    
        </div>
    </div>
</div>

@endsection