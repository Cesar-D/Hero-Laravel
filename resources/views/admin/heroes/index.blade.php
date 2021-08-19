@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>Listado de heroes</h1>
    </div>
    <div class="row">
        <a class="btn btn-primary mb-2 mt-2" href="{{route('admin.heroes.create')}}"><i class="bi bi-person-plus-fill"> </i>Agregar heroe</a>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Hp</th>
                    <th scope="col">Ataque</th>
                    <th scope="col">Defensa</th>
                    <th scope="col">Suerte</th>
                    <th scope="col">Monedas</th>
                    <th scope="col">Experiencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($heros as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->hp}}</td>
                        <td>{{$item->atq}}</td>
                        <td>{{$item->def}}</td>
                        <td>{{$item->luck}}</td>
                        <td>{{$item->coins}}</td>
                        <td>{{$item->xp}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection