<div id="home-events">
	<div id="home">
		<span id="head-feedback">Eventos recientes y por venir</span>
		<div id="visitas" class="scroll-pane events">
			<?php foreach($events as $event) { ?>
				<div class="visita">
					<span class="name bold"><?php print $event["Text_Date"];?> <?php print $event["Title"];?> (<?php print $event["Location"];?>)</span>
					<span class="comment">"<?php print $event["Content"];?>"</span>
				</div>
			<?php } ?>
		</div>
		
		<div id="events-past">
			<div class="arrow-right rotate">&nbsp;</div>
			<span id="cpast-events">Pasados</a>
		</div>
	</div>

	<div id="menu-footer" class="margin-20">
		<ul class="menu-footer">
			<li class="footer-menu first li-comment">
				<a href="<?php print path("");?>" title="Principal">Principal</a>
			</li>
			<li class="footer-menu">
				<a href="<?php print path("visitas");?>" title="Visitas">Visitas</a>
			</li>
			<li class="footer-menu border-none">
				<a href="<?php print path("galeria");?>" title="Galer&iacute;a">Galer&iacute;a</a>
			</li>
		</ul>
	</div>
</div>

<div id="home-past-events">
	<div id="home">
		<span id="head-feedback">Eventos recientes y por venir</span>
		<div id="visitas" class="scroll-pane events2">
			<span class="past-title">Pasados</span>
			<div class="visita">
				<span class="name bold">12/12/2012 Nombre del evento (Lugar del evento)</span>
				<span class="comment">"Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba"</span>
				
				<div class="visit-gallery">
					<div class="thumb-gallery">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs_thumb.png"  class="img-thumb-gallery" rel="codejobs"  title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs2_thumb.png" class="img-thumb-gallery" rel="codejobs2" title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs_thumb.png"  class="img-thumb-gallery" rel="codejobs"  title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs2_thumb.png" class="img-thumb-gallery" rel="codejobs2" title="Thumb" alt="Thumb">
					</div>
					
					<img src="<?php print $this->themePath; ?>/css/images/codejobs.png" class="image-gallery" title="Thumb" alt="Thumb">
				</div>
			</div>
			
			
			<div class="visita">
				<span class="name bold">12/12/2012 Nombre del evento (Lugar del evento)</span>
				<span class="comment">"Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba"</span>
				
				<div class="visit-gallery">
					<div class="thumb-gallery">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs_thumb.png"  class="img-thumb-gallery" rel="codejobs"  title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs2_thumb.png" class="img-thumb-gallery" rel="codejobs2" title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs_thumb.png"  class="img-thumb-gallery" rel="codejobs"  title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs2_thumb.png" class="img-thumb-gallery" rel="codejobs2" title="Thumb" alt="Thumb">
					</div>
					
					<img src="<?php print $this->themePath; ?>/css/images/codejobs.png" class="image-gallery" title="Thumb" alt="Thumb">
				</div>
			</div>
			
			<div class="visita">
				<span class="name bold">12/12/2012 Nombre del evento (Lugar del evento)</span>
				<span class="comment">"Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba Este es un comentario de prueba"</span>
				
				<div class="visit-gallery">
					<div class="thumb-gallery">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs_thumb.png"  class="img-thumb-gallery" rel="codejobs"  title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs2_thumb.png" class="img-thumb-gallery" rel="codejobs2" title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs_thumb.png"  class="img-thumb-gallery" rel="codejobs"  title="Thumb" alt="Thumb">
						<img src="<?php print $this->themePath; ?>/css/images/codejobs2_thumb.png" class="img-thumb-gallery" rel="codejobs2" title="Thumb" alt="Thumb">
					</div>
					
					<img src="<?php print $this->themePath; ?>/css/images/codejobs.png" class="image-gallery" title="Thumb" alt="Thumb">
				</div>
			</div>
		</div>
	</div>

	<div id="menu-footer" class="margin0">
		<span class="return-events">Regresar</span>
		<ul class="menu-footer">
			<li class="footer-menu first li-comment">
				<a href="<?php print path("");?>" title="Principal">Principal</a>
			</li>
			<li class="footer-menu">
				<a href="<?php print path("visitas");?>" title="Visitas">Visitas</a>
			</li>
			<li class="footer-menu border-none">
				<a href="<?php print path("galeria");?>" title="Galer&iacute;a">Galer&iacute;a</a>
			</li>
		</ul>
	</div>
</div>
