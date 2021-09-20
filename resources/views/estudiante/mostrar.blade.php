<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($titulo) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table w-full">
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>apellidos</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>

                        @foreach ($estudiantes as $estu)
                            @if($estu->id%2!=0)
                                <tr style="background-color: darkseagreen">
                            @else
                                <tr>
                                    @endif
                                    <td>{{$estu->id}}</td>
                                    <td>{{$estu->nombres}}</td>
                                    <td>{{$estu->apellidos}}</td>
                                    <td>
                                        <form method='get' action='estudiante/{{$estu->id}}/edit'>
                                            <input type='submit' value='Actualizar'>
                                            @csrf
                                            @method("GET")
                                        </form>
                                    <td>
                                        <form method='post' action='estudiante/{{$estu->id}}'>
                                            <input type='submit' value='Elimnar'>
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                    </table>
                    <a href="{{Route("estudiante.create")}}">Agregar estudiante</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{--
@extends("layouts.master")

@section("principal")
    <h1>{{$titulo}}</h1>
    <table border="2">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
        </tr>

        @foreach ($estudiantes as $estu)
            @if($estu->id%2!=0)
                <tr style="background-color: darkseagreen">
            @else
                <tr>
                    @endif
                    <td>{{$estu->id}}</td>
                    <td>{{$estu->nombres}}</td>
                    <td>{{$estu->apellidos}}</td>
                    <td>
                        <form method='get' action='estudiante/{{$estu->id}}/edit'>
                            <input type='submit' value='Actualizar'>
                            @csrf
                            @method("GET")
                        </form>
                    <td>
                        <form method='post' action='estudiante/{{$estu->id}}'>
                            <input type='submit' value='Elimnar'>
                            @csrf
                            @method("DELETE")
                        </form>
                    </td>
                </tr>
                @endforeach
    </table>
    <a href="{{Route("estudiante.create")}}">Agregar estudiante</a>
@endsection
--}}
