@extends("layouts.master")

@section("principal")
    <h1>FORMULARIO</h1>
    <form method="post" action="{{route('estudiante.store')}}">
        @csrf
        <input type="text" @error("nombre") style="background: indianred" @enderror name="nombre"
               placeholder="ingrese su nombre" value="{{old("nombre")}}"><br>
        <input type="text" @error("apellido") style="border:2px red solid" @enderror name="apellido"
               placeholder="ingrese su apellido" value="{{old("apellido")}}"><br>
        <input type="submit" value="Guardar">
    </form>

    @if ($errors->any())
        <div style="color:red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif
@endsection
