@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"><b>Les Formations</b></li>
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
                 <a href="{{ url('Formation') }}" class="btn btn-primary active">
                                 <i class="fa fa-success"></i> &nbsp;Ajouter une formation
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
                                <th>Formateur</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Date</th>
                            
                                

                                
                         <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($formation as $formation)
                            <tr>
                             

                            <td>  <img src="{{asset('storage/'.$formation->photo)}}" style="height: 150px; width: 150px;"></td>
                            <td>{{$formation->titre}}</td>
                                <td>{{$formation->description}}</td>
                                <td>{{$formation->date}}</td>
                               


                                 <td>
                                    <a href="{{ url('Formation/'.$formation->id.'/edit') }}" class="btn btn-outline-danger active btn-action">
                                        <i class="fa fa-edit"></i> &nbsp; Modifier
                                    </a>
                                    <form id="form-{{$formation->id}}" action="{{url('Formation/'.$formation->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" value="DELETE" class="btn btn-success active btn-action" onclick="if(confirm('Vous êtes sur de supprimer cette formation ?')) document.getElementById('form-{{$formation->id}}').submit();">
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