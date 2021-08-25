@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>Administrador de hero</h1>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Entidad</th>
                    <th scope="col">Cantidad de elementos</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($report as $item)
                   <tr>
                       <td>{{$item["name"]}}</td>
                       <td>{{$item["counter"]}}</td>
                       <td>
                            <a class="btn btn-outline-primary" style="width: 150px" href="{{route($item["route"])}}"><i class="bi bi-folder-symlink-fill"> </i>Ir a {{$item["name"]}}</a>
                        </div>
                           
                        </td>
                   </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection