<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer white-content" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="pagetitle">
					<h2><?php the_title(); ?></h2>
				</div>
	
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4 Coll-8">
							<div class="adress-info">
								<p><strong>Rijschool Uniek</strong></p>
								<p>Cornelis schuytlaan 186<br/>
								2324VD  Leiden</p>
								<p>Email: info@rijschool-uniek.nl<br/>
								Tel: 071-80 80 149<br/>
								Mobiel: 06-480 38 209</p>
								<p>Rekeningnummer: ING Bank NL48INGB0004931703</p>
								<p>KVK nummer: 55331750</p>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8 Coll-8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

