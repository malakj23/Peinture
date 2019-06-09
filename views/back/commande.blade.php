@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"><b>Les commandes</b></li>
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
                                <th>Tableau</th>
                                <th>Prix</th>
                                <th>quantite</th>
                                <th>Nom</th>
                            
                                <th>telephone</th>
                                <th>Email</th>
                                <th>Adresse</th>

                                
                         <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($commande as $commande)
                            <tr>
                             

                            <td>  <img src="{{asset('storage/'.$commande->image)}}" style="height: 150px; width: 150px;"></td>
                            <td>{{$commande->prix}}</td>
                                <td>{{$commande->quantite}}</td>
                                <td>{{$commande->nom}}</td>
                                <td>{{$commande->telephone}}</td>
                                <td>{{$commande->email}}</td>
                                <td>{{$commande->adresse}}</td>


                                <td>
                                   
                                <form id="form-{{$commande->id}}" action="{{ url('Commandes/'.$commande->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" value="DELETE" class="btn btn-success active btn-action" onclick="if(confirm('Vous êtes sur de supprimer ce message ?')) document.getElementById('form-{{$commande->id}}').submit();">
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