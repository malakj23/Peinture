@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"><b>Artistes</b></li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <strong></strong>
                </div>
                </br>
               
                <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                </div>
              
                <thead>
                <tr>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @if(session()->has('warning'))
                    <div class="alert alert-warning">
                        {{ session()->get('warning') }}
                    </div>
                    @endif
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Bio</th>
                                <th>Email</th>
                                <th>Visualisation</th>

                                
                         <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($artist as $artist)
                            <tr>
                            
                            <td>  <img src="{{asset('storage/'.$artist->photo)}}" style="height: 150px; width: 150px;"></td>

                            <td>{{$artist->name}}</td>
                            <td>{{$artist->bio}}</td>
                               
                            <td>{{$artist->email}}</td>
                            <td>{{$artist->cache}}</td>
                                <td> 
                                    <a href="{{ url('User/'.$artist->id.'/edit') }}" class="btn btn-outline-danger active btn-action">
                                        <i class="fa fa-edit"></i> &nbsp; Modifier
                                    </a>
                                   
                                <form id="form-{{$artist->id}}" action="{{ url('Artiste/'.$artist->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" value="DELETE" class="btn btn-success active btn-action" onclick="if(confirm('Vous êtes sur de supprimer cette artiste ?')) document.getElementById('form-{{$artist->id}}').submit();">
                                            <i class="fa fa-trash"></i> Supprimer
                                        </button>
                                </form>
                                </td>
                            </tr>

                        @endforeach
                             
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection