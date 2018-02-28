<div class="form-group">
	{{ form::label('name', 'nombre de la categoria')}}
	{{form::text('name', null, ['class'=>'form-control', 'id' => 'name'])}}
</div>

<div class="form-group">
	{{ form::label('name', 'URL amigable')}}
	{{form::text('slug', null, ['class'=>'form-control', 'id' => 'slug'])}}
</div>

<div class="form-group">
	{{ form::label('body', 'Descripcion de la categoria')}}
	{{form::textarea('body', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{ form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>

<script>
	
	$(document).ready(function(){

		$('#name, #slug').stringToSlug({
			callback:function(text) {
				$("#slug").val(text);
			}
		});
	});

</script>

@endsection