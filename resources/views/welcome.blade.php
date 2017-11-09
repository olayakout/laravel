<!DOCTYPE html>
<html>
<head>
    <title> My First One</title>
</head>
<body>

<h1>{{$name}}</h1>
<h2> {{$age}}</h2> 
<ul>
    @foreach($skills as $skill)

    <li> 
        <a href="skills/{{$skill->id}}">
                {{$skill->name}}
        </a>
    </li>
    @endforeach
</ul>

</body>
</html>