display:{{ $posts}}

@foreach ($posts as $post)
    <h2> display: {{ $post->author->firstname }}</h2>

     <!-- <a href="{{route('home1')}}">Переходим</a> -->
   
@endforeach

