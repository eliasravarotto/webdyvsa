<form action="{{route('contact_tpa')}}" method="POST" role="form" class="mt-4">
    {{ csrf_field() }}
    <input type="hidden" name="from" value="{{$data['from'] }}">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="form-group name">
                        <label class="control-label">Nombre y Apellido*</label>
                        <input id="input-cliente" type="text" name="cliente" class="form-control" placeholder="Nombre y Apellido" value="{{old('cliente')}}">
                        <span class="text-danger">
                            {{  $errors->first('cliente') }}
                        </span>                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group email">
                        <label class="control-label">Teléfono o Whatsapp*</label>
                        <input type="number" name="telefono" class="form-control" placeholder="Teléfono o whatsapp" value="{{old('telefono')}}">
                        <span class="text-danger">
                            {{  $errors->first('telefono') }}
                        </span>
                    </div>
                </div>
                <div class=" col-md-12">
                    <label class="control-label">Localidad*</label>
                    <input type="text" name="localidad" class="form-control mb-3" placeholder="Ingrese su localidad" value="{{old('localidad')}}">
                </div>
                <br>
                <div class="col-md-12">
                    <div class="form-group message">
                        <textarea class="form-control" name="mensaje" placeholder="Mensaje (opcional)">{{old('mensaje')}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="g-recaptcha" 
                           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                    </div>
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