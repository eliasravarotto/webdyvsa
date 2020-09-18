@extends('backend.layout')

@section('content')

<style type="text/css">
#loader{
    display: flex;
    justify-content: center;
    align-items: center;
}
.loadme-mask {
    display: flex;
    justify-content: center;
    align-items: center;
    /*background-color: #DDD;*/
    width: 100px;
    height: 100px;
    position: relative;
    z-index: 99;
    border-radius: 10px;
    opacity: 0.5;
}
.loadme-circular,
.loadme-circular:after {
  border-radius: 50%;
  width: 10em;
  height: 10em;
}
.loadme-circular {
  width: 40px;
  height: 40px;
  position: relative;
  /*margin: -20px;*/
  z-index: 100;
  font-size: 10px;
  text-indent: -9999em;
  border-top: 1px solid rgba(237, 237, 237, 0.8);
  border-right: 1px solid rgba(237, 237, 237, 0.8);
  border-bottom: 1px solid rgba(237, 237, 237, 0.8);
  border-left: 1px solid #000;
  -webkit-transform: translateZ(0);
          transform: translateZ(0);
  -webkit-animation: loadme-circular-animate 1.1s infinite linear;
          animation: loadme-circular-animate 1.1s infinite linear;
}
@-webkit-keyframes loadme-circular-animate {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes loadme-circular-animate {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
</style>
    {{-- Lista de precios --}}
    <div class="row mb-3" id="lista_precios_planes">
        <div class="col-sm-12">
        <div class="card border-dark">
            <div class="card-header bg-default font-weight-bold">
                LISTA DE PRECIOS
            </div>
            <div class="card-body">
                <table class="table table-sm table-hover">
                    <thead>
                      <tr>
                        <th>Unidad</th>
                        <th>Modalidad</th>
                        <th>Precio Lista</th>
                        <th>Cuota Pura</th>
                        <th>Integracion</th>
                        <th class="w-5">Activo</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="tbody-planes">
                    </tbody>
                </table>

                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter" onclick="newPlan()"><i class="fas fa-plus"></i> Nuevo</a>
            </div>
        </div>
        </div>
    </div>    
    
    {{-- Adjudicados --}}
    <div class="row mb-3" id="lista_adjudicados">
        <div class="col-sm-12">
        <div class="card border-info">
          <div class="card-header bg-default font-weight-bold">
                PLANES ADJUDICADOS
            </div>
          <div class="card-body">
            <table class="table table-sm table-hover">
                <thead>
                  <tr>
                    <th>G/O.</th>
                    <th>Unidad</th>
                    <th>Avance de Plan</th>
                    <th>Precio Venta</th>
                    <th>Activo</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tbody-adjudicados">
                    
                </tbody>
            </table>
            
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#modalNewAdjudicado" onclick="newPlanAdjudicado()"><i class="fas fa-plus"></i> Agregar</a>

          </div>
        </div>
        </div>
    </div>

    {{-- Avanzados --}}
    <div class="row mb-3" id="lista_avanzados">
        <div class="col-sm-12">
        <div class="card border-info">
          <div class="card-header bg-default font-weight-bold">
                PLANES AVANZADOS
            </div>
          <div class="card-body">
            <table class="table table-sm table-hover">
                <thead>
                  <tr>
                    <th>G/O.</th>
                    <th>Unidad</th>
                    <th>Avance de Plan</th>
                    <th>Precio Venta</th>
                    <th>Activo</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tbody-avanzados-agrupados">
                    
                </tbody>
            </table>

            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#modalNewAvanzado" onclick="newPlanAavanzado()"><i class="fas fa-plus"></i> Agregar</a>

          </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <h5 class="modal-title" id="formularioPlanTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formulario_plan">
                        <input type="hidden" name="plan_id">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label>Unidad</label>
                                <select class="form-control" name="unidad">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Modalidad</label>
                                <select class="form-control" name="modalidad">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Precio Lista</label>
                                <input type="text" class="form-control" name="precio_lista">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Cuota Pura</label>
                                <input type="text" class="form-control" name="cuota_pura">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Integración</label>
                                <input type="text" class="form-control" placeholder="" name="integracion">
                            </div>
                        </div>
                        <div class="form-group form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="activo" name="activo">
                            <label class="form-check-label" for="activo">Activo</label>
                        </div>
                    </form>
                    <div class="list-errors-form-plan"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-editar" onclick="updatePlan()"><i class="fas fa-save"></i> Save changes</button>
                    <button type="button" class="btn btn-primary" id="btn-crear" onclick="storePlan()"><i class="fas fa-save"></i> Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalNewAdjudicado" tabindex="-1" role="dialog" aria-labelledby="modalNewAdjudicadoTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <h5 class="modal-title" id="formularioPlanAdjudicadoTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formulario_adjudicados">
                        <input type="hidden" name="adjudicado_id">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Plan</label>
                                <select class="form-control" name="plan_id">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Grupo y Orden</label>
                                <input type="text" class="form-control" name="grupo_orden" placeholder="G/O">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Avance en Cuotas</label>
                                <input type="number" class="form-control" name="avance_cuotas">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Precio Venta</label>
                                <input type="number" class="form-control" name="precio_venta">
                            </div>
                        </div>
                        <div class="form-group form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="activo" name="activo">
                            <label class="form-check-label" for="activo">Activo</label>
                        </div>
                    </form>
                    <div class="list-errors-form-adj" class="my-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-editar" onclick="updatePlanAdjudicado()"><i class="fas fa-save"></i> Save changes</button>
                    <button type="button" class="btn btn-primary" id="btn-crear" onclick="storePlanAdjudicado()"><i class="fas fa-save"></i> Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalNewAvanzado" tabindex="-1" role="dialog" aria-labelledby="modalNewAvanzadoTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <h5 class="modal-title" id="formularioPlanAvanzadoTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formulario_avanzado">
                        <input type="hidden" name="avanzado_id">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Plan</label>
                                <select class="form-control" name="plan_id">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Grupo y Orden</label>
                                <input type="text" class="form-control" name="grupo_orden" placeholder="G/O">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Avance en Cuotas</label>
                                <input type="number" class="form-control" name="avance_cuotas">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Precio Venta</label>
                                <input type="number" class="form-control" name="precio_venta">
                            </div>
                        </div>
                        <div class="form-group form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="activo" name="activo">
                            <label class="form-check-label" for="activo">Activo</label>
                        </div>
                    </form>
                    <div class="list-errors-form-avanzado" class="my-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-editar" onclick="updatePlanAvanzado()"><i class="fas fa-save"></i> Save changes</button>
                    <button type="button" class="btn btn-primary" id="btn-crear" onclick="storePlanAvanzado()"><i class="fas fa-save"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-script')
<script type="text/javascript">
    let plan = {}
    let planes = {};

    getPlanes();
    getModalidadesTpa();
    getUnidadesTpa();

    // obtener modalidades
    function getModalidadesTpa(){
        var url = 'tpa_planes_modalidades';
        
        axios
            .get(url)
            .then( res =>{
                printOptionsModalidades(res.data)
            })
    }

    //obtener unidades de tpa
    function getUnidadesTpa(){
        var url = 'tpa_planes_unidades';
        
        axios
            .get(url)
            .then( res =>{
                printOptionsUnidades(res.data)
            })
    }

    // obtener todos los planes
    function getPlanes(){
        $("#lista_precios_planes table").after(loader);
        $("#tbody-planes").html('');

        var url = 'tpa_planes';
        
        axios
            .get(url)
            .then( res =>{
                printPlanes(res.data);
                $("#loader").hide();
                planes = res.data;
            })
    }

    // imprimir planes en la tabla
    function printPlanes(planes){

        $.each(planes, function(idx, plan) {
            printPlan(plan)
           
        });
    }

    function printPlan(plan){

        plan.precio_lista = new Intl.NumberFormat("de-DE").format(plan.precio_lista)
        plan.cuota_pura = new Intl.NumberFormat("de-DE").format(plan.cuota_pura)

        var row = `<tr>
                <td> ${plan.unidad} </td>
                <td> ${plan.modalidad} </td>
                <td>$ ${plan.precio_lista} </td>
                <td>$ ${plan.cuota_pura} </td>
                <td> ${plan.integracion} </td>
                <td> ${ (plan.activo==1) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-minus-circle text-dark"></i>'} </td>
                <td>
                    <a class="btn btn-light btn-sm" href="#" data-toggle="modal" data-target="#exampleModalCenter" onclick="getPlan(${plan.id})"><i class="far fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="deletePlan(${plan.id})"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>`;
            $("#tbody-planes").append(row);
    }

    function printOptionsModalidades(modalidades){
        $.each(modalidades, function(idx, modalidad) {
           var opt = `<option value="${modalidad}">${modalidad}</option>`;
            $("#formulario_plan [name ='modalidad']").append(opt);
        });
    }

    function printOptionsUnidades(unidades){
        $.each(unidades, function(idx, unidad) {
           var opt = `<option value="${unidad}">${unidad}</option>`;
            $("#formulario_plan [name ='unidad']").append(opt);
        });
    }

    //obtener un plan por id
    function getPlan(plan_id){
        $(".list-errors-form-plan").html('');
        $("#formularioPlanTitle").html('Editar')
        $("#exampleModalCenter #btn-editar").show()
        $("#exampleModalCenter #btn-crear").hide()
        var url = 'tpa_planes/'+plan_id;

        axios
            .get(url)
            .then( res=>{
                var plan = res.data;
                $("#formulario_plan [name ='plan_id']").val(plan.id);
                $("#formulario_plan [name ='unidad']").val(plan.unidad);
                $("#formulario_plan [name ='modalidad']").val(plan.modalidad);
                $("#formulario_plan [name ='precio_lista']").val(plan.precio_lista);
                $("#formulario_plan [name ='cuota_pura']").val(plan.cuota_pura);
                $("#formulario_plan [name ='integracion']").val(plan.integracion);
                if (plan.activo==1)
                    $("#formulario_plan [name ='activo']").prop('checked',true);
                
            })
    }

    //abrir modal formulario crear-editar plan
    function newPlan(){
        $(".list-errors-form-plan").html('');
        $("#formularioPlanTitle").html('Crear')
        $("#exampleModalCenter #btn-crear").show()
        $("#exampleModalCenter #btn-editar").hide()
        var url = 'tpa_planes'
        plan = {}

        $("#formulario_plan [name ='plan_id']").val(plan.id);
        $("#formulario_plan [name ='unidad']").val(plan.unidad);
        $("#formulario_plan [name ='modalidad']").val(plan.modalidad);
        $("#formulario_plan [name ='precio_lista']").val(plan.precio_lista);
        $("#formulario_plan [name ='cuota_pura']").val(plan.cuota_pura);
        $("#formulario_plan [name ='integracion']").val(plan.integracion);
        $("#formulario_plan [name ='activo']").prop('checked',true);
    }

    // guardar plan
    function storePlan(){
        var url = 'tpa_planes'
        plan.unidad = $("#formulario_plan [name ='unidad']").val();
        plan.modalidad = $("#formulario_plan [name ='modalidad']").val();
        plan.precio_lista = $("#formulario_plan [name ='precio_lista']").val();
        plan.cuota_pura = parseFloat($("#formulario_plan [name ='cuota_pura']").val());
        plan.integracion = $("#formulario_plan [name ='integracion']").val();
        if ( $("#formulario_plan [name ='activo']").is(":checked") ){
            plan.activo =  1
        }else{
            plan.activo = 0
        }

        axios
            .post(url, plan)
            .then( res=>{
               if(!res.data.error){
                    showAlert('success')
                    getPlanes();
                    $('#exampleModalCenter').modal('hide')
               }else{
                    showError('#exampleModalCenter .list-errors-form-plan',res.data.error)
               }
            })
    }

    //actualizar plan
    function updatePlan(){

        $(".list-errors-form-plan").html('')

        var id = $("#formulario_plan [name ='plan_id']").val()
        var url = 'tpa_planes/'+id;

        plan.id = $("#formulario_plan [name ='plan_id']").val();
        plan.unidad = $("#formulario_plan [name ='unidad']").val();
        plan.modalidad = $("#formulario_plan [name ='modalidad']").val();
        plan.precio_lista = $("#formulario_plan [name ='precio_lista']").val();
        plan.cuota_pura = parseFloat($("#formulario_plan [name ='cuota_pura']").val());
        plan.integracion = $("#formulario_plan [name ='integracion']").val();
        if ( $("#formulario_plan [name ='activo']").is(":checked") ){
            plan.activo =  1
        }else{
            plan.activo = 0
        }
        
        axios
            .put(url, plan)
            .then( res=>{
                    console.log(res)
                if (!res.data.error){
                    showAlert('success')
                    $('#exampleModalCenter').modal('hide')
                    getPlanes()
                    getAdjudicados()
                    getAvanzados()
                }else{
                    showError('#exampleModalCenter .list-errors-form-plan',res.data.error)
                }
            })
    }

    // eliminar plan
    function deletePlan(plan_id){
        var url = 'tpa_planes/'+plan_id;
        var eliminar = confirm("Eliminar el item seleccionado?");

        if (eliminar) {
            axios
                .delete(url)
                .then(res=>{
                    if (res.data.error){
                        alert(res.data.error)
                    }else{
                        getPlanes();
                    }
                })
        }
    }

    //mostrar alert success o error tabla-planes
    function showAlert(alert_id){
        
    }

    //----------------------------------------------------------------------
    //SCRIPT ADJUDICADOS

    let url_adjudicados = 'tpa_adjudicados';
    getAdjudicados()

    function getAdjudicados(){
        $("#lista_adjudicados table").after(loader);
        axios
        .get(url_adjudicados)
        .then(res=>{
            printPlanesAdjudicados(res.data)
            $("#lista_adjudicados #loader").hide();

        })
    }

    // imprimir adjudicados en la tabla
    function printPlanesAdjudicados(planes){
        $("#tbody-adjudicados").html('');
        $.each(planes, function(idx, plan) {
            printPlanAdjudicado(plan)
           
        });
    }
    function printPlanAdjudicado(adjudicado){

        // if (adjudicado.plan_tpa.modalidad == '70/30'){ // PLAN 70/3
        //     adjudicado.avance_en_cuotaspura = adjudicado.plan_tpa.cuota_pura*adjudicado.avance_cuotas+(adjudicado.plan_tpa.precio_lista*0.3);
        // }else{ // PLAN 100%
        //     adjudicado.avance_en_cuotaspura = adjudicado.plan_tpa.cuota_pura*adjudicado.avance_cuotas;
        // }
        
        adjudicado.valor_ahorrado = adjudicado.avance_en_cuotaspura - adjudicado.precio_venta;
        adjudicado.precio_venta = new Intl.NumberFormat("de-DE").format(adjudicado.precio_venta)
        adjudicado.plan_tpa.cuota_pura = new Intl.NumberFormat("de-DE").format(adjudicado.plan_tpa.cuota_pura)
        adjudicado.avance_en_cuotaspura = new Intl.NumberFormat("de-DE").format(adjudicado.avance_en_cuotaspura)
        adjudicado.valor_ahorrado = new Intl.NumberFormat("de-DE").format(adjudicado.valor_ahorrado)
        


        var row = `<tr>
                    <td>${adjudicado.grupo_orden}</td>
                    <td><span class="font-weight-bold">${adjudicado.plan_tpa.unidad} - ${adjudicado.plan_tpa.modalidad}</span> <br><span class="text-muted">Cuota pura: $ ${adjudicado.plan_tpa.cuota_pura}</span></td>
                    <td><span class="font-weight-bold">${adjudicado.avance_cuotas} cuotas.</span> <br><span class="text-muted">Valor avance: $ ${adjudicado.avance_en_cuotaspura}</span></td>
                    <td><span class="font-weight-bold">$ ${adjudicado.precio_venta}</span> <br><span class="text-muted">Valor ahorrado:</span> <span class="text-success">$ ${adjudicado.valor_ahorrado}</span></td>
                    <td> ${ (adjudicado.activo==1) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-minus-circle text-dark"></i>'} </td>
                    <td>
                        <a class="btn btn-light btn-sm" href="#" data-toggle="modal" data-target="#modalNewAdjudicado" onclick="getAdjudicado(${adjudicado.id})"><i class="far fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" href="#" onclick="deleteAdjudicado(event, ${adjudicado.id})"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>`;
            $("#tbody-adjudicados").append(row);
    }

    // abrir modal formulario nuevo/editar adjudicado
    function newPlanAdjudicado(){
        $(".list-errors-form-adj").html('')
        $("#errors-form-create-edit-planes").html('');
        $("#formularioPlanAdjudicadoTitle").html('Crear')
        $("#modalNewAdjudicado #btn-crear").show()
        $("#modalNewAdjudicado #btn-editar").hide()

        // vaciar el formulario
        let adjudicado = {};
        $("#formulario_adjudicados [name ='plan_id']").html('');
        $("#formulario_adjudicados [name ='grupo_orden']").val(adjudicado.grupo_orden);
        $("#formulario_adjudicados [name ='avance_cuotas']").val(adjudicado.avance_cuotas);
        $("#formulario_adjudicados [name ='cuota_pura']").val(adjudicado.cuota_pura);
        $("#formulario_adjudicados [name ='precio_venta']").val(adjudicado.precio_venta);
        $("#formulario_adjudicados [name ='activo']").prop('checked',true);

        printOptionsPlanesAdjudicados();
    }


    function printOptionsPlanesAdjudicados(){
        $.each(planes, function(idx, plan) {
           var opt = `<option value="${plan.id}">${plan.unidad} ${plan.modalidad}</option>`;
            $("#formulario_adjudicados [name ='plan_id']").append(opt);
            $("#formulario_avanzado [name ='plan_id']").append(opt);
        });
    }

    //guardar adjudicado
    function storePlanAdjudicado(){
        var url = 'tpa_adjudicados'
        let adjudicado = {}
        adjudicado.plan_id = $("#formulario_adjudicados [name ='plan_id']").val();
        adjudicado.grupo_orden = $("#formulario_adjudicados [name ='grupo_orden']").val();
        adjudicado.avance_cuotas = $("#formulario_adjudicados [name ='avance_cuotas']").val();
        adjudicado.precio_venta = parseFloat($("#formulario_adjudicados [name ='precio_venta']").val());
        if ( $("#formulario_adjudicados [name ='activo']").is(":checked") ){
            adjudicado.activo =  1
        }else{
            adjudicado.activo = 0
        }

        axios
            .post(url, adjudicado)
            .then( res=>{
                console.log(res);
               if(!res.data.error){
                    showAlert('success')
                    getAdjudicados()
                    $('#modalNewAdjudicado').modal('hide')
               }else{
                showError('#modalNewAdjudicado .list-errors-form-adj',res.data.error)
               }
            })
            .catch(err =>{
                alert('Ups algo salió mal.');
            })
    }

    //actualizar adjudicado
    function updatePlanAdjudicado(){

        $(".list-errors-form-adj").html('')

        var id = $("#formulario_adjudicados [name ='adjudicado_id']").val()
        var url = 'tpa_adjudicados/'+id;

        let adjudicado = {}
        adjudicado.plan_id = $("#formulario_adjudicados [name ='plan_id']").val();
        adjudicado.grupo_orden = $("#formulario_adjudicados [name ='grupo_orden']").val();
        adjudicado.avance_cuotas = $("#formulario_adjudicados [name ='avance_cuotas']").val();
        adjudicado.precio_venta = parseFloat($("#formulario_adjudicados [name ='precio_venta']").val());
        if ( $("#formulario_adjudicados [name ='activo']").is(":checked") ){
            adjudicado.activo =  1
        }else{
            adjudicado.activo = 0
        }
        
        axios
            .put(url, adjudicado)
            .then( res=>{
                if (!res.data.error){
                    showAlert('success')
                    getAdjudicados()
                    $('#modalNewAdjudicado').modal('hide')
                }else{
                    showError('#modalNewAdjudicado .list-errors-form-adj',res.data.error)
                }
            })
    }

    // obtener adjudicado
    function getAdjudicado(id){
        printOptionsPlanesAdjudicados();
        $(".list-errors-form-adj").html('')
        $("#formularioPlanAdjudicadoTitle").html('Editar')
        $("#modalNewAdjudicado #btn-editar").show()
        $("#modalNewAdjudicado #btn-crear").hide()
        var url = 'tpa_adjudicados/'+id;

        axios
            .get(url)
            .then( res=>{
                var adjudicado = res.data;
                $("#formulario_adjudicados [name ='adjudicado_id']").val(adjudicado.id);
                $("#formulario_adjudicados [name ='grupo_orden']").val(adjudicado.grupo_orden);
                $("#formulario_adjudicados [name ='plan_id']").val(adjudicado.plan_id);
                $("#formulario_adjudicados [name ='avance_cuotas']").val(adjudicado.avance_cuotas);
                $("#formulario_adjudicados [name ='precio_venta']").val(adjudicado.precio_venta);
                if (adjudicado.activo==1){
                    $("#formulario_adjudicados [name ='activo']").prop('checked',true);
                }else{
                    $("#formulario_adjudicados [name ='activo']").prop('checked',false);
                }
            })
    }

    // eliminar adjudicado
    function deleteAdjudicado(e, adjudicado_id){
        e.preventDefault();
        var url = 'tpa_adjudicados/'+adjudicado_id;
        var eliminar = confirm("Eliminar el item seleccionado?");

        if (eliminar) {
            axios
                .delete(url)
                .then(res=>{
                    console.log(res);
                    if (res.data.error){
                        alert(res.data.error)
                    }else{
                        getAdjudicados();
                    }
                })
        }
    }

    // element, array
    function showError(e, errors){
        $(e).html('');
        $.each(errors, function(idx, error) {
           err = `<span class="text-danger">${error}</span><br>`;
           $(e).append(err);
        });

    }

    //----------------------------------------------------------------------
    //SCRIPT AVANZADOS

    let url_avanzados = '/tpa_agrupados';
    getAvanzados()

    function getAvanzados(){
        $("#lista_avanzados table").after(loader);
        axios
        .get(url_avanzados)
        .then(res=>{
            printPlanesAvanzados(res.data)
            $("#lista_avanzados #loader").hide();
            console.log(res.data)
        })
    }

    // imprimir adjudicados en la tabla
    function printPlanesAvanzados(planes){
        $("#tbody-avanzados-agrupados").html('');
        $.each(planes, function(idx, plan) {
            printPlanesAvanzado(plan)
           
        });
    }
    function printPlanesAvanzado(avanzado){

        // if (avanzado.plan_tpa.modalidad == '70/30'){ // PLAN 70/3
        //     avanzado.avance_en_cuotaspura = avanzado.plan_tpa.cuota_pura*avanzado.avance_cuotas+(avanzado.plan_tpa.precio_lista*0.3);
        // }else{ // PLAN 100%
        //     avanzado.avance_en_cuotaspura = avanzado.plan_tpa.cuota_pura*avanzado.avance_cuotas;
        // }
        
        avanzado.valor_ahorrado = avanzado.avance_en_cuotaspura - avanzado.precio_venta;
        avanzado.precio_venta = new Intl.NumberFormat("de-DE").format(avanzado.precio_venta)
        avanzado.plan_tpa.cuota_pura = new Intl.NumberFormat("de-DE").format(avanzado.plan_tpa.cuota_pura)
        avanzado.avance_en_cuotaspura = new Intl.NumberFormat("de-DE").format(avanzado.avance_en_cuotaspura)
        avanzado.valor_ahorrado = new Intl.NumberFormat("de-DE").format(avanzado.valor_ahorrado)
        


        var row = `<tr>
                    <td>${avanzado.grupo_orden}</td>
                    <td><span class="font-weight-bold">${avanzado.plan_tpa.unidad} - ${avanzado.plan_tpa.modalidad}</span> <br><span class="text-muted">Cuota pura: $ ${avanzado.plan_tpa.cuota_pura}</span></td>
                    <td><span class="font-weight-bold">${avanzado.avance_cuotas} cuotas.</span> <br><span class="text-muted">Valor avance: $ ${avanzado.avance_en_cuotaspura}</span></td>
                    <td><span class="font-weight-bold">$ ${avanzado.precio_venta}</span> <br><span class="text-muted">Valor ahorrado:</span> <span class="text-success">$ ${avanzado.valor_ahorrado}</span></td>
                    <td> ${ (avanzado.activo==1) ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-minus-circle text-dark"></i>'} </td>
                    <td>
                        <a class="btn btn-light btn-sm" href="#" data-toggle="modal" data-target="#modalNewAvanzado" onclick="getavanzado(${avanzado.id})"><i class="far fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" href="#" onclick="deleteAvanzado(event, ${avanzado.id})"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>`;
            $("#tbody-avanzados-agrupados").append(row);
    }

    // abrir modal formulario nuevo/editar avanzado
    function newPlanAavanzado(){
        $(".list-errors-form-avanzado").html('')
        $("#formularioPlanAvanzadoTitle").html('Crear')
        $("#modalNewAvanzado #btn-crear").show()
        $("#modalNewAvanzado #btn-editar").hide()

        // vaciar el formulario
        let avanzado = {};
        $("#formulario_avanzado [name ='plan_id']").html('');
        $("#formulario_avanzado [name ='grupo_orden']").val(avanzado.grupo_orden);
        $("#formulario_avanzado [name ='avance_cuotas']").val(avanzado.avance_cuotas);
        $("#formulario_avanzado [name ='cuota_pura']").val(avanzado.cuota_pura);
        $("#formulario_avanzado [name ='precio_venta']").val(avanzado.precio_venta);
        $("#formulario_avanzado [name ='activo']").prop('checked',true);

        printOptionsPlanesAdjudicados();
    }

     // guardar plan
    function storePlanAvanzado(){
        var url = '/tpa_agrupados'
        let avanzado = {}
        avanzado.plan_id = $("#formulario_avanzado [name ='plan_id']").val();
        avanzado.grupo_orden = $("#formulario_avanzado [name ='grupo_orden']").val();
        avanzado.avance_cuotas = $("#formulario_avanzado [name ='avance_cuotas']").val();
        avanzado.precio_venta = parseFloat($("#formulario_avanzado [name ='precio_venta']").val());
        if ( $("#formulario_avanzado [name ='activo']").is(":checked") ){
            avanzado.activo =  1
        }else{
            avanzado.activo = 0
        }

        axios
            .post(url, avanzado)
            .then( res=>{
               if(!res.data.error){
                    showAlert('success')
                    getAvanzados()
                    $('#modalNewAvanzado').modal('hide')
               }else{
                    showError('#modalNewAvanzado .list-errors-form-avanzado',res.data.error)
               }
            })
            .catch(err => {
                alert('Ups algo salió mal. '+err)
            })
    }

    // obtener avanzado
    function getavanzado(id){
        printOptionsPlanesAdjudicados();
        $(".list-errors-form-avanzado").html('')
        $("#formularioPlanAvanzadoTitle").html('Editar')
        $("#modalNewAvanzado #btn-editar").show()
        $("#modalNewAvanzado #btn-crear").hide()
        var url = 'tpa_agrupados/'+id;

        axios
            .get(url)
            .then( res=>{
                var avanzado = res.data;
                $("#formulario_avanzado [name ='avanzado_id']").val(avanzado.id);
                $("#formulario_avanzado [name ='grupo_orden']").val(avanzado.grupo_orden);
                $("#formulario_avanzado [name ='plan_id']").val(avanzado.plan_id);
                $("#formulario_avanzado [name ='avance_cuotas']").val(avanzado.avance_cuotas);
                $("#formulario_avanzado [name ='precio_venta']").val(avanzado.precio_venta);
                if (avanzado.activo==1){
                    $("#formulario_avanzado [name ='activo']").prop('checked',true);
                }else{
                    $("#formulario_avanzado [name ='activo']").prop('checked',false);
                }
            })
    }

    //actualizar avanzado
    function updatePlanAvanzado(){

        $(".list-errors-form-avanzado").html('')

        var id = $("#formulario_avanzado [name ='avanzado_id']").val()
        var url = '/tpa_agrupados/'+id;

        let avanzado = {}
        avanzado.plan_id = $("#formulario_avanzado [name ='plan_id']").val();
        avanzado.grupo_orden = $("#formulario_avanzado [name ='grupo_orden']").val();
        avanzado.avance_cuotas = $("#formulario_avanzado [name ='avance_cuotas']").val();
        avanzado.precio_venta = parseFloat($("#formulario_avanzado  [name ='precio_venta']").val());
        if ( $("#formulario_avanzado [name ='activo']").is(":checked") ){
            avanzado.activo =  1
        }else{
            avanzado.activo = 0
        }
        
        axios
            .put(url, avanzado)
            .then( res=>{
                          console.log(res.data)
                if (!res.data.error){
                    showAlert('success')
                    getAvanzados()
                    $('#modalNewAvanzado').modal('hide')
                }else{
                    showError('#modalNewAvanzado .list-errors-form-avanzado',res.data.error)
                }
            })
    }

    // eliminar avanzado
    function deleteAvanzado(e, avanzado_id){
        e.preventDefault();
        var url = 'tpa_agrupados/'+avanzado_id;
        var eliminar = confirm("Eliminar el item seleccionado?");

        if (eliminar) {
            axios
                .delete(url)
                .then(res=>{
                    if (res.data.error){
                        alert(res.data.error)
                    }else{
                        getAvanzados();
                    }
                })
        }
    }

</script>
@stop