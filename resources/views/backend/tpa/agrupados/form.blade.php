<div>
	<div class="row"> 
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group requerido">
						<label class="control-label mb-1">Grupo</label>
						<input name="grupo" type="text" class="form-control" value="{{ $agrupado->grupo or old('grupo') }}">
						<span class="text-danger">{{$errors->first('grupo')}}</span>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group requerido">
						<label class="control-label mb-1">Orden</label>
						<input name="orden" type="text" class="form-control" value="{{ $agrupado->orden or old('orden')}}">
						<span class="text-danger">{{$errors->first('orden')}}</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Unidad</label>
						<select class="form-control" name="unidad">
							<option value="Etios" @if($agrupado->unidad == 'Etios') selected @endif>Etios</option>
							<option value="Yaris" @if($agrupado->unidad == 'Yaris') selected @endif>Yaris</option>
							<option value="Hilux" @if($agrupado->unidad == 'Hilux') selected @endif>Hilux</option>
						</select>
						<span class="text-danger">{{$errors->first('unidad')}}</span>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label mb-1">Modalidad</label>
						<select class="form-control" name="modalidad">
							<option value="70/30" @if($agrupado->modalidad == '70/30') selected @endif>70/30</option>
							<option value="100%" @if($agrupado->modalidad == '100%') selected @endif>100%</option>
						</select>
						<span class="text-danger">{{$errors->first('modalidad')}}</span>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label mb-1">Avance Cuotas</label>
						<input name="avance_cuotas" type="text" class="form-control" value="{{ $agrupado->avance_cuotas or old('avance_cuotas') }}">
						<span class="text-danger">{{$errors->first('avance_cuotas')}}</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Precio Venta</label>
						<input name="precio_venta" type="number" class="form-control" value="{{ $agrupado->precio_venta or old('precio_venta') }}" placeholder="ej: 380000">
						<span class="text-danger">{{$errors->first('precio_venta')}}</span>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label mb-1">Cuota Pura</label>
						<input name="cuota_pura" type="number" class="form-control" value="{{ $agrupado->cuota_pura or old('cuota_pura') }}" placeholder="ej: 380000">
						<span class="text-danger">{{$errors->first('cuota_pura')}}</span>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>