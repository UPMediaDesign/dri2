<?php
/*
Template Name: Contacto
*/
?>
<?php get_header('insider');?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'footimage' ); ?>

<main class="container principal">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 liner-bottom bajada">

			 	<h2><?php echo $post->post_title?></h2>
        <h3><?php echo $post->post_excerpt; ?></h3>

		</div>
	</div>
</main>

<section class="container ">
    <div class="row">

        <div class="col-md-10 col-md-offset-1 col-esp map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.7288313270174!2d-70.57479794956548!3d-33.404238102433084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662ced8931b6443%3A0xef31de536dc3b3c8!2sRosario+Nte+615%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1469642082246" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section class="container contact-area">
    <div class="row">
        
         <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
         	 <?php echo do_shortcode('[contact-form-7 id="70" title="Formulario de Contacto"]'); ?>
         </div>
        
    </div>
</section>

<style>
#map{ width:100%; height:500px;}
.gm-style-iw *{ color:#000;}
#map{ background-color:#ecf0f1;}
</style>

<?php get_footer('insider')?>