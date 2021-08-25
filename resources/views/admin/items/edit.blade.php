@extends('layouts.app')
@section('content')
        <h1>Editar item - {{$item->name}}</h1>
        <form action="{{route('item.update',['id'=>$item->id])}}" method="post">
            @method('PUT')
            @include('admin.items.form')
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
@endsection