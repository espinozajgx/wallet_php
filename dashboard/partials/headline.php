<div class="row">
	<div class="col-md-12">
		<!-- PANEL HEADLINE -->
		<div class="panel">
			<div class="panel-heading">
				<span class="pull-right">Balance Total</span>
				<h3 class="panel-title">Operaciones</h3>
			</div>
			<div class="panel-body">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_send"><i class="lnr lnr-upload"></i> Enviar </button>
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_receive"><i class="lnr lnr-download"></i> Recibir </button>

				<ul class="nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>$ 0.00</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="#"> {{bitcoin}} BTC <span>$0.00</span></a></li>
							<!--li><a href="#"> 0.00000000 ETH <span>$0.00</a></li-->
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- END PANEL HEADLINE -->
		<!-- Modal Trigger -->
		  <!--a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a-->
		  <div class="modal fade" id="modal_receive" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		        <h3 class="modal-title" id="exampleModalLongTitle"><i class="lnr lnr-download"></i> Recibir Bitcoins</h3>
		      </div>
		      <div class="modal-body">
		        <form>
		          	<div class="form-group">
			          <label for="recipient-name" class="col-form-label">Copia y comparte tu direccion:</label>
			          	<div class="input-group">
			            	
			            	<input type="text" class="form-control" id="recipient-name" value="{{address}}" readonly></input>
			              <span class="input-group-btn">
					        <button class="btn btn-primary" type="button">Copiar</button>
					      </span>
			          	</div>
			        </div>
			        <br>
		          <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">CONTINUAR</button>
		        </form>
		      </div>									
		     		 
		    </div>
		  </div>
		</div>

		  <!-- Modal Send -->
		  <div id="modal_send" class="modal fade" tabindex="-1" role="dialog">
	      <div class="modal-dialog modal-dialog-centered" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h3 class="modal-title" id="titulo_modal"><i class="lnr lnr-upload"></i> Enviar Bitcoin</h3>
	          </div>
	          <div class="modal-body" id= "modal-body-detalles" name ="modal-body-detalles">
	          		<form method="POST" action="/send">
	          			<div class="form-group">
		          			<div class="dropdown">
		          			  <label for="dropdownMenu1" class="col-form-label">Currency:</label>
		          			  <br>
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							     <i class="fa fa-bitcoin"></i> Bitcoin
							    <span class="caret"></span>
							  </button>
							  	<!--ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li><a href=""><i class="glyphicon glyphicon-btc"></i> Ethereum</a></li>
							  	</ul-->
							</div>
						<div>
						<br>

			          <div class="form-group">
			          <label for="recipient" class="col-form-label">Para:</label>
			          	<div class="input-group">
			            	<input type="hidden" class="form-control" id="ruta" name="ruta" value ="{{activa}}"required>
			            	<input type="text" class="form-control" id="recipient" name="recipient" required>
			            	<span class="input-group-addon" id="sizing-addon3"><i class="fa fa-qrcode"></i></span>
			          	</div>
			          </div>

			          <div class="form-group">
			          <label for="quantity" class="col-form-label">Monto:</label>
			          	<div class="input-group">
			            	
			            	<input type="text" class="form-control" id="quantity" name="quantity" required>
			            	<span class="input-group-addon" id="sizing-addon3">BTC</span>
			          	</div>
			          </div>

			          <div class="form-group">
			            <label for="message" class="col-form-label">Descripcion: <i class="lnr lnr-question-circle"></i></label>
			            <textarea class="form-control" id="message" name="message"></textarea>
			          </div>
			          <div class="form-group">
			            <label for="comision" class="col-form-label">Comision de Transaccion:</label>
						<input type="text" id="comision" name="comision" class="form-control" value="0" required>
			          </div>

    					<br>
			          <!--div class="form-group"-->			
			          <button type="submit" class="btn btn-primary btn-lg btn-block">ENVIAR</button>
			             <!--button type="submit" class="btn btn-primary">Enviar</button>
			          <!--/div-->
			        </form>
	          </div><!--modal-body"-->
	        </div><!-- /.modal-content -->
	      </div><!-- /.modal-dialog -->
	    </div><!-- /.modal -->


	    

	</div>
</div>