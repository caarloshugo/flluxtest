<?php $images    = glob("www/lib/themes/default/css/images/gallery/all/{*.gif,*.jpg,*.png,*.JPG}", GLOB_BRACE); ?>
<?php $images_sc = glob("www/lib/themes/default/css/images/gallery/sc/{*.gif,*.jpg,*.png,*.JPG}", GLOB_BRACE); ?>

<style>
#menu-footer { margin-top: 20px !important;}
</style>
<div id="gallery-div">
	<div id="home">
		<div id="gallery" class="scroll-pane">
			<?php 
				foreach($images as $key => $image) {
					$url =  explode("/", $image);
					
					$all   = $this->themePath . '/css/images/gallery/all/'   . $url[8];
					$thumb = $this->themePath . '/css/images/gallery/thumb/' . $url[8];
					

						echo '<img rel="'. $all . '" src="' . $thumb . '" alt="Imagen" title="Galeria de fotos"/>';
					
				} 
			?>
		</div>
	</div>

	<div id="menu-footer" class="margin-20">
		<span class="title-image"></span>
		
		<ul class="menu-footer">
			<li class="footer-menu first li-comment">
				<a href="<?php print path("");?>" title="Principal">Principal</a>
			</li>
			<li class="footer-menu">
				<a href="<?php print path("visitas");?>" title="Principal">Visitas</a>
			</li>
			<li class="footer-menu border-none">
				<a href="<?php print path("eventos");?>" title="">Eventos</a>
			</li>
		</ul>
	</div>
</div>

<div id="gallery-mini">
	<div id="left-arrow"></div>
	<div id="large-image"></div>
	<div id="right-arrow"></div>
	
	<div id="menu-footer" class="margin45 height70 sc-gallery">
		<?php 
			foreach($images_sc as $key => $image) {
				$url =  explode("/", $image);
				$all = $this->themePath . '/css/images/gallery/all/'   . $url[8];
				$sc  = $this->themePath . '/css/images/gallery/sc/'    . $url[8];
				
				echo '<img rel="' . $all . '" src="' . $sc . '" alt="Imagenes de galeria" title="Imagenes de galeria"/>';
			} 
		?>
		<span id="return-gallery">Regresar</span>
	</div>
</div>
