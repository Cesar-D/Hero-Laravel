@extends('layouts.app')
@section('content')
        <h1>Editar heroe </h1>
        <form action="{{route('admin.heroes.update',['id'=>$heroes->id])}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{$heroes->name}}" placeholder="Ingrese un nombre" required>
            </div>
            <div class="form-group">
                <label for="hp">Hp</label>
                <input type="number" class="form-control" id="hp" name="hp"  value="{{$heroes->hp}}" placeholder="Ingrese los puntos de vida" required>
            </div>
            <div class="form-group">
                <label for="atq">Ataque</label>
                <input type="number" class="form-control" id="atq" name="atq"  value="{{$heroes->atq}}" placeholder="Ingrese los puntos de ataque" required>
            </div>
            <div class="form-group">
                <label for="def">Defensa</label>
                <input type="number" class="form-control" id="def" name="def"  value="{{$heroes->def}}" placeholder="Ingrese los puntos de defensa" required>
            </div>
            <div class="form-group">
                <label for="luck">Suerte</label>
                <input type="number" class="form-control" id="luck" name="luck"  value="{{$heroes->luck}}" placeholder="Ingrese los puntos de suerte" required>
            </div>
            <div class="form-group">
                <label for="coins">Monedas</label>
                <input type="number" class="form-control" id="coins" name="coins"  value="{{$heroes->coins}}" placeholder="Ingrese la cantidad de monedas" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
@endsection