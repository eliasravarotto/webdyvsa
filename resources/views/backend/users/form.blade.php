{{ csrf_field() }}
<div class="row">
	<div class="col-12 col-md-3">
		<div id="div_file">
		 	@if($user->avatar != null)
				<div class="image">
			    	<input type="file" name="foto" accept='image/*' onchange='openFile(event)' title=" ">
				</div>
		 		<img id="foto" src="{{$user->avatar}}" alt="Avatar Image">
	 		@else
	 			<div class="image">
					<div class="content">
			          	<div class="icon-upload text-center"><i class="fas fa-cloud-upload-alt"></i></div>
						<div class="text text-center">Click o Arrastrar para cambiar imagen</div>
					</div>
			    	<input type="file" name="foto" accept='image/*' onchange='openFile(event)' title=" ">
				</div>
		 		<img id="foto" src alt="" class="d-none">
		    @endif
		 </div>
	</div>
	<div class="col-12 col-md-9">
		<div class="form-row">
		    <div class="form-group col-12 col-md-6">
		        <label for="name" class="form-control-label">Nombre</label>
		        <input class="form-control" type="text" value="{{ $user->name }}" id="name" name="name">
		    </div>
		    <div class="form-group col-12 col-md-6">
		        <label for="email" class="form-control-label">Email</label>
		        <input class="form-control" type="email" value="{{ $user->email }}" id="email" name="email">
		    </div>
		</div>
		<div class="form-row">
			<div class="form-group col-12 col-md-12">
			    <label for="example-search-input" class="form-control-label">Roles</label>
			    <select class="from-select form-control w-100"  multiple="multiple" name="roles[]" required>
			        @foreach( $roles as $role )
			            <option value="{{$role->id}}" @if($user->roles()->get()->contains($role)) selected @endif>{{$role->role}}</option>
			        @endforeach
			  	</select>
			</div>
		</div>
		<div class="form-row mt-5">
			<div class="form-group col-12 col-md-12 text-right">
				<a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancelar</a>
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
			</div>
		</div>
		
	</div>
</div>