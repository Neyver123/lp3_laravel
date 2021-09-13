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
