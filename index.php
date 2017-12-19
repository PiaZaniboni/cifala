<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cifala
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	

<?php  $count = 0;
	// The Query
$the_query = new WP_Query( array( 'post_type' => 'page', 'order' => 'ASC' )  );
	// The Loop
	if ( $the_query->have_posts() ) { 
				while ( $the_query->have_posts() ) {
					$the_query->the_post(); $count++; 


		if ($count == 1){ //SI ES LA PRIMERA PAGINA DEL LOOP 
		
			 include(TEMPLATEPATH .'/page-templates/inicio.php'); //LLAMO TEMPLATE 

		 } else if ($count == 2) { //SI ES LA SEGUNDA PAGINA DEL LOOP 

			 include(TEMPLATEPATH .'/page-templates/sobre-la-doctora.php'); //LLAMO TEMPLATE 
		
		 } else if ($count == 3) { //SI ES LA TECERA PAGINA DEL LOOP

			include(TEMPLATEPATH .'/page-templates/servicios.php'); //LLAMO TEMPLATE 

		 } else if ($count == 4) { //SI ES LA TECERA PAGINA DEL LOOP

			include(TEMPLATEPATH .'/page-templates/contacto.php'); //LLAMO TEMPLATE 

		}





				}
				wp_reset_postdata();
			} else {
				// no posts found
			} ?>	

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
