@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
       
      <ol class="breadcrumb">
      
        <li class="active"><b>Messages des Contacts</b></li>
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
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Message</th>
                                
                         <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contact as $contact)
                            <tr>
                                <td>{{$contact->nom}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->telephone}}</td>
                                <td>{{$contact->message}}</td>
                                <td>
                                   
                                <form id="form-{{$contact->id}}" action="{{ url('Contacts/'.$contact->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" value="DELETE" class="btn btn-success active btn-action" onclick="if(confirm('Vous êtes sur de supprimer ce message ?')) document.getElementById('form-{{$contact->id}}').submit();">
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