<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingmid' ); ?>

<main class="container principal">
	<div class="row">

		<?php /*
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">

	      <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
	      <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>
		</div>
		*/ ?>

	</div>
</main>

<div class="megacontainer">
	<div class="row">

<?php /*

		<div class="col-md-12 intro-content col-esp">
 			<img style="max-width: 1280px; max-height: 320px;" src="<?php echo $service['imagen_destacada']?>" alt="<?php echo $post->post_title;?>">
 		</div>
*/ ?>

		<div class="col-md-12 intro-content" style="background-image:url(<?php echo get_field('imagen_destacada_interior', $post->ID);?>);background-size: cover; min-height: 320px; background-repeat: no-repeat; margin-top: 20px; background-position: center;">
		    <h2><?php echo get_field('titular_bajada', $post->ID);?></h2>
		    <h3><?php echo get_field('apoyo_bajada', $post->ID);?></h3>
		</div>

	</div>
</div>

<div class="container">
	<div class="row">
		<div class="title-container">
			<h1 class="titular-page"><?php echo $post->post_title?></h1>
		</div>
		<div class="col-md-8 col-md-offset-2 hard-content">
        	<?php echo $post->post_content?>
        </div>

	</div>
</div>

<?php get_footer('insider')?>