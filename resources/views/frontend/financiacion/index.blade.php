@extends('frontend.layout')

@section('title_and_meta')
  <title>Financiación TCF</title>
  <meta name="description" content="Derka y Vargas Financiación, TCF, Toyota Compañia Financiera, Créditos UVA">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/financiacion" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="FINANCIACION" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
	<style type="text/css">
		.calculator-bg{
		    background-image: url(https://cdn1.iconfinder.com/data/icons/ringtone-music-instruments/512/calculator-instrument-calc-math-2-512.png);
		    background-repeat: no-repeat;
		    background-position: right;
		    background-size: 80px;
		}
		.prestamo-bg{
		    background-image: url(https://image.flaticon.com/icons/png/512/377/377004.png);
		    background-repeat: no-repeat;
		    background-position: right;
		    background-size: 80px;
		}
		.email-bg{
		    background-image: url(data:image/png;base64,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);
		    background-repeat: no-repeat;
		    background-position: right;
		    background-size: 80px;
		}
	</style>

@stop

@section('content')
	<article>
	<section>
		<div class="container">
			<div class="page-header" >
				<div class="row remove-flex-on-mobile" style="display: flex; justify-content: center; align-items: center;">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-4 px-4">
			  			<center>
			  			<img class="img-responsive" src="/imagenes/TCF/Toyota_Compania_Financiera.jpg" alt="Toyota Compañia Financiera Derka y Vrgas Chaco">
			  			</center>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 my-4 px-4" >
						<p class="text-justify fs-16">Toyota Financial Services Corporation es la entidad de servicios financieros de Toyota Motor Corporation,  con presencia en 30 países repartidos en todos los continentes y con más de 10.000.000 clientes, es una de las mayores financieras de marca del Mundo.En enero 2005 Toyota Compañía Financiera de Argentina S.A. inicia sus operaciones en el país con el objetivo de brindar la más alta gama de servicios financieros para los usuarios TOYOTA
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!---------------------------------------------------------------------
    3CARDS
  	----------------------------------------------------------------------->
  	<section class="my-3" style="height: auto;">
      <div class="container">
      	<div class="container">
		  	<div class="row">
			    <div class="col-md-4 my-3">
			      <div class="card card-component" onclick="window.open('https://www.tcfautos.com.ar/#/cotizador/', '_blank');">
				      <div class="card-body text-center">
				      	<img class="img-fluid" src="https://cdn1.iconfinder.com/data/icons/ringtone-music-instruments/512/calculator-instrument-calc-math-2-512.png">
				        <h3>Simulá tu préstamo</h3>
				        <p class="fz17">
				        	Créditos prendarios, Leasing.	
	                      	Elegí el modelo y el mejor plan de financiación para vos.
	                    </p>
			      </div>
			      </div>
			    </div>
			    <div class="col-md-4 my-3">
			      <div class="card card-component" onclick="window.open('https://www.toyotacfa.com.ar/ToyotaAppForm/Login/MultiCanal?canal=WEB&cuit_cliente=0&cuit_dealer=0&id_campania_pao=0&id_cotizacion_seg=0&id_publicacion=0&id_sesion=0&tipo_persona=PF', '_blank');">
				      <div class="card-body text-center">
				      	<img class="img-fluid" src="https://image.flaticon.com/icons/png/512/377/377004.png">
				        <h3>Solicitá tu préstamo</h3>
				        <p class="fz17">
		                  En pocos y simples pasos obtené información en tu e-mail. Toyota 0KM y Usados - Otras marcas usados
		                </p>
				      </div>
			      </div>
			    </div>
			    <div class="col-md-4 my-3">
			      <div class="card card-component" onclick="masDetalles(event)">
			        <div class="card-body text-center">
				      	<img class="img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX///9CYppCYZpBYZlBYZpBYppCYplBYplCYZmxu9CYqcc4W5br7vRifKs1WZU9Xpj5+vxMap+JnL7n6/OltM7J0eFoga7c4uzx8/fBy93Q2OZMa5+EmLxbdqe5xNlvha/W3el7j7aRpMled6ZWdKmsu9Z2j7otVZVjgLOLoMduiLbAzeOercmPoMBZdqusts5ANKTxAAARzElEQVR4nN1dC5uiuBIlJAE0SoGIDxTth90926Nz//+/u0kAW+WV8FDsYnb7zHy7jsVJcipJpWIY/Zq3mgTRenQ8bffTeOP7CCHf38TT/fZ0HK2jYLLyev4GPZoXhNyzfexTAowBACEYE/7YGGMQf0RsP95zT8Pg+dz0Xkan/fsGAfeM+4QRRg5yxA8BTCTNpNJToP77/jR6eRovvUk03/vMTX0rMEqSJ/tBCPfTdf3veTQZvJvecn1a+C5gShG1qMMpy4MSI+D6i9N6OWQng91rTBgUEnfJofiVPLcAGIlfd8GjHSk0b7JbgMtbJidK9DYblQLJJ7Jkp8wB3mJdWOwG11xX4WzDybMSQ1YFQJZNbWRzb1EZwOAeZuHq0U5dmMeHFiBl/StnNuKM2fIpBRj8/XwgPHrRlvGhBVnpUw9sZFFLMlYBqA0u20aPd9ILZxZvnYKa1It6IJoipVQ0y2qAwZqFD/Yx2m8kfSj7+iogIQrRemBh2Oyjx7nnrRc88rLEg8QYogoEP3Yij/WAC8hi/RgevWhGgCoPL7cjDc3GlVpgA509oj9OuDwk4Yn4JlqAR95W+igCtplN7u3fHDEi2EiCaT2g+0a4EYbm9/TRC6cM27KrUNvWBY5pItMxHTnJUAbApvcbVlenjeiAdkaLLkiIoemjDGBzuk+Y4+0Yb6C8sVl28o1tbWCKGaKZPuqAuGx3BxqXMxtk7xeSZaehlhbgM1+TN1WbP7oA27Nl3w6GMckCUDOjRRtkc3x9gCEOe/UvOMF59mdbIuxI+dECJnaIY2Lx6ANgpx6nj8s9XMzQiU0sHkISTosW0IoO8oZh0VtLXcfsYqaecmhl/KgDzoYQAElLA+Cw93Uv/nljF65e5lnxdUEDxb8G4I57GFODrSuYE2EUSjm8q+JfA3fbeWcMrrqgtHsr/iXAsO/YxZBBuoaUxpaPUPxLYDLWqWysxTwXOxgny9YJaKr4FtduKQB2KwCbXXcOzn0ig5GkbaYAy9Vd/ltHF3RkxJ935J83d4vW0WzkmJYptiN0gVzrJ/JpBeCrm9U474jwOaS8ANR2bCwkztEEXXHIWbSOXbg4JsUroSmHZsaPOiAZFx2AcXsGx1/4irozQJKYlB8tgFIanfYAf7XVfu9YwiCSG4FW1rl0gCn21DCPau1OQMuGOs8NoWeQcuhk/KiDhAYnfVoCYrUaUecuLvVQ7uqK+Z6jC7o17LZwce1XbLdQ6lDLsfhX1gR8hKBY/ot2AojfWPrDA8kPMGeAbSniiQBoga4NDg0DuIBB1ec+XvF/pJ81CsP5bAIVUDckxf9hsclMw9uCWfmpw1D89IGtvmaMZTBaweEgFD8D1NUObtZuaVZIakNR/ARgV3PtZvkOUlXzMjg0xc8AvGutwAULVubY4BQ/M7bQGW1OgJPXU2GDUfwMwEndwfC86vQUip8aBmXhX8aQNfEKG5DipwBixa7ozQj+ceMpFD81mKmp4s7GKuPBoBQ//WErxeArlm23V3M4KMVPAWEKu8Teiak1iWEpfgrcU307DX3ipMnKT6X46brNpnY8nUyvpkxPpPiJwbQuKWXOzMu3UmGDU/zkR92axgRdr1vUK76Tqbk66NUIrSTRmzGZBSo3UMTukmzbWeu6Bpb8utjCti5A8jyChfoBrFIUo43MhJXNSSZKErGRZcut21swVCObinRNb5bkOtnJjjJvjNzXtFfmAMpUE+uCnq0qslkTYlmCQf5IIL+QmW3fXgOr8VeQvUAEOD0BWj4ZXkBCHs1Y5IyZVkrdLWhAXgr6NliU9kJGMw6tCw6lbOTBcDm0WUlP9MTyYfqi7RTwQEvk+DgFQMhKMxZ7N9gX98TQx4ha6cmB5BRIEk9mEcA1GLARvzB24wOpk7xoK2uNllQGU3TKPEhCgzMtWqBvKx5OI4STITKTe6kWyHEy6iQg8GgjCm8Jo6KeuIWEvLzii6E1EXog8fTRFlOoT/6DbUEjlZn3NqpSfPgOg8mjLQi/K3eMEhJZvpnOXclZleJjVjwI390YrpWN/BRjsk9eTJXiw79HuFNg/+q7IuxvpxhCKi44LFR8DA/xJ29QzyG+FQwuFUjOeCsV3/37GI9ubOfWUpgXjMkhkbdqxQetrYG+LFjUjzScqs11MxWvxUJ1io9Jg43Irs3bEqXzZO712mn2WmoUH7PvR7MYfBfmERY006sZRgA4PQVZqfiUC8Zid+9TZJc22S2Y4qSGwCUZ575brfjiAfLd75mOKgu/qUofzDdT7xXSY8gKc3wM7udDDiB70acLWH2iCK8/31Jsp6WmMsfHwMYvd3fwZVyd35Nvphebbes0Xq9R/B9A4NDHiYcK88YH0JzsY3Jer/FOLGVMeY5vgkvveKhzMqeKI+ilsfM2zWSBM4XRmONjmP69D4/e36lGxYYfg0XGQeRjaqko/vUcH4P/eY8w7u+nrzAjLDDsZ/NgPnH6yUyomeP/AHSXYTUZQJv4x41lU6g9ONRSU/wLkLYEf9znqc7l2G/sn5hCpa/JJxccaq7qE8zieV8HkFfzmDXpgJkRP2lgLy7FVF3xc6v6fFjd9eHjakddaLk0/CI/aeSKYhupNVrVB/bd+SFrb/fNWq89uiP5WSeGUrWoU3yTx0yFq/oE0PalUwdfthRK+MFYmUwmE8G8PVBHTfGxj6BkVR+zr8/OqnR5y8+vMgL5y6zKr7+2ZHk/eIefVlqp+HCIdltZTqhoVR/D4djNsLrkEVqJfzyWet1FB1UX4V3MoMINoY6S4gvOV+s/LpDiVX1C4o/2NHofMSkJsQm40/VK9is1IzL5ZMR7oZriM5lp7P1dAKQjDcpqkaUA3MNHu2F19XFwy6reACySOHGs7CEVQ80RMFVTfJbmUgcfi9IcaWDbFhWBvPWWlUVo2F18pLN2ZQ9NOMr0C0TVFJ+ds8Unb1RW/yjYIMSAXpt2x+VraVE0wtDbeS6j7KGcXqx4zIbUFJ9d5MNPxpuyL4MZvDXxcfkG/LUVjvsAm/HFXG3MVKUf9itjwuf3iorPrjL+ozcfSrZ5MfPnumtywdwvVXjw3652y9Q5JO8TI5CZekqKf+2h4b18f5WN6oRMP7Qc/JgSofBF+g5f3ze1TdU5xJvAiChGiorPcqc2oi2B4s16UfpQOVpd7fgAWtzmRbSU2+1U5xDTSKzROIqKn/dQRo9l60NAXtWKyUWvpGwALY541T2keG2M+ECjqvhFJ29WO18KWMGuvShCVj/kLGebkrZOwfUL24G6hwhGxpGZSEvx8z5+TAWPV9KfAcZqhtXlGyubAgKbloQPGh6yI4+ALKSp+DkLjqWBJIa4Yk1uMo/LTsiJMLdsPNbx8GSIQ3jail9MRXGSUPnksaITE+ZWkK/TSrdikaaJ4ufs5b+y7sSj1X9Rvrl50T8xTyka5XkH/u+l4u9SVwuxVDOVHDZQ/JxFrxSKIzkeM29vt3PCbdkMAvG4r3oQ1uCQTI2YOA0VP2d8ZlUWAmAellz2quBNRKBF754L/J91jZBqcEhiY8NHssaKn7O/3wgKWcSEff37CJdBECzDj3+lU3hA3/WrzDocbgwfOy0UP2eTXekCoAMM+YfDwacMlw2gLFbZgNXwEPuGGEbbKH7Ogg8/KQpWEAOIAvMYlwXY2PU/lAJ2DQ8R95C0VfycrcacR6skBkBl/hGIx4qBrI6HpiGYaqv4OXsZl0+Fio1PuNR3XXU8RLyVFim+nf5GVfFzFn0CkPyUo4RDDPCpUfJZ00NUpPiXaoGVFD9ny8+yTZWbMd0S23RaiwIaaoEtw0/LHacmBxch8xLwxkkQTX4QTQ8Nb815tNIQgqIz4J9rovQRvzh/motXY/bzv9cA4hsbbIrWlJazc6hJSeoXB5I6Ikok6nNopEuDee0gWavlnZsLvP4C5NjNvhiuBRse08h2k56VuW1W7TzktpsSQPnq82dnybRBcRkdxY95XJq0IZr8g01ush6qAK1aaWLB/J+Lr1spMU35gSZx/2mvWEkP3eQbpZ9TBWBqyMzZSg4bjjRnm/xHXFzAIXHJf83SOXRmT3uRwC7fL0neczKL4I8E8m1kHJoNPeQ8Cnkk2V9BxAs2gQtg0yzAscs/gMi2UAfg1TidOUxGmqwt0c44FBbOfLjsgFwgZs3T43Q4PBlH1j+Hhpjv/mEsPTgvLrj60yaHI+VQWg1gR2ME12qBpFpId0l3HAoLZ3F6K1ncgj/pISuPeG8AjIw1TRpmMpZ2qfh5C8KdsLBtFq664hNYi8NAvSl+X6au+IRGRpAcQ+hL8XsxjZ0ZPxB7T70qfh+mrvgQT8T+Yc+K372pcyj2D70Zu4dadGrqii9TTI9yWa9nxe/WlDnEYh/fGFHypBwqKD4SuRihfyfF786UFT/JpwneZTH/eyh+V6as+ElOlDik/lsVPz22fmK/VvGT3ERj5P5WxTfT/NKXGg4HOdIocvgi/3vPJ8+pFrWKn+V5G3v4pYqf5eobc/c5OaxV/POR9cj/nYpPzmdmJqLyzi9U/J9zT6KQ4G9U/IsSg2tKfqHik4t6UcuY/ELFvyzY6r3CL1T8y3PA4iz3E6pFjeJflRyQ5/F/meLjq/P4xgKekMNqxb+p2rZjKoqvUTC7VzupKP5NXYzJgdQr/nAq8EC94pPD9d6kqAlZq/jYfXTZj8QCt3773swVNAt9XKv4BL4fWfUjs4lCJSyUqzEk60TVKT7F6M6VFIrMG4u9pDrFz9eJ4lOoWsUXezlvj3Dqyt6oSj5ZQTlhj+E6tRDA/S5IaL6fraJvV2X7nhTUa0tSFioVXwLwX/83epT979VXq29SVHPPiKQM1nGICAE3NSYffdDCgCgt5pPCuomyiHCl4t+CFla7/94OlJQS5oJRrfjX4DLNSQsoZdy1AiX1S+XyfqXi34KmppRx1waU1aA1IparDVrhIbpJ5NICvRopqyMsq7ZVKv41aNxKVTLu2oDyWtCinvfN66gYaQbL4UV9qKLhtF4tMiBy8M7JeFpASbKbg8rC+tGGXDWqag6Habiqrr48nN8/hyoZd82BW31h0IR/jedW/Jr7LcQdJc5zKz6ru3c1EKXRnljxYVq7DhFuLr/6syl+Wbx2ad7JfWLFV7nvyVhdnh98MsVXurPLMHY8dHtOxSdU7XiKqHz9lIqPieLdeaJg61MqvvL9h3w8ZfgJFV/jDktxD6n5dIqvdQ+puEv26RRf7y5ZcR+w/DLPo/ia9wHLO52fSvG173QWu5AUPY/iN7iXW9ytjp9G8UmTu9WNILvg6gkUH/aNdjYDBk+i+NB06zY8kAoOh6P45ND4sN/ahydQfOJrD6M/Nv/Cg1d8/FW3blHt4uAVn1itHDQ8Ud10yIqPybFlaoE3/hqy4uOvDnInxiR7Y8NTfEK6SETzjhYeqOJj1LaJpi7O3SLpf7ziw9e8q/SeuV8o/S2sE6H3242iV7bb5KX/0YoPmwZ1X8otZDAwxQe342un+EyDDEjxScPZRKWLWxcPRvGxu+0hEdQb8yF1GIoPbk85kut3NgjFZ+8tJhPVttwDfrjiY1j0eHdPcAIwH6v4wE795mKvY/JIxSck7v1uwuWMkocpPtgKBcJb22rHXPIQxScu6+XapQIfT0nZ5zurBWxOd0vA9sIpI3dWfMKm4T0PCkzmVJaZvReHmNFG9Qdb+TgT9arvpPjMnz3gLIsXzmjZrT6dGgEye8jVrqIE64Ilp/p6VHwCbNHi9qHWFu2b3U+oKvQE/L1GgeE+jLdVC3BPik8Aze46gJb4GG2Z3kWaSvrO3XPZ9kH9L2feXDbWLtVCNM/OVtK6sEk424iiyN0oPqfvMAuHcNbx0rzJbgGumD+241C4B4vdZEj8/Viwe42JWJVrrPjgkvh1N4zDuMXmLdenhc8aXcHMyfMXp3VnN2H2Zt4k4gMPcxkASY6z1io+AWCu63/Po4E2zgLzXkan/fuGgnAT52O7tGI/xtw3QJv3/Wn08jTOnc0LwtFxto99SoFxRkWdZGpRi3BquedMtGU/3s+OozB4Pu/O5q0mQbQeHU/b/TTe+D5vpb6/iaf77ek4WkfBZNW3c/8HEcnf1ii4VloAAAAASUVORK5CYII=">
				        <h3>¿Más detalles?</h3>
				        <p class="fz17">
		                  Completá el formulario y te contactaremos a la brevedad para asesorarte.
		                </p>
			      </div>
			      </div>
			    </div>
		 	 </div>
      </div>
	</section>

	<section class="mt-3">
		<div class="container">

		    <div class="card my-2">
		        <div class="card-body">
			        <h4 class="panel-title-financial">
			          <a id="creditos_prend" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
			          	<h4>Créditos Prendarios</h4>
			          </a>
			        </h4>
		        	<p style="font-size: 17px;">Nuestros planes de financiación aplican hasta el 75% del valor de la unidad. El 25% restante se abona junto a la entrega de la unidad y la firma del crédito prendario. Tenemos planes a Tasa Fija en pesos y en plazos de hasta 60 meses. Puede consultarnos también por nuestros planes de Tasa Variable. </p>
		        	<a class="btn btn-default" href="https://www.toyotacfa.com.ar/creditos-prendarios">MÁS DETALLES</a>
		        </div>
	      	</div>

		    <div class="card my-2">
		        <div class="card-body">
		        <h4 class="panel-title panel-title-financial">
		          <a id="leasing" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		          	<h4>
		          		Leasing
		          	</h4>
		          </a>
		        </h4>
		        	<p style="font-size: 17px;">El leasing es un arrendamiento financiero que le permite disponer del uso y goce del vehículo mediante el pago de un canon mensual. Incluye la opción de compra al finalizar el contrato, en el caso que el cliente desee quedarse con el vehículo.</p>
	        		<div class="well">
			        	<div class="row">
			        			
		  					<div class="col-md-6 col-xs-12 col-sm-12">
		  						<h4>Beneficios Económicos y Financieros</h4>
		  						<ul class="list-unstyled">
		  							<li><i class="fa fa-check" aria-hidden="true"></i> Opción de compra al finalizar el contrato</li>
		  							<li><i class="fa fa-check" aria-hidden="true"></i> Financiación a Tasa Fija</li>
		  							<li><i class="fa fa-check" aria-hidden="true"></i> Uso y goce del vehículo mediante el pago de un canon mensual </li>
		  						</ul>
		  					</div>
		  					<div class="col-md-6 col-xs-12 col-sm-12">
		  						<h4>Beneficios Fiscales</h4>
		  						<ul class="list-unstyled">
		  							<li><i class="fa fa-check" aria-hidden="true"></i> El IVA se abona mensualmente con los cánones y no al momento de la compra del vehículo</li>
		  							<li><i class="fa fa-check" aria-hidden="true"></i> Amortización acelerada</li>
		  							<li><i class="fa fa-check" aria-hidden="true"></i> No se encuentra alcanzado por el impuesto a la ganancia mínima presunta (dependiendo del tipo de vehículo y de la condición impositiva del tomador)</li>
		  						</ul>
		  					</div>
							</div>
	        		</div>
	        		<a class="btn btn-default" href="https://www.toyotacfa.com.ar/leasing">MÁS DETALLES</a>
		        </div>
		    </div>
	  	</div> 
	</section>

	<!---------------------------------------------------------------------
    FORMULARIO DE CONTACTO
  	----------------------------------------------------------------------->
	<section class="my-4 py-4">
		<div class="container">
			<div class="row remove-flex-on-mobile" style="display: flex; justify-content: center;align-items: center;">
			{{-- <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			</div> --}}
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 col-offset-md-3" id="form-contacto">
				<div class="main-title">
		          <h2 class="text-dark-2">FORMULARIO DE CONTACTO</h2>
		          <p class="text-dark-3">Dejanos un email y estaremos en contacto con usted a la brevedad, o acercate a una de nuestras sucursales.</p>
		     	</div>
				@include('frontend.includes.contact-form', $data=['from' => 'financiacion'])
			</div>
			</div>
		</div>
	</section>

</article>
@stop
@section('script')
<script type="text/javascript">

	function masDetalles(e){
		e.preventDefault();
		$('html,body').animate({
	        scrollTop: $("#form-contacto").offset().top
	    }, 'slow');
	    $(".cliente").focus();
	}

	  //Init Owl Caroucel 
      $('.owl-carousel.owl-md').owlCarousel({
        stagePadding: 30,
        loop:true,
        margin:0,
        nav:false,
        autoplay: true,
        autoPlaySpeed: 3000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true,
        items : 3,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })
	

</script>
@stop