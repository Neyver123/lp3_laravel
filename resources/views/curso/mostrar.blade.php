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
                            <th>nombre del curso</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>

                        @foreach ($cursos as $cur)
                            <tr>
                                <td>{{$cur->id}}</td>
                                <td>{{$cur->nombre}}</td>
                                <td>
                                    <form method='get' action='curso/{{$cur->id}}/edit'>
                                        <input type='submit' value='Actualizar'>
                                        @csrf
                                        @method("GET")
                                    </form>
                                <td>
                                    <form method='post' action='curso/{{$cur->id}}'>
                                        <input type='submit' value='Elimnar'>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{Route("curso.create")}}">Agregar curso</a>
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
            <th>nombre del curso</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
        </tr>

        @foreach ($cursos as $cur)
            <tr>
                <td>{{$cur->id}}</td>
                <td>{{$cur->nombre}}</td>
                <td>
                    <form method='get' action='curso/{{$cur->id}}/edit'>
                        <input type='submit' value='Actualizar'>
                        @csrf
                        @method("GET")
                    </form>
                <td>
                    <form method='post' action='curso/{{$cur->id}}'>
                        <input type='submit' value='Elimnar'>
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{Route("curso.create")}}">Agregar curso</a>
@endsection

@section("js")
    <script>
        alert("Hola a todos");
    </script>
@endsection
--}}
