@extends('layouts.app')

@section('content')

 @foreach($posts as $post)

     
    @hasanyrole('manage|super-admin|Author')

    <div class="panel panel-default">
    	<h3>{{$post->title}}</h3>

    	<div class="panel-body">
             {{$post->content}}
    	</div>
    </div>




 @else

   @if(empty($post->is_premium))
     <div class="panel panel-default">
     	<h3 class="panel-title">{{$post->title}}</h3>
     	<div class="panel-body">
     		{{$post->content}}

     	</div>
     </div>

     @else 
     <div class="panel-body">
    <p><a href="/subscribe">Subscribe now</a> to view this post</p>
</div>
    
 @endif

@endrole
@endforeach


@endsection