@foreach ($actors as $actor)
    <p>{{ $actor->getNombreCompleto() }}</p>
@endforeach
