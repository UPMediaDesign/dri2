<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<main class="container principal">
	<div class="row">
        
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">
            <h2><?php echo $post->post_title;?></h2>
            <h3><?php echo get_field('texto_apoyo', $post->ID)?></h3>
            
		</div>

		<div class="col-md-10 col-md-offset-1 intro-content">
			<img src="<?php echo $bg[0]?>" alt="<?php echo $post->post_title; ?>">
		</div>

		<div class="col-md-8 col-md-offset-2 hard-content">
        	<?php echo $post->post_content?>
        </div>

        <div class="col-md-8 col-md-offset-2 col-sm-11 invite-area row">
        	<div class="clr-bg03 invite-text">
        		<p><?php echo $post->post_excerpt; ?></p>
        	</div>
        	
        </div>
	</div>
</main>



<?php get_footer('insider')?>