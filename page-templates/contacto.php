<?php /* Template Name: Contacto */ ?>

<div class="contenedor-section" id="contacto">
			<div class="titulo-google"><h2>  <?php echo CFS()->get('titulo_pagina'); ?> </h2></div>
			<div  class="mapa-google"><div id="map"></div></div>
			
			<div class="consultorios">		
				<?php $fields = CFS()->get( 'consultorios' );
				$count=0;
						foreach ( $fields as $field ) {  ?>
						<div class="datos-consultorios">	
						 	<h2><strong><?php echo $field['nombre']; ?></strong>  <?php echo $field['direccion']; ?></h2>
						 	<?php if (  $count == 0) { ?>
						 	<h4><?php echo CFS()->get('horarios_turnos'); ?></h4>
						 	<h4><?php echo CFS()->get('horarios_turnos_s_y_d'); ?></h4>
						 	<?php } ?>
						 	<h3><?php echo $field['numero_de_telefono']; ?></h3>
						</div>			   
				<?php $count++;}?>
			</div>

<div class="imagen-logo"><img src="<?php echo get_template_directory_uri () . '/img/contacto.png'?>" alt="logo-analia-cifala"></div>



</div> <!--  //cierrra contenedor section -->




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZYuaTtBFtI6w3Sgjis1VQV2GEQ-nxAEg&callback=initMap" async defer></script>
<script type="text/javascript">
function initMap() {
	var mapDiv = document.getElementById('map');
	var map = new google.maps.Map(mapDiv, {
	  center: {lat:-34.8914907, lng:-58.012289},
	  zoom: 12
	});

        //Cekym
        var contentCekym = '<div id="content" class="contenedores-mapita">'+									
				  '<h2>Cekym</h2>'+
				  '<div>'+
				  '<strong>Calle 473 bis, Nº 646 e/ 14b y 14c, City Bell</strong><br>'+
				  '<p>Para pedido de turnos:<br>Lunes a viernes de 8:00 a 20:00 Hs<br>Sábados de 9:00 a 13:00<br>(0221) 4722249</p>' +
				  '<a href="https://www.google.com/maps?ll=-34.8725,-58.045438&z=17&t=m&hl=es-419&gl=AR&mapclient=embed&cid=621696917320624350">Ver en google maps</a>'
				  '</div>'+
				  '</div>';

					var infowindowCekym = new google.maps.InfoWindow({
					content: contentCekym
					});
					
          			markerCekym = new google.maps.Marker({ map:map, animation: google.maps.Animation.DROP,
					position: new google.maps.LatLng(-34.8725, -58.045438),
					title: 'Cekym',

					icon: '<?php echo get_template_directory_uri () . "/img/map-icon.png"?>' // null = default icon
          
					});
					markerCekym .addListener('click', function() {
					infowindowCekym.open(map, markerCekym);
					});

		//Nuevo Consultorio
        var contentConsultorio = '<div id="content" class="contenedores-mapita">'+									
				  '<h2>C.E.M</h2>'+
				  '<div>'+
				  '<strong>Calle 137 Nº 566 e/44 y 43, La Plata.</strong><br>'+
				  '<p>Para pedido de turnos:<br>(0221) 4700840 (líneas rotativas).</p>' +
				  '<a href="https://www.google.com/maps?ll=-34.938449,-57.987268&z=21&t=m&hl=es-419&gl=US&mapclient=apiv3&cid=14809004290581032440">Ver en google maps</a>'
				  '</div>'+
				  '</div>';

					var infowindowConsultorio = new google.maps.InfoWindow({
					content: contentConsultorio
					});
					
          			markerConsultorio = new google.maps.Marker({ map:map, animation: google.maps.Animation.DROP,
					position: new google.maps.LatLng(-34.93851, -57.987232),
					title: 'C.E.M',

					icon: '<?php echo get_template_directory_uri () . "/img/map-icon.png"?>' // null = default icon
          
					});
					markerConsultorio .addListener('click', function() {
					infowindowConsultorio.open(map, markerConsultorio);
					});
			
							
}/*Cierre InitMap*/	
</script>
