<?php get_header('insider');?>

<main class="container principal">
    <div class="row">

        <div class="col-md-10 col-md-offset-1 liner-bottom bajada">
            <?php $postt = get_post(13) ?>
            <h2><?php echo $postt->post_title; ?></h2>
            <h3><?php echo $postt->post_excerpt; ?></h3>
        </div>

    </div>
</main>

<section class="container news">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <?php 
            $news = get_posts(array('post_type' => 'post' , 'numberposts' => -1));
            foreach($news as $note){?>

            <figure class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<!--                 <figcaption class="news-date">
                    <span><?php //echo get_the_date('d' , $note->ID)?></span>
                    <small><?php //echo get_the_date('M' , $note->ID)?> <?php //echo get_the_date('Y' , $note->ID)?></small>
                </figcaption> -->
                        
                <a href="<?php echo get_permalink($note->ID)?>">
                    <?php echo get_the_post_thumbnail($note->ID , 'route' , array('class' => 'img-responsive'))?>
                </a>
                        
                <figcaption class="news-abstract">
                    <h3><?php echo $note->post_title?></h3>
                    <p><?php echo substr($note->post_content, 0, 90); ?>...</p>
                    <a href="<?php echo get_permalink($note->ID)?>">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                    <div class="clear miniseparator"></div>
                </figcaption>

            </figure>

            <?php }?>

            <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-8">
                <?php //wp_pagenavi(); ?>
            </div>

        </div>

    </div>
</section>

<?php get_footer('insider')?>