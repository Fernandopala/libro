@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Libro</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Libro.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del libro">
									</div>
								</div>
								
							</div>
                            

							<div class="form-group">
								<textarea name="autor" class="form-control input-sm" placeholder="Autor"></textarea>
                            </div>
                            
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('Libro.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection




{{-- @extends('layouts.layout')
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
                                                        href="{{ action('LibroController@edit', $libros->id) }}"><span
                                                            class="glyphicon glyphicon-pencil"></span></a></td>
                                                <td>
                                                    <form action="{{ action('LibroController@destroy', $libros->id) }}"
                                                        method="post">
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

    @endsection --}}
