@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"><b>Tableaux </b></li>
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
                        <a href="{{ url('Tableau/create') }}" class="btn btn-primary active">
                                        <i class="fa fa-success"></i> &nbsp; Ajouter un tableau
                                    </a>
            </div>
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
                                <th>Titre</th>
                                <th>Image</th>
                                <th>DESCRIPTION</th>
                                <th>Prix</th>
                                <th>Type</th>
                                <th>Status</th>
                         <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tableau as $tableau)
                            <tr>
                                <td>{{$tableau->titre}}</td>
                                <td><img src="{{asset('storage/'.$tableau->image)}}" style="width: 120px;" ></td>
                                <td><textarea autofocus readonly  rows="5" cols="80"wrap="hard">{{$tableau->description}}</textarea></td>
                                <td>{{$tableau->prix}}</td>
                                <td>{{$tableau->type}}</td>
                                <td>{{$tableau->status}}</td>

                                <td>
                                    <a href="{{ url('Tableau/'.$tableau->id.'/edit') }}" class="btn btn-outline-danger active btn-action">
                                        <i class="fa fa-edit"></i> &nbsp; Modifier
                                    </a>
                                    <form id="form-{{$tableau->id}}" action="{{ url('Tableau/'.$tableau->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" value="DELETE" class="btn btn-success active btn-action" onclick="if(confirm('Vous êtes sur de supprimer ce tableau ?')) document.getElementById('form-{{$tableau->id}}').submit();">
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