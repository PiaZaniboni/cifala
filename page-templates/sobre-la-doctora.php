<?php /* Template Name: Sobre la doctora */ ?>

		<div class="contenedor-section" id="sobre-la-doctora">

					<h2> <?php echo CFS()->get('titulo_pagina'); ?> </h2>
					<h3> <?php echo CFS()->get('subtitulo'); ?> </h3>
					<div class="contenedor-info">
						<img class="foto-doctora"src="<?php the_post_thumbnail_url(); ?>">
						<div class="texto">  <?php the_content() ?> </div>
					</div>
		</div>

