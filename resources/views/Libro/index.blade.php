@extends('layouts.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left">
                            <h3>Lista Libros</h3>
                        </div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('Libro.create') }}" class="btn btn-info">Añadir Libro</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Autor</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>

                                <tbody>
                                    @if ($libros->count())
                                        @foreach ($libros as $libro)
                                            <tr>
                                                <td>{{ $libro->nombre }}</td>
                                                <td>{{ $libro->autor }}</td>
                                                <td><a class="btn btn-primary btn-xs"
                                                        href="{{ route('Libro.edit', $libro->id) }}"><span
                                                            class="glyphicon glyphicon-pencil"></span></a></td>
                                                <td>
                                                    <form action="{{ route('Libro.destroy', $libro->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        <input name="_method" type="hidden" value="DELETE">

                                                        <button class="btn btn-danger btn-xs" type="submit"><span
                                                                class="glyphicon glyphicon-trash"></span></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8">No hay registro !!</td>
                                        </tr>
                                    @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                    {{ $libros->links() }}
                </div>
            </div>
        </section>

    @endsection
