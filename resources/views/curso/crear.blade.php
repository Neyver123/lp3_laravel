@extends("layouts.master")

@section("principal")
    <h1>FORMULARIO</h1>
    <form method="post" action="{{route('curso.store')}}">
        @csrf
        <input type="text" name="nombre" placeholder="ingrese curso" value="{{old("nombre")}}"><br>{{--old para mantener
        el texto--}}
        <input type="submit" value="Enviar">
    </form>

    @if ($errors->any())
        <div style="color:red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif
@endsection
