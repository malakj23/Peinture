@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"><b>Les evenements</b></li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
  
<div class="container">
   
          <div class="row">
            <div class="col-sm-18">
              <div class="card">
                <div class="card-header">
                  <strong></strong>
                </div>
                </br>
                <div class=""style ='margin-left: 920px;'>
                        <a href="{{ url('Evenement') }}" class="btn btn-primary active">
                                        <i class="fa fa-success"></i> &nbsp;Ajouter un évenement
                                    </a>
            </div>
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
                                
                                <th>Titre</th>
                                <th>Image</th>
                                <th>DESCRIPTION</th>
                                <th>Date</th>
                                <th>Video</th>
                         <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($evenement as $evenement)
                            <tr>
                                <td>{{$evenement->titre}}</td>
                                <td>  <img src="{{asset('storage/'.$evenement->photo)}}" style="height: 150px; width: 150px;"></td>
                                <td><textarea autofocus readonly  rows="5" cols="80"wrap="hard">{{$evenement->description}}</textarea></td>
                                <td>{{$evenement->date}}</td>
                                <td>  <video src="{{asset('storage/'.$evenement->video)}}" style="height: 150px; width: 150px;"></video></td>
                                <td>
                                    <a href="{{ url('Evenement/'.$evenement->id.'/edit') }}" class="btn btn-outline-danger active btn-action">
                                        <i class="fa fa-edit"></i> &nbsp; Modifier
                                    </a>
                                    <form id="form-{{$evenement->id}}" action="{{url('Evenements/'.$evenement->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" value="DELETE" class="btn btn-success active btn-action" onclick="if(confirm('Vous êtes sur de supprimer cet evenement ?')) document.getElementById('form-{{$evenement->id}}').submit();">
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