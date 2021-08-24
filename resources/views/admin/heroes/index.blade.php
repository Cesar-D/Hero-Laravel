@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>Listado de heroes</h1>
    </div>
    <div class="row">
        <a class="btn btn-primary mb-2 mt-2" href="{{route('heroes.create')}}"><i class="bi bi-person-plus-fill"> </i>Agregar heroe</a>
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
                    <th scope="col">Acciones</th>
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
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-warning" href="{{route('heroes.edit',['id'=>$item->id])}}"><i class="bi bi-pencil-square"></i></a>
                                </div>
                                <div class="col" style="left: -50px;">
                                    <form action="{{route('heroes.destroy',['id'=>$item->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>                          
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection