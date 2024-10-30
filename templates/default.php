<?php 
$uid = 'c4d-team-member-slider-'.uniqid();
?>
<script>
	(function($){
		$(document).ready(function(){
			teamMemberSlider['<?php echo $uid; ?>'] = <?php echo json_encode($params); ?>;
		});	
	})(jQuery);
</script>
<div class="c4d-team-member">
	<div class="c4d-team-member__slider">
		<div id="<?php echo esc_attr($uid); ?>">
			<?php 
				while ( $q->have_posts() ) :
					$p = $q->the_post(); 
					?>
					<div class="item">
						<div class="item-inner">
							<?php 
								global $post;
								$pid = get_the_ID();
								$role = get_post_meta($pid, 'c4d_team_member_role', true);
								$facebook = get_post_meta($pid, 'c4d_team_member_role', true);
								$twitter = get_post_meta($pid, 'c4d_team_member_role', true);
								$pinterest = get_post_meta($pid, 'c4d_team_member_role', true);
								$instagram = get_the_terms( $pid, 'product_cat' );
							?>
							<div class="image">
								<?php the_post_thumbnail('thumbnail', array( 'alt' => get_the_title() )); ?>
							</div>
							<?php the_title( '<h3 class="title">', '</h3>'); ?>
							<div class="role"><?php echo $role; ?></div>
							<div class="desc">
								<?php the_content(); ?>
							</div>
							<div class="social">
								<a href="<?php esc_attr($facebook); ?>"><i class="fa fa-facebook"></i></a>
								<a href="<?php esc_attr($twitter); ?>"><i class="fa fa-twitter"></i></a>
								<a href="<?php esc_attr($pinterest); ?>"><i class="fa fa-pinterest"></i></a>
								<a href="<?php esc_attr($instagram); ?>"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</div>
