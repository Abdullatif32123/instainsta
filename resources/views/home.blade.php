@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5 ">
        <img src="" style="max-height:120px" class="rounded-circle"/>
    </div>
    <div class="col-6 pt-5">
        <div><h1>{{$user->name}}</h1>   <div class="flex" ><a href="/p/create">add new post</a></div></div>
        <div class = "d-flex">
            <div style="padding-right:10px" ><strong>{{$user->posts->count()}}</strong>posts</div>
            <div style="padding-right:10px"><strong>111</strong>followers</div>
            <div style="padding-right:10px"><strong>110</strong>following</div>
        </div>
        <div class="pt-4">
            {{$user->profile->title}}
        </div>
        <div>{{$user->profile->discriping}}
        </div>
        <div> <a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
     
    </div>
</div>
<div class="row pt-2">
       @foreach($user->posts as $post)
       <div class="col-4 pt-5" width="400" height="400">
           <a href="/p/{{$post->id}}">
       <img height="300px" width="300px" src="/storage/{{$post->image}}"/>
           </a>
       </div>
       @endforeach
</div>
</div>
@endsection
