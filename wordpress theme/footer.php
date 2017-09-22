<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kalmarck
 */

?>

<footer>
		<div id="eventwrapper">
				<div class="threecolumns">
						<?php
												//Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "footer"
												//finns det värden så kommer dessa att skrivas ut
						?>
						<?php $loop = new WP_Query( array( 'post_type' => 'footer', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
						<?php while( $loop->have_posts() ) : $loop->the_post();

						$adress																				= get_field('adress');
						$epost_lank																= get_field('epost_lank');
						$epost_text																= get_field('epost_text');

						?>
						<p><?php echo $adress ?></p>
						<p>E-post <a mailto="<?php echo $epost_lank ?>"><?php echo $epost_text ?></a></p>
						<?php endwhile; wp_reset_query(); //Stänger while loopen?>
				</div>

				<div class="threecolumns">
					<?php
											//Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "sociala medier"
											//finns det värden så kommer dessa att skrivas ut
					?>
					<?php $loop = new WP_Query( array( 'post_type' => 'sociala_medier', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
					<?php while( $loop->have_posts() ) : $loop->the_post();

					$facebook																		= get_field('facebook');
					$twitter																			= get_field('twitter');
					$instagram																	= get_field('instagram');
					$googleplus																= get_field('googleplus');

					?>
						<p><?php echo the_title(); ?></p>
						<div class="socialwrapper">
							<?php if( !empty($facebook) ): // Kollar av, finns det ett värde i variabeln facebook_username så printas nedan ?>
									<p><a href="<?php echo $facebook ?>" target="_blank"><i class="fa fa-facebook-official socialfooter_facebook socialfooter" style="font-size:36px;"></i></a>
							<?php endif; ?>
							<?php if( !empty($twitter) ): // Kollar av, finns det ett värde i variabeln twitter_username så printas nedan ?>
									<a href="<?php echo $twitter ?>" target="_blank"><i class="fa fa-twitter socialfooter_twitter socialfooter" style="font-size:36px;"></i></a>
							<?php endif; ?>
							<?php if( !empty($instagram) ): // Kollar av, finns det ett värde i variabeln instagram_username så printas nedan ?>
									<a href="<?php echo $instagram ?>" target="_blank"><i class="fa fa-instagram socialfooter_instagram socialfooter" style="font-size:36px;"></i></a>
							<?php endif; ?>
							<?php if( !empty($googleplus) ): // Kollar av, finns det ett värde i variabeln linkedin_username så printas nedan ?>
									<a href="<?php echo $googleplus ?>" target="_blank"><i class="fa fa-google-plus socialfooter_googleplus socialfooter" style="font-size:36px;"></i></a></p>
							<?php endif; ?>
						</div>

						<?php endwhile; wp_reset_query(); //Stänger while loopen?>
				</div>
				<div class="threecolumns">
						<p>Bilder &copy; <a href="http://www.mattzbirath.se/" target="_blank">fotograf Mattz Birath</a></p>
						<p>Design &amp; produktion av <a href="http://www.midjich.com" taret="_blank">midjich.com</a></p>
				</div>
		</div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnTkE8Wf27qy4K4Nul_SLJPf-PtiEcPzY&callback=initMap">
</script>

<?php wp_footer(); ?>

</body>
</html>
