@extends('backend.layout')

@section('content')
<style type="text/css">
	.col-buttons-inline{
		display: flex;
		justify-content: 
		flex-start; 
		align-self: flex-end;
	}
	.col-buttons-inline > button{
		height: 59%;
		margin-right: 10px;
	}

  .card .item{
    position: relative;
  }
  .card .item a{
    position: absolute;
    right: 0;
  }

</style>
<div class="card" id="form">
    <div class="card-header">
        <strong class="card-title">Características {{ $modelo->nombre }}</strong>
    </div>
    <div class="card-body">
      <div class="container">
        <div class="owl-carousel owl-theme">
          @foreach($modelo->caracteristicas as $caracteristica)
                <div class="card item">
                  <img src="{{$caracteristica->img}}" class="card-img-top">
                  <div class="card-body">
                    <p class="card-text">
                      {{ $caracteristica->titulo }}
                    </p>
                  </div>
                  <a href="{{ route('borrar_caracterisica_modelo', $caracteristica->id) }}" style="position: absolute;" onclick="return confirm('Desea eliminar el item?');" class="btn btn-danger delete-user">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>
          @endforeach
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-right">
          <a style="color: white" v-on:click="addField()" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
      </div>
      <br>
    	<form action="/admin/modelos/{{ $modelo->id }}/edit/caracteristicas" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			   {{ csrf_field() }}
          <div id="images" style="padding-top: 10px; padding-bottom: 10px">
            <div class="container" id="field_0">
              <a href="#" class="btn btn-danger pull-right" onclick="removeField(0)"><i class="fa fa-trash" aria-hidden="true"></i></a>
              
              <div class="row">
                <div class="col-7" style="margin-bottom: 10px;">
                  <div class="input-group">
                    <input name="titulo[]" placeholder="Título" type="text" class="form-control" style="height: 39px;">
                  </div>
                </div>
                <div class="col-5">
                  <div class="input-group">
                    <input name="img[]" type="file" class="form-control" style="height: 39px;">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <label>Descripción</label>
                  <div class="input-group">
                    <textarea class="form-control" name="desc[]"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
    		
          <input name="_method" type="hidden" value="PUT">
          <div class="row form-group container">
              <div class="col-9">
                  <a class="btn btn-dark" href="/admin/modelos" style="color: white">
                   Cancelar
                  </a>
                  <button type="submit" class="btn btn-info">
                    Guardar
                  </button>
              </div>
          </div>
      	</form>
    </div>
</div>
@stop

@section('page-script')
    <script type="text/javascript">
        function removeField(id){
            $('#field_'+id).remove();
                this.index--;
        }
        new Vue({
          el: '#form',
          data: {
            index: 1
          },
          mounted(){
            //$(document).ready(function() {
                    $('.owl-carousel').owlCarousel({
                        stagePadding: 50,
                        loop:false,
                        margin:10,
                        nav:false,
                        autoPlay: 3000, //Set AutoPlay to 3 seconds
                        items : 3,
                        itemsDesktop : [1199,3],
                        itemsDesktopSmall : [979,2],
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:2
                            },
                            1000:{
                                items:4
                            }
                        }
                    })
                //})
          },
          methods:{
            addField(){
                var field = `
                    <div class="container" id="field_${this.index}">
                      <hr style="border-top:3px solid #ffa0c3; margin-bottom:25px">
                      <a href="#" class="btn btn-danger pull-right" onclick="removeField(${this.index})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      
                      <div class="row">
                        <div class="col-7" style="margin-bottom: 10px;">
                          <div class="input-group">
                            <input name="titulo[]" placeholder="Título" type="text" class="form-control" style="height: 39px;">
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="input-group">
                            <input name="img[]" type="file" class="form-control" style="height: 39px;">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <label>Descripción</label>
                          <div class="input-group">
                            <textarea class="form-control" name="desc[]"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>`
                ;
                $('#images').append(field);
                this.index++;
            }            
          }
        })
    </script>
@stop