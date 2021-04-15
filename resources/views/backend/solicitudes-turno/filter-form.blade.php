<form class="form-inline d-flex justify-content-end mb-3" autocomplete="off" action="{{ route('solicitudes_index') }}">
	<div class="form-group ml-1">
	  <label for="cliente" class="sr-only">Cliente</label>
	  <input type="text" name="cliente" class="form-control" id="cliente" placeholder="Cliente" value="{{ Request::get('cliente') }}">
	</div>
	<div class="form-group ml-1">
	  <label for="email" class="sr-only">Email</label>
	  <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ Request::get('email') }}">
	</div>
	<div class="form-group ml-1">
	  <label for="telefono" class="sr-only">Teléfono</label>
	  <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Teléfono" value="{{ Request::get('telefono') }}">
	</div>
	<div class="form-group ml-1">
	  <select name="from" class="form-control">
	    <option value=""></option>
	    <option value="app" @if(Request::get('from') == 'app') selected @endif>app</option>
	    <option value="web-site" @if(Request::get('from') == 'web-site') selected @endif>web-site</option>
	  </select>
	</div>
	<div class="form-group ml-1">
	  <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filtrar</button>
	  <a href="{{ route('solicitudes_index') }}" class="btn btn-default ml-2"><i class="fas fa-trash"></i> Limpiar</a>
	</div>
</form>