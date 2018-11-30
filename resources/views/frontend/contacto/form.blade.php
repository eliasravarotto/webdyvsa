<form class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
			  			{{ csrf_field() }}
			  			<div class="row">
				  			<div class=" col-md-6">
							    <label class="control-label">Nombre y Apellido</label>
							    <input type="text" class="form-control" name="cliente">
						  	</div>
						  	<div class=" col-md-6">
							    <label class="control-label">Teléfono</label>
							    <input type="text" class="form-control" name="telefono">
						  	</div>
			  			</div>
			  			<div class="row">
			  				<div class=" col-md-12">
			  					<label class="control-label">Email</label>
							    <input type="email" class="form-control" name="email">
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<label class="control-label">Mensaje</label>
							    <textarea name="mensaje" class="form-control"></textarea>
			  				</div>
			  			</div>
			  			<div class="row pad-top-20">
			  				<div class="col-md-12">
			  					<button type="submit" class="btn btn-default">ENVIAR</button>
			  				</div>
			  			</div>
			  		</form>