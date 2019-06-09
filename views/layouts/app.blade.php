<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Leaf Lite - Free Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="../../img/fouchty.jpg">
  <title>@yield('title')</title>
  <!-- Icons -->
  <link href="../../vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset ('../vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/app.css" rel="stylesheet">
  <!-- Styles required by this views -->
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar"> 
    <a class=" navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link"></a>
      </li>
     
    </ul>
    <ul class="nav navbar-nav ml-auto">
   
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      
        <b>Bienvenue {{Auth::user()->name}}</b>
        &nbsp;&nbsp;
          
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
          {{Auth::user()->name}}
        
          </div>
          
          
          <div class="divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-lock fa-lg mt-4"></i> Déconnexion</a>
        
                  {{ csrf_field() }}
      </li>
    </ul>
  
  </header>
  
  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-title">
         
          </li>
          @if(Auth::user()->type == 'artist')
         <br> <br><b>Votre tableaux sont publiés dans le site après une autorisation de l'administrateur, nous vous enverrons un e-mail pour plus d'informations  </b>
          <li class="nav-item">
            <a class="nav-link"= href="{{ url('profil')}}"><i class="icon-user icons "></i> Mon profile</a>
          </li>
          <li class="nav-title">
         Tables
         </li>
         <li class="nav-item nav-dropdown">
           <a class="nav-link " href="Tableau"></i> Gestion des Tableaux</a>
           </li>
         <li class="nav-item nav-dropdown">
           <a class="nav-link " href="Articles"></i> Gestion des Articles</a>
           </li>
         @endif
      
           
           @if(Auth::user()->type == 'admin')
           <li class="nav-title">
         Tables
         </li>
           <li class="nav-item nav-dropdown">
           <a class="nav-link " href="Tableau"></i> Gestion des Tableaux</a>
           </li>
           <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Artiste')}}"></i> Gestion des Artistes</a>

        <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Visiteurs')}}"></i> Gestion des Visiteurs</a>

          <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Contacts')}}"></i> Gestion des Contacts</a>
          <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Commandes')}}"></i> Gestion des Commandes</a>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Donates')}}"></i> Gestion des Donations</a>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Evenements')}}"></i> Gestion des Evenements</a>
        </li>
      
        <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Formations')}}"></i> Gestion des Formations</a>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link " href="{{ url('Articles')}}"></i> Gestion des Articles</a>
        </li>
       
       </ul>
        </li>
        @endif
            
          </div>
    <!-- Main content -->
    <main class="main">


@yield('content')

</div>

          
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

  <!-- Bootstrap and necessary plugins -->
  <script src="{{ asset ('vendors/js/jquery.min.js')}}"></script>
  <script src="{{ asset('vendors/js/popper.min.js')}}"></script>
  <script src="{{ asset('vendors/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('vendors/js/pace.min.js')}}"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="{{ asset('vendors/js/Chart.min.js')}}"></script>

  <!-- Leaf Lite main scripts -->

  <script src="{{ asset ('js/app.js')}}"></script>

  <!-- Plugins and scripts required by this views -->

  <!-- Custom scripts required by this view -->
  <script src="{{ asset ('js/views/main.js')}}"></script>

</body>
</html>