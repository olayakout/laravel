 <form method="POST" action="/posts/update/{{$post->id}}">
     {{ csrf_field() }}
  <div class="form-group">
    <label for="title">title:</label>
    <input type="text" class="form-control" id="title" name="title" value={{$post->title}}>
  </div>
  <div class="form-group">
    <label for="body">body:</label>
    <input type="text" class="form-control" id="body" name="body" value={{$post->body}}>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form> 

<div>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</div>