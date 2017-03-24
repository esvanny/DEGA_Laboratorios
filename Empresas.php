<?php include('templates/header.php'); ?>
	<section id="main">
		<section id="Contenido" class="container">
			<ul class="nav nav-tabs nav-justified" id="tab-empresas">
			  <li class="active">
				<a data-toggle="tab" href="#EMPRESAS" aria-expanded="true"><h2>EMPRESAS</h2></a>
			  </li>
			  <li>
			  	<a data-toggle="tab" href="#PARTICULARES" aria-expanded="true"><H2>PARTICULARES</H2></a>
			  </li>
			</ul>
			<section class="tab-content">
			    <article id="EMPRESAS" class="tab-pane fade active in">
			    	<div id="contenido-tabs">
			      		<p>ESTE ES EL TEXTO DE LAS EMPRESAS</p>
			    	</div>
			    </article>
			    <article id="PARTICULARES" class="tab-pane fade">
			    	<div id="contenido-tabs">
			      		<p>ESTE ES EL TEXTO DE LOS PARTICULARES</p>
			    	</div>
			    </article>
			</section>
			<section id="clientes">
				
			</section>
		</section>
	</section>

<?php include('templates/footer.php'); ?>