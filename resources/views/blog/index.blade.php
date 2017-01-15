@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Blogging CMS using Laravel</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Tony the tiger gets hit by a train</h1>
            <p>oh no that's too bad</p>
            <p><a href="{{ route('blog.post', ['id' => 1]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Count chocula is actually a lunatic</h1>
            <p>Don't eat this man's cereal</p>
            <p><a href="{{ route('blog.post', ['id' => 2]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Fred flintstone's license gets revoked</h1>
            <p>...for hitting too many dinosaurs</p>
            <p><a href="{{ route('blog.post', ['id' => 3]) }}">Read more...</a></p>
        </div>
    </div>
@endsection