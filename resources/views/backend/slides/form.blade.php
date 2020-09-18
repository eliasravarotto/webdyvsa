<div class="row"> 
	<div class="col-md-6 col-sm-12">
		<div class="form-group requerido">
			<input placeholder="Nombre del slider" name="nombre" type="text" class="form-control" value="{{ $slide->nombre or old('nombre') }}">
		</div>
	</div>
	<div class="col-md-6 col-sm-12">
		<a class="btn btn-default" href="#" onclick="addItem(event)">ADD Item</a>
	</div>
</div>

<div id="slides">
</div>

@if($slide->id)
<div class="">
	@foreach($slide->items as $item)
	<div class="card px-2 py-2 mb-1" id="slide-0">
		<div class="card-body py-1">
			<div class="row">
				<div class="col-md-1 col-sm-12 text-right ">
					<a href="/admin_slides_eliminar_item/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Desea eliminar el item?');"><i class="fa fa-trash"></i></a>
				</div>
				<div class="col-md-1 col-sm-12 px-1">
					<div class="requerido">
						<input type="number" class="form-control" placeholder="Orden" value="{{$item->orden}}" disabled>
					</div>
				</div>
				<div class="col-md-2 col-sm-12 px-1">
					<select class="form-control" disabled>
						<option @if($item->size=='SM') selected @endif>SM (Mobile)</option>
						<option @if($item->size=='MD') selected @endif>MD (Web)</option>
					</select>
				</div>
				<div class="col-md-4 col-sm-12 px-1">
					<div class="requerido">
						<input type="text" class="form-control" value="{{$item->url}}" placeholder="Ir a" disabled>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 px-1">
					<img src="{{$item->image->public_path}}" style="height: 50px;">
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endif


{{-- 	<div class="card px-2 py-2" id="slide-0">
		<div class="row">
			<div class="col-md-1 col-sm-6 text-right ">
				<a href="#" class="btn btn-danger" onclick="removeItem(event, 0)"><i class="fa fa-trash"></i></a>
			</div>
			<div class="col-md-1 col-sm-12 px-1">
				<div class="requerido">
					<input name="orden[]" type="number" class="form-control" placeholder="Orden" value="{{ $slide->orden or old('orden') }}">
				</div>
			</div>
			<div class="col-md-2 col-sm-2 px-1">
				<select class="form-control" name="size[]">
					<option value="SM">SM (Mobile)</option>
					<option value="MD">MD (Web)</option>
				</select>
			</div>
			<div class="col-md-4 col-sm-12 px-1">
				<div class="requerido">
					<input name="url[]" type="text" class="form-control" value="" placeholder="Ir a">
				</div>
			</div>
			<div class="col-md-4 col-sm-12 px-1">
				<div class="mt-1">
				  <div class="custom-file">
				    <input type="file" class="" id="image" name="image[]">
				  </div>
				</div>
			</div>
		</div>
	</div> --}}




@section('page-script')
<script type="text/javascript">
	var ix = 1;
	function addItem(e){
		e.preventDefault();
		ix++;
		var card = `<div class="card px-2 py-2 mt-2" id="slide-${ix}">
		<div class="card-body py-1">
		<div class="row">
			<div class="col-md-1 col-sm-16 text-right ">
				<a href="#" class="btn btn-danger" onclick="removeItem(event, ${ix})"><i class="fa fa-trash"></i></a>
			</div>
			<div class="col-md-1 col-sm-12 px-1">
				<div class="requerido">
					<input name="orden[]" type="number" class="form-control" placeholder="Orden" value="" required>
				</div>
			</div>
			<div class="col-md-2 col-sm-12 px-1">
				<select class="form-control" name="size[]">
					<option value="SM">SM (Mobile)</option>
					<option value="MD">MD (Web)</option>
				</select>
			</div>
			<div class="col-md-4 col-sm-12 px-1">
				<div class="requerido">
					<input name="url[]" type="text" class="form-control" value="" placeholder="Ir a" required>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 px-1">
				<div class="mt-1">
				  <div class="custom-file">
				    <input type="file" class="" id="image" name="image[]" required>
				  </div>
				</div>
			</div>
		</div>
		</div>
	</div>` 
		;
		$('#slides').prepend(card);
	}

	function removeItem(e, i){
		e.preventDefault();
		$('#slide-'+i).remove();
	}
</script>
@stop

