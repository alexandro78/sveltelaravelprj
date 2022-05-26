display:{{ $posts}}

@foreach ($posts as $post)
    <h2> display: {{ $post->id }}</h2>
   
@endforeach



@foreach ($posts as $post)
    
   <h2> display2: {{ $author->firstname }}</h2>
   <h2> display2: {{ $author->lastname }}</h2>
   <h2> display2: {{ $author->email }}</h2>
   <h2> display2: {{ $author->description }}</h2> 
@endforeach