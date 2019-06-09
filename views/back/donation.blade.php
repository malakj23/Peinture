@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"><b>Les Donations</b></li>
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
                                <th>Telephone</th>
                                <th>Montant</th>
                            
                                

                                
                         <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($donate as $donate)
                            <tr>
                             

                            <td>  <img src="{{asset('storage/'.$donate->photo)}}" style="height: 150px; width: 150px;"></td>
                            <td>{{$donate->nom}}</td>
                                <td>{{$donate->telephone}}</td>
                                <td>{{$donate->money}}</td>
                               


                                <td>
                                   
                                <form id="form-{{$donate->id}}" action="{{ url('Donates/'.$donate->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" value="DELETE" class="btn btn-success active btn-action" onclick="if(confirm('Vous êtes sur de supprimer ce donate ?')) document.getElementById('form-{{$donate->id}}').submit();">
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