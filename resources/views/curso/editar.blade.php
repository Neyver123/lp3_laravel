<h1>ACTUALIZAR</h1>
<form method="post" action="/curso/{{$curso->id}}">
    @csrf
    <input type="text" name="nombre" value="{{$curso->nombre}}"><br>
    <input type="submit" value="Actualizar">
    @method("PUT")
</form>
<?php

