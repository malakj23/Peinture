@extends('layouts.app')
@section('title', 'Fouchty-arts - Profil '.$user->name)
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
            <div class="col-sm-8">
              <div class="card">
                <div class="card-header">
               
                  <strong>{{$user->name}} profile </strong>
                
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-10">

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif    

@if(count($errors))
<div class="alert alert-danger" role="alert">
 <ul>
  @foreach($errors->all() as $message)
  <li>{{ $message }}</li>
  @endforeach
  </ul>
</div>
@endif

        <tr>
        <div class="form-group">
            <label for=""><b>Nom :</b></label>
            <td>{{$user->name}}</td>
            </div>

            <div class="form-group">
            <label for=""><b>Bio :</b></label>
            <td>{{$user->bio}}</td>
            </div>


        <div class="form-group">
            <label for=""><b>Photo :</b></label><br>
            <td><img src="{{asset('storage/'.$user->avatar)}}" style="width: 120px;" ></td>
            </div>
            <div class="form-group">
            <label for=""><b>Email :</b></label>
            <td>{{$user->email}}</td>
            </div>
            <th>
            @if(Auth::user()->type == 'entreprise')
              <div class="form-group">
            <label for=""><b>Site web:</b></label>
            <td>{{$user->web_site}}</td>
            </div>
              
         
       @endif
    
           
          
       
        </head>

    </table>
    <center>
    <a href="{{ url('User/'.$user->id.'/edit') }}" class="btn btn-outline-danger active btn-action">
                                        <i class="fa fa-edit"></i> &nbsp; Modifier
                                    </a></center>
    </div>
</div>
</div>

@endsection