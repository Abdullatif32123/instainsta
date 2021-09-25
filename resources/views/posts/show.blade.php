@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-8"><img height="350px" width="350px"src ="/storage/{{$post->image}}"/></div>
    <div class="col-4">
    <div>
    <div><strong>Username : </strong></div>    
    {{$post->user->username}}
    </div>
    <div> 
         <div><strong>Caption : </strong></div>    
    {{$post->caption}}
    </div>
</div>
</div>

</div>
@endsection