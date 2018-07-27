@extends('layout.blogpage')
	@section('content')		
			<h1>Post</h1>

			@if(count($posts) > 0)
				@foreach($posts as $post)
						<div class="wells">								
							<h3>{{$post->title}}</h3>						
							<small><i class="far fa-user"></i>written By </small><small><i class="far fa-calendar-alt"></i>{{$post->created_at}}</small><small><i class="far fa-bookmark"></i> {{$post->Category}}</small>
							<p class="sum">
								{!!substr($post->body, 0, 400)!!}
								</br></br>
								<button class="btn btn-default"><a href="/posts/{{$post->id}}">&nbsp;<i class="fas fa-book-open"></i>&nbsp; Read More</a></button>
							</p>									
						</div>
				@endforeach
				{{$posts->links()}}
			@else
				<p>No Posts found</p>
			@endif		
	@endsection