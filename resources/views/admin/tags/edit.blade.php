@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<div class="panel panel-default">
				<div class="panel-heading">
					Editar Etiquetas
				</div>
	
				<div class="panel-body">
					
					{!! Form::model($tag, ['route' => ['tags.update', $tag->id],
					'method' => 'PUT']) !!}

						@include('admin.tags.partial.form')

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>

@endsection