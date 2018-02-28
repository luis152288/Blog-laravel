{{ Form::hidden('user_id', auth()->user()->id) }}
 
 <div class="form-group">
 	{{ Form::label('category_id', 'categorias') }}
 	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
 </div>

<div class="form-group">
	{{ form::label('name', 'Titulo del post')}}
	{{form::text('name', null, ['class'=>'form-control', 'id' => 'name'])}}
</div>

<div class="form-group">
	{{ form::label('file', 'Imagen')}}
	{{form::file('file')}}
</div>

<div class="form-group">
 	{{ Form::label('status', 'Estado') }}
 	<label>
 		{{ Form::radio('status', 'PUBLISHED')}} PUBLICADO
 	</label>
 	<label>
 		{{ Form::radio('status', 'DRAFT')}} BORRADOR
 	</label>
 </div>

<div class="form-group">
	{{ Form::label('tags', 'Etiquetas') }}
	<div>
	@foreach($tags as $tag)
		<label>
			{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
		</label>
	@endforeach
	</div>
</div>

<div class="form-group">
	{{ form::label('name', 'URL amigable')}}
	{{form::text('slug', null, ['class'=>'form-control', 'id' => 'slug'])}}
</div>

<div class="form-group">
	{{ form::label('excerpt', 'Descripcion corta')}}
	{{form::textarea('excerpt', null, ['class'=>'form-control', 'rows' => '2'])}}
</div>
<div class="form-group">
	{{ form::label('body', 'Descripcion')}}
	{{form::textarea('body', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{ form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js')}}"></script>
<script>
	
	$(document).ready(function(){

		$('#name, #slug').stringToSlug({
			callback:function(text) {
				$("#slug").val(text);
			}
		});
	});

	CKEDITOR.height=400;
	CKEDITOR.width='auto';

	CKEDITOR.replace('body');

</script>

@endsection