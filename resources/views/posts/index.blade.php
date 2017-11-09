<ul>
<a href="/posts/create"> Create new post </a>
@if(!$posts->isEmpty())

	@foreach($posts as $post)
		<li>{{$post->body}}</li>
		<a href="/posts/{{$post->id}}/edit"> Edit </a>
		<a href="/posts/{{$post->id}}/delete"> Delete </a>
		<a href="/posts/{{$post->id}}"> Show </a>

	@endforeach

@else
	<h1>There is no posts</h1>
@endif	
</ul>	