@extends('layouts.app')
@section('content')
        <h1>Crear nuevo item </h1>
        <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
            @include('admin.items.form')
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
@endsection