<?php get_header()?>

<div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">

        <div class="inner cover">
          <h1 class="cover-heading"><img src="<?php echo get_bloginfo('template_directory')?>/images/logo_white.png" width="300" alt=""></h1>
          <p class="lead"></p>
          <p class="lead">
            <a href="#" class="btn btn-lg btn-link" onClick="langChooser('esp')">ESPAÑOL</a>
            <a href="#" class="btn btn-lg btn-link" onClick="langChooser('eng')">ENGLISH</a>
          </p>
        </div>

        <div class="mastfoot">
          <div class="inner">
            <p><strong>Rosario Norte 615, Oficina 2004.</strong> Las Condes, Santiago, Chile · <strong>Tel (+56-2)2591 8800</strong> · Fax (+56-2)2591 8801 · CP: 7561211</p>
          </div>
        </div>

      </div>
    </div>
</div>

<?php $bigbgid = get_post_thumbnail_id(4)?>
<?php $bigbg = wp_get_attachment_image_src( $bigbgid, 'bigbox');?>

<?php $midbgid = get_post_thumbnail_id(9)?>
<?php $midbg = wp_get_attachment_image_src( $midbgid, 'mediumbox');?>

<?php $midtbgid = get_post_thumbnail_id(11)?>
<?php $midtbg = wp_get_attachment_image_src( $midtbgid, 'mediumbox');?>

<div id="boxes">
    <div id="spanish" class="container">
        <div class="row">
            
            <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_blue.png" alt="" class="img-responsive">

            <div class="col-md-7 col-esp big-box box">
                <div class="inside" style="background-image:url(<?php echo $bigbg[0]?>); background-repeat: no-repeat; background-size: cover;">
                    <div class="col-md-5 clr-bgop01 col-box">
                        <h2><a href="<?php echo get_page_link(4)?>" rel="nofollow" title="Ir a Nuestra Firma">Nuestra <br><strong>Firma</strong></a></h2>
                        <p>Nullam eros tortor, consectetur ut lacus et, venenatis mollis elit.</p>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo get_page_link(4)?>" rel="nofollow" title="Ir a Nuestra Firma" class="read-more-box">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-xs-6 col-esp half-box box area" style="background-image:url(<?php echo $midbg[0]?>); background-repeat: no-repeat; background-size: cover;">
                <div class="col-md-7 clr-bg02 col-box">
                    <h2><a href="<?php echo get_page_link(9)?>">Áreas de <br><strong>Práctica</strong></a></h2>
                    <p>Nullam eros tortor, consectetur ut lacus et, venenatis mollis elit.</p>
                    <div class="pull-right">
                        <a href="<?php echo get_page_link(9)?>" class="read-more-box">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-xs-6 col-esp half-box box" style="background-image:url(<?php echo $midtbg[0]?>); background-repeat: no-repeat; background-size: cover;">
                <div class="col-md-7 clr-bg02 col-box">
                    <h2><a href="<?php echo get_page_link(11)?>"><strong><?php echo get_the_title(11)?></strong></a></h2>
                    <div class="pull-right">
                        <a href="<?php echo get_page_link(11)?>" class="read-more-box">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="insiderfoot col-xs-12">
                <p><strong>Rosario Norte 615, Oficina 2004.</strong> Las Condes, Santiago, Chile · <strong>Tel (+56-2)2591 8800</strong> · Fax (+56-2)2591 8801 · CP: 7561211</p>
            </div>
            
        </div>
    </div>
    
    <div id="english" class="container">
        <div class="row">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_blue.png" alt="" class="img-responsive">

            <div class="col-md-7 col-esp big-box box">
                <div class="inside" style="background-image: url(<?php echo $bigbg[0]?>);  background-repeat: no-repeat; background-size: cover;">

                    <div class="col-md-5 clr-bgop01 col-box">
                        <h2><a href="<?php echo get_page_link(4)?>" rel="nofollow" title="Ir a Nuestra Firma">Nuestra <br><strong>Firma</strong></a></h2>
                        <p>Nullam eros tortor, consectetur ut lacus et, venenatis mollis elit.</p>
                    </div>

                    <div class="pull-right">
                        <a href="<?php echo get_page_link(4)?>" rel="nofollow" title="Ir a Nuestra Firma" class="read-more-box">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                    </div>

                </div>
            </div>

            <div class="col-md-5 col-xs-6 col-esp half-box box area" style="background-image:url(<?php echo $midbg[0]?>); background-repeat: no-repeat; background-size: cover;">
                <div class="col-md-7 clr-bg02 col-box">
                    <h2><a href="<?php echo get_page_link(9)?>">Áreas de <br><strong>Práctica</strong></a></h2>
                    <p>Nullam eros tortor, consectetur ut lacus et, venenatis mollis elit.</p>
                    <div class="pull-right">
                        <a href="<?php echo get_page_link(9)?>" class="read-more-box">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-xs-6 col-esp half-box box" style="background-image:url(<?php echo $midtbg[0]?>); background-repeat: no-repeat; background-size: cover;">
                <div class="col-md-7 clr-bg02 col-box">
                    <h2><a href="<?php echo get_page_link(11)?>"><strong><?php echo get_the_title(11)?></strong></a></h2>
                    <div class="pull-right">
                        <a href="<?php echo get_page_link(11)?>" class="read-more-box">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="insiderfoot col-xs-12">
                <p><strong>Rosario Norte 615, Oficina 2004.</strong> Las Condes, Santiago, Chile · <strong>Tel (+56-2)2591 8800</strong> · Fax (+56-2)2591 8801 · CP: 7561211</p>
            </div>
            

    </div>  
</div>   

<?php
    $bgimg = get_field('home_background', 'options');
    $bs = array();
    foreach($bgimg as $b):
        array_push($bs , $b['imagen']);
    endforeach;
    $selectedBg = array_rand($bs , 1); 
?>

<style type="text/css">
body.home{background-image: url('<?php echo $bs[$selectedBg];?>'); background-repeat:  no-repeat; background-size: cover; background-position: top center; background-attachment: fixed; }
</style>

<script>
function langChooser(lang){
    $('.site-wrapper').fadeOut('400' , function() {
        if( lang == 'eng'){
            $('body').addClass('totop');
            $('#english').fadeIn('slow');
            
        }else if( lang == 'esp'){
            $('body').addClass('totop');
            $('#spanish').fadeIn('slow')
        }
    });
}
</script>

<?php get_footer()?>