@extends('front.entete')
 @section('content')
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        <div class="wrap">
            	<div class="container">
                    <a href="{{url('/')}}">Acceuil</a><span>/</span>Articles
                </div>
            </div>
        </div>
    	<!--MAIN CONTENT AREA-->
        <div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">

                    	<div class="span8">
                        	<div class="post">
                            @foreach($article as $article)
                            @if($article->cache==="visualisé")
                            	<h2 class="title"><a href="{{ url('DetailArticle/'.$article->id.'')}}"><span>{{$article->titre}}</span></a></h2>
                           		<img src="{{asset('storage/'.$article->image)}}" alt="" />
                                <div class="post_info">
                                	<div class="fleft">On <span>{{$article->created_at}}</span>/ Posté par {{$article->name}}  </div>
                                	<div class="clear"></div>
                                </div>
                                <p>{{$article->description}}</p>
                                @endif

                            @endforeach 
 
                            </div>
                        </div>
                        <div class="span4">
                        	<div class="sidebar">
                            	<div class="widget">
                                <h2 class="title"><span>Les articles</span></h2>
                                	<p>en fait nous postulons des articles chaque semaine ....</p>
                                </div>
                                <div class="widget">

                                	<h2 class="title"><span>Nos derniers articles</span></h2>

                                	<ul class="recent_post">
                                         @foreach($artic as $artic)
                                    	<li>
                                        @if($artic->cache==="visualisé")

                                            <div><a href="{{ url('DetailArticle/'.$article->id.'')}}">{{$artic->titre}} </a></div>
                                        	{{$artic->created_at}}
                                            <div class="clear"></div>
                                        @endif

                                        </li>
                                    @endforeach
                                    </ul> 
                                </div>    
                               
                            </div>
                        </div>                
                    </div>
                </section>
            </div>
        </div>   
    </div>   
@endsection