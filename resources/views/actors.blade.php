
<form action="{{ url('/actores/buscar') }}">
    <input type="text" name="q">
    <button>Buscar</button>
</form>

@foreach ($actors as $actor)
    <p>
        <a href="{{ url('/actores', $actor->id) }}">
            {{ $actor->getNombreCompleto() }}
        </a>
    </p>
@endforeach

{{ $actors->links() }}