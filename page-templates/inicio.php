<?php /* Template Name: Inicio */ ?>

		<div class="contenedor-section" id="inicio">

					<div class="contenido-inicio">  <?php the_content() ?> 
						<div class="datos-otra-doctora">
							<h3><?php echo CFS()->get('nombre_doctora'); ?></h3>
							<h3><?php echo CFS()->get('mp'); ?></h3>
							<h3><?php echo CFS()->get('mn'); ?></h3>	
						</div>	
						
						<div class="botones"> 
							<?php $fields = CFS()->get( 'botones' );
								foreach ( $fields as $field ) { ?>
								
								<a href="<?php echo $field['url']; ?>" class="btn <?php echo $field['boton_clase']; ?>"><?php echo $field['texto_boton']; ?></a>   
								   
								
								<?php }?>
						</div>

					</div>	
					<div class="mucho-mas"> 
						<h2>  <?php echo CFS()->get( 'titulo_pagina' );?> </h2>
						<div class="slide-dieta"> <?php echo do_shortcode('[URIS id=7]');   ?></div>
					</div>
					


		</div>
