<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id()?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'lawyerphoto' ); ?>

<main class="container principal">
    <div class="row">

        <div class="col-md-10 col-md-offset-1 liner-bottom bajada">
                <h2><?php echo $post->post_title;?></h2>
                <h3><?php echo get_field('cargo_abogado', $post->ID);?></h3>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div id="breadcrumbs" class="hidden-xs">
                <ul>
                    
                    <li><a href="<?php echo get_bloginfo('url')?>">Home</a></li>
                    <li><a href="<?php echo get_bloginfo('url')?>/equipo/"><span class="fa fa-angle-right"></span> Equipo</a></li>
                    <li><strong><span class="fa fa-angle-right"></span> <?php echo $post->post_title?></strong></li>
                </ul>
            </div>
        </div>

        <figure class="lawyer col-md-8 col-md-offset-2 lawyer-file mobile">
            <!-- Visible en Mobile -->
            <aside class="col-esp col-xs-12 mobile">
                <figure class="col-xs-6 data col-esp">

                    <h2><?php echo $post->post_title;?></h2>
                    <h3><?php echo get_field('cargo_abogado', $post->ID);?></h3>
                    <a href="mailto:<?php echo get_field('mail_abogado', $post->ID);?>" rel="external" title="Enviar Correo a <?php echo $post->post_title?>">
                        <span class="fa fa-envelope"> Contactar</span>
                    </a>
                    
                </figure>
                <img src="<?php echo get_field('foto_perfil', $post->ID);?>" alt="<?php echo $post->post_title; ?>" class="col-xs-6 col-esp">
            </aside>
        </figure>

<?php /*
        <div class="col-md-8 col-md-offset-2 intro-content">
            <p><?php echo $post->post_excerpt;?></p>
        </div>
*/ ?>

        <figure class="lawyer col-md-8 col-md-offset-2 lawyer-file">
            <!-- Visible en Desktop -->
            <aside class="col-md-5 col-esp desktop">
                <img src="<?php echo get_field('foto_perfil', $post->ID);?>" alt="<?php echo $post->post_title; ?>">
                <figcaption class="clr-bg05 data">
                    <h2><?php echo $post->post_title;?></h2>   
                    <h3><?php echo get_field('cargo_abogado', $post->ID);?></h3>
                    <a href="mailto:<?php echo get_field('mail_abogado', $post->ID);?>" rel="external" title="Enviar Correo a <?php echo $post->post_title?>"><?php echo get_field('mail_abogado', $post->ID);?></a>
                </figcaption>
            </aside>

            <figcaption class="col-md-7 clr-bg05 col-esp info">
                <div class="invite-area">
                    <div class="quote-text">
                        <?php echo get_field('parrafo_de_referencia', $post->ID);?>
                    </div>
                </div>
                <p><?php echo $post->post_content ?></p>        
            </figcaption>

            <div class="clear miniseparator"></div>
            
            <div class="col-md-6 lawyer-file">
                <p><strong>Estudios:</strong> <br/><?php echo get_field('casa_estudios', $post->ID);?></p>
                <p><strong>Idiomas:</strong> <br/><?php echo get_field('manejo_idiomatico', $post->ID);?></p>
            </div>
            <div class="col-md-6 lawyer-file">
                <p><strong>Área de Práctica:</strong> <br/><?php echo get_field('abogado_area', $post->ID);?></p>
                <p><strong>Miembro de:</strong> <br/><?php echo get_field('membresia_abogado', $post->ID);?></p>
            </div>

        </figure>

        <?php /*<div class="col-md-8 col-md-offset-2 col-sm-11 invite-area row" style="background:url(<?php echo get_field('imagen_referencia', $post->ID);?>); background-size: 260px; background-color: #2c3e50; background-repeat: no-repeat; background-position: 100% 0px;">*/ ?>


    </div>
</main>


<?php get_footer('insider'); ?>