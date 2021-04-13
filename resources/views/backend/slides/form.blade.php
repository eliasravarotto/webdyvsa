<div class="row"> 
	<div class="col-md-6 col-sm-12">
		<div class="form-group requerido">
			<input placeholder="Nombre del slider" name="nombre" type="text" class="form-control" value="{{ $slide->nombre or old('nombre') }}">
		</div>
	</div>
	<div class="col-md-6 col-sm-12">
		<a class="btn btn-secondary" href="#" onclick="addItem(event)"><i class="fas fa-plus"></i> ADD Item</a>
	</div>
</div>

<div>
	<ul id="slides" class="list-group list-group-flush">
	</ul>
</div>

@if($slide->id)
<div class="">
	<div class="card px-2 py-2 mb-1" id="slide-0">
		<div class="card-body py-1">

			<div>
				<p class="h5"><i class="fas fa-mobile-alt"></i> Mobile</p>
				<ul class="list-group list-group-flush">
				@foreach($slide->items as $item)
				@if($item->size=='SM')
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-1 col-sm-12 text-right ">
								<a href="/admin_slides_eliminar_item/{{$item->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Desea eliminar el item?');"><i class="fa fa-trash"></i></a>
							</div>
							<div class="col-md-1 col-sm-12 px-1">
								<div class="requerido">
									<input type="number" class="form-control form-control-sm" placeholder="Orden" value="{{$item->orden}}" disabled>
								</div>
							</div>
							<div class="col-md-2 col-sm-12 px-1">
								<select class="form-control form-control-sm" disabled>
									<option @if($item->size=='SM') selected @endif>SM (Mobile)</option>
									<option @if($item->size=='MD') selected @endif>MD (Web)</option>
								</select>
							</div>
							<div class="col-md-4 col-sm-12 px-1">
								<div class="requerido">
									<input type="text" class="form-control form-control-sm" value="{{$item->url}}" placeholder="Ir a" disabled>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 px-1">
								<img src="{{$item->image->public_path}}" style="height: 50px;">
							</div>
						</div>
					</li>
				@endif
				@endforeach
				</ul>
			</div>

			<div class="mt-3">
				<p class="h5"><i class="fas fa-desktop"></i> Web</p>
				<ul class="list-group list-group-flush">
				@foreach($slide->items as $item)
				@if($item->size=='MD')
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-1 col-sm-12 text-right ">
								<a href="/admin_slides_eliminar_item/{{$item->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Desea eliminar el item?');"><i class="fa fa-trash"></i></a>
							</div>
							<div class="col-md-1 col-sm-12 px-1">
								<div class="requerido">
									<input type="number" class="form-control form-control-sm" placeholder="Orden" value="{{$item->orden}}" disabled>
								</div>
							</div>
							<div class="col-md-2 col-sm-12 px-1">
								<select class="form-control form-control-sm" disabled>
									<option @if($item->size=='SM') selected @endif>SM (Mobile)</option>
									<option @if($item->size=='MD') selected @endif>MD (Web)</option>
								</select>
							</div>
							<div class="col-md-4 col-sm-12 px-1">
								<div class="requerido">
									<input type="text" class="form-control form-control-sm" value="{{$item->url}}" placeholder="Ir a" disabled>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 px-1">
								<img src="{{$item->image->public_path}}" style="height: 50px;">
							</div>
						</div>
					</li>
				@endif
				@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endif


@section('page-script')
<script type="text/javascript">
	var ix = 1;
	function addItem(e){
		e.preventDefault();
		ix++;
		var card = `<li class="list-group-item" id="slide-${ix}">
				<div class="row">
					<div class="col-md-1 col-sm-16 text-right ">
						<a href="#" class="btn btn-danger btn-sm" onclick="removeItem(event, ${ix})"><i class="fa fa-trash"></i></a>
					</div>
					<div class="col-md-1 col-sm-12 px-1">
						<div class="requerido">
							<input name="orden[]" type="number" class="form-control form-control-sm" placeholder="Orden" value="" required>
						</div>
					</div>
					<div class="col-md-2 col-sm-12 px-1">
						<select class="form-control form-control-sm" name="size[]">
							<option value="SM">SM (Mobile)</option>
							<option value="MD">MD (Web)</option>
						</select>
					</div>
					<div class="col-md-4 col-sm-12 px-1">
						<div class="requerido">
							<input name="url[]" type="text" class="form-control form-control-sm" value="" placeholder="Ir a" required>
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
		</li>` 
		;
		$('#slides').prepend(card);
	}

	function removeItem(e, i){
		e.preventDefault();
		$('#slide-'+i).remove();
	}
</script>
@stop

