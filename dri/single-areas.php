<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<main class="container principal">
	<div class="row">
        
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">
            <h2><?php echo $post->post_title;?></h2>
            <h3><?php echo get_field('texto_apoyo', $post->ID)?></h3>
            
		</div>

    </div>
</main>


<div class="megacontainer">
    <div class="row">

        <div class="col-md-12 intro-content col-esp" style="background-image:url(<?php echo $bg[0]?>);background-size: cover; min-height: 320px; background-repeat: no-repeat; margin-top: 20px; background-position: center;">
		</div>

    </div>
</div>

<div class="container">
    <div class="row">

		<div class="col-md-8 col-md-offset-2 hard-content">
        	<?php echo $post->post_content?>
        </div>

        <div class="col-md-8 col-md-offset-2 col-sm-11 invite-area row">
        	<div class="clr-bg03 invite-text">
        		<p><?php echo $post->post_excerpt; ?></p>
        	</div>
        	
        </div>

	</div>
</div>



<?php get_footer('insider')?>