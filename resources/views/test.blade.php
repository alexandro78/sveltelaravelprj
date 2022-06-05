display:{{ $posts}}

@foreach ($posts as $post)
    <h2> display: {{ $post->author->firstname }}</h2>

     
   
@endforeach



