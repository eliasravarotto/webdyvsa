<div class="btn-group-vertical" role="group" style="
    /*padding: 10px 8px;*/
    position: fixed;
    z-index: 999;
    right: 10px;
    top:92%;
    background-color: white;
    /*border-radius: 50px;*/
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
">
{{-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-lvdc">
  <i class="fa fa-comments" ></i> Dejanos tu Comentario
</button> --}}
</div>

<!-- Modal -->
<div class="modal fade right" id="modal-lvdc" tabindex="-1" role="dialog" aria-labelledby="modal-lvdcLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: url({{asset('/imagenes/la-voz-del-cliente.jpg')}}); height: 120px;    background-size: cover;
    background-position: center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding: 35px;">
        <form id="form-voz-d-cli" class="form-horizontal" action="/contacto-vdc" method="POST"  autocomplete="off">
            {{ csrf_field() }}
            <input type="hidden" name="vdc_from" value="la_voz_del_cliente">
            <div class="row">
                <div class=" col-md-12">
                    <label class="control-label">Nombre y Apellido</label>
                    <input id="form-voc-nombreyap" type="text" class="form-control" name="vdc_cliente" value="{{old('vdc_cliente')}}" required>
                    <span class="text-danger">
                        {{  $errors->first('vdc_cliente') }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-6 col-xs-12">
                    <label class="control-label">Teléfono</label>
                    <input id="form-voc-telefono" type="text" class="form-control" name="vdc_telefono" value="{{old('vdc_telefono')}}" required>
                    <span class="text-danger">
                        {{  $errors->first('vdc_telefono') }}
                    </span>
                </div>
                <div class=" col-md-6 col-xs-12">
                    <label class="control-label">Email</label>
                    <input id="form-voc-email" type="email" class="form-control" name="vdc_email" value="{{old('vdc_email')}}" required>
                    <span class="text-danger">
                        {{  $errors->first('vdc_email') }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="control-label">Mensaje</label>
                    <textarea id="form-voc-mensaje" name="vdc_mensaje" class="form-control" required>{{old('vdc_mensaje')}}</textarea>
                    <span class="text-danger">
                        {{  $errors->first('vdc_mensaje') }}
                    </span>
                </div>
            </div>
            <div class="row pad-top-20">
                <div class="col-md-6">
                    <div class="g-recaptcha" 
                           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                    </div>
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
                <p class="text-muted">Podés dejarnos un comentario, sugerencia o reclamo.</p>
                <p class="text-muted">Los datos ingresados se mantendrán en total confidencialidad. </p>
            <div class="row pad-top-20 ">
                <div class="col-xs-12 text-right">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
      </div>

    </div>
  </div>
</div>
{{-- Ver script de errores en layout.php --}}