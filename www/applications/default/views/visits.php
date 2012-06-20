<?php if(isset($alert)) { ?>
	<script>
		alert("<?php print $alert;?>");
	</script>
<?php } ?>

<div id="home">
	<span id="head-feedback">Libro de visitas</span>
	<div id="visitas" class="scroll-pane">
		<?php foreach($visits as $visit) { ?>
			<div class="visita">
				<span class="name bold"><?php print $visit["Name"];?></span>
				<span class="comment">"<?php print $visit["Comment"];?>"</span>
				<span class="date"><?php print $visit["Text_Date"];?></span>
			</div>
		<?php } ?>
	</div>
</div>

<form method="post" action="<?php print path("visitas");?>" name="formVisit">
	<div id="new-visit">
		<div id="close"></div>
		<div class="visit-block">
			<span>Nombre</span><input type="text" class="input" name="name" id="input-name"/>
		</div>
		
		<div class="visit-block">
			<span>Comentario</span><textarea class="" name="comment"></textarea>
		</div>
	</div>

	<div id="menu-footer" class="margin-10">
		<ul class="menu-footer">
			<li class="footer-menu first li-comment addcommentli">
				<a href="#" title="Agregar comentario" id="add-comment" onclick="return false;">+ Agregar comentario</a>
			</li>
			<li class="footer-menu"><a href="<?php print path("");?>" title="Visitas">Principal</a></li>
			<li class="footer-menu"><a href="<?php print path("galeria");?>" title="Galer&iacute;a">Galer&iacute;a</a></li>
			<li class="footer-menu border-none"><a href="<?php print path("eventos");?>" title="Eventos">Eventos</a></li>
		</ul>
	</div>
</form>
