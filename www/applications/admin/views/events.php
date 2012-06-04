<?php if(isset($alert)) { ?>
	<script>
		alert("<?php print $alert;?>");
	</script>
<?php } ?>

<div id="home-events">
	<div id="home">
		<form method="POST" class="form-horizontal">
			<p>
				Nombre: <input name="title" class="input-xlarge" type="text">
			</p>
			
			<p>
				Lugar: <input name="location" class="input-xlarge" type="text">
			</p>
			
			<p>
				Fecha: <input name="date" class="input-xlarge" type="text" value="12/12/12">
			</p>
			
			<p>
				Contenido: <textarea id="textarea" class="input-xlarge" rows="3" name="content"></textarea>
			</p>
			
			<p>
				<button name="send" class="btn btn-primary" type="submit" value="send">Save changes</button>
			</p>
		</form>
	</div>
</div>
