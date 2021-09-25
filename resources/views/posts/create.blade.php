@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add new post</h1>
    <form method="post" action="/p/store" enctype="multipart/form-data">
        @csrf
    <div class="col">
        <div class="row-3"><strong>caption</strong> : 
                            <input type="text" name="caption" /></div>
        <div class="row-4 pt-3"><input type="file" name="image"/></div>
        <div class=" row-4 pt-4 "><input class ="btn btn-primary"type ="submit" value="Add The new post"/> </div>
    </div>

</form>

</div>
@endsection
