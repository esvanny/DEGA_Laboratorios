<div id="Solicitud" class="modal">
<div class="modal-content">
<h4>Envíanos un e-mail</h4>
<p>Pronto nos pondremos en contacto contigo</p>
<div class="container left-align">
	<form action="funciones/mail.php" method="POST">
		<div class="row">
	        <div class="input-field col s12">
	          <input id="email" type="email" class="validate" name="correo">
	          <label for="email">De:</label>
	        </div>
	        <div class="input-field col s12">
	          <input id="asunto" type="text" class="validate" name="asunto">
	          <label for="first_name">Asunto:</label>
	        </div>
	        <div class="input-field col s12">
	          <textarea id="contenido" class="materialize-textarea" name="contenido"></textarea>
	          <label for="textarea1">Redactar mensaje</label>
	        </div>
	    	<button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar
	      	<i class="material-icons right">send</i>
		  </button>
	    </div>
	</form>
</div>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
</div>
</div>