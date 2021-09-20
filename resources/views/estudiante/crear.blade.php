<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            REGISTRAR ESTUDIANTES
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{--@extends("layouts.master")

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
@endsection--}}
