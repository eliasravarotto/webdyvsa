<form action="/contacto" method="POST" role="form">
    {{ csrf_field() }}
    <input type="hidden" name="from" value="{{$data['from'] }}">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="form-group name">
                        <label class="control-label">Nombre y Apellido</label>
                        <input type="text" name="cliente" class="form-control" placeholder="Nombre y Apellido" value="{{old('cliente')}}">
                        <span class="text-danger">
                            {{  $errors->first('cliente') }}
                        </span>                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group email">
                        <label class="control-label">Teléfono</label>
                        <input type="number" name="telefono" class="form-control" placeholder="Teléfono o celular" value="{{old('telefono')}}">
                        <span class="text-danger">
                            {{  $errors->first('telefono') }}
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="control-label">Email</label>
                    <div class="form-group number">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class=" col-md-6">
                    <label class="control-label">Sucursal</label>
                    <select class="form-control" name="sucursal">
                        <option value="Sáenz Peña">Sáenz Peña</option>
                        <option value="Resistencia" >Resistencia</option>
                        <option value="Charata" >Charata</option>
                        <option value="Villa Ángela" >Villa Ángela</option>
                    </select>
                    <span class="text-danger">
                        {{  $errors->first('sucursal') }}
                    </span>
                </div>
                <div class="col-md-12">
                    <div class="form-group message">
                        <textarea class="form-control" name="mensaje" placeholder="Mensaje..">{{old('mensaje')}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    {{-- <div class="g-recaptcha" 
                           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                    </div> --}}
                    <div class="g-recaptcha" 
                           data-sitekey="6Lc4SpEUAAAAADOhUWo2ezTYsnpuirFQ69n_-8M8">
                    </div>
                    {{env('GOOGLE_RECAPTCHA_KEY')}}--{{env('RECEPTOR_EMAILS_CONTACTO')}}
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12 py-3">
                    <div class="send-btn text-center">
                        <button type="submit" class="btn btn-md button-theme">Enviar Mensaje</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>