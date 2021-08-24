@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>Listado de items</h1>
    </div>
    <div class="row">
        <a class="btn btn-primary mb-2 mt-2" href="{{route('item.create')}}"><i class="bi bi-person-plus-fill"> </i>Agregar item</a>
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
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->hp}}</td>
                        <td>{{$item->atq}}</td>
                        <td>{{$item->def}}</td>
                        <td>{{$item->luck}}</td>
                        <td>{{$item->cost}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-warning" href="{{route('item.edit',['id'=>$item->id])}}"><i class="bi bi-pencil-square"></i></a>
                                </div>
                                <div class="col" style="left: -50px;">
                                    <form action="{{route('item.destroy',['id'=>$item->id])}}" method="POST">
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