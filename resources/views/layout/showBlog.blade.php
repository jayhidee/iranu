@extends('layout.blogpage')
@section('content')
    <h1>{{$post->title}}</h1>
    <small><i class="far fa-user"></i>written By </small><small><i class="far fa-calendar-alt"></i>{{$post->created_at}}</small><small><i class="far fa-bookmark"></i> {{$post->Category}}</small>
    <div>
        {!!$post->body!!}
    </div>	
@endsection