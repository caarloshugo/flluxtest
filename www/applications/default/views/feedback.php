<div id="home">
<span id="head-feedback">Escr&iacute;beme</span>
<div id="feedback">
	<form action="" method="post">
		<p>
			<span>* Nombre</span><br />
			<input class="input" type="text" name="name" id="input-name"/>
		</p>
		
		<p>
			<span>* Correo</span><br />
			<input class="input" type="text" name="emial" id="input-email"/>
		</p>
		
		<p>
			<span>Asunto</span><br />
			<input class="input" type="text" name="subject"/>
		</p>
		<p>
			<textarea name="message"></textarea>
		</p>
		<p>
			<input class="submit" type="submit" name="send" value="Enviar" id="input-send">
		</p>
	</form>
</div>

<div id="menu-footer" class="margin-0 feedback-menu">
	<ul class="menu-footer">
		<li class="footer-menu first"><a href="<?php print path("");?>" title="Principal">Principal</a></li>
		<li class="footer-menu"><a href="<?php print path("galeria");?>" title="Galer&iacute;a">Galer&iacute;a</a></li>
		<li class="footer-menu"><a href="<?php print path("visitas");?>" title="Visitas">Visitas</a></li>
		<li class="footer-menu border-none"><a href="<?php print path("eventos");?>" title="Eventos">Eventos</a></li>
	</ul>
</div>
