<?php
/*
Template Name: Portfolio Cats
*/

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

?>
<?php get_header(); ?>

<div class="portfolio-page cats-price-tag">

    <section class="port-header-bg">
        <div class="container">
            <div class="landing-header col-md-6">
                <h1 class="entry-title cats-color text-left space-bottom-x2">Kitties Illustrations</h1>
                <div class="block-reveal">
                    <div class="sliding-in">
                        <p>The customer is a master who is engaged in the manufacture of cats dolls on a variety of topics. He ordered the development of doll's price labels, which should display a sticker with illustration of the product.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fade-in"><div class="portf_header_logo fade-me-in center-block"><img alt="Kitties Preview Picture" class="shadow-block" src="/wp-content/themes/starway/assets/img/portfolio/cats/cats-preview.jpg" /></div></div>
        </div>
    </section>

    <section class="logo-anatomy zechat-light spacein-bottom-10per">
        <div class="container light-text">
            <div class="row space-top-x2">
                <div class="section-title text-dark group" title="Kitties">
                    Kitties
                </div>
            </div>
        </div>

        <div class="container flex-vertical-center space-top-15per">
            <div class="group col-md-12 center-block fade-in">
                <div class="swiper-container multiple-slides cats-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img alt="Kitty 1" class="image fade-me-in" src="/wp-content/themes/starway/assets/img/portfolio/cats/1s.jpg"/></div>
                        <div class="swiper-slide"><img alt="Kitty 2" class="image fade-me-in" src="/wp-content/themes/starway/assets/img/portfolio/cats/2s.jpg"/></div>
                        <div class="swiper-slide"><img alt="Kitty 3" class="image fade-me-in" src="/wp-content/themes/starway/assets/img/portfolio/cats/3s.jpg"/></div>
                        <div class="swiper-slide"><img alt="Kitty 4" class="image fade-me-in" src="/wp-content/themes/starway/assets/img/portfolio/cats/4s.jpg"/></div>
                        <div class="swiper-slide"><img alt="Kitty 5" class="image fade-me-in" src="/wp-content/themes/starway/assets/img/portfolio/cats/5s.jpg"/></div>
                        <div class="swiper-slide"><img alt="Kitty 6" class="image fade-me-in" src="/wp-content/themes/starway/assets/img/portfolio/cats/6s.jpg"/></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="portf-implementation">
        <div class="container space-bottom-x4">
            <div class="row space-top-x2">
                <div class="section-title zechat-color2 myatelier-color2 group" title="Implementation">
                    Implementation
                </div>
            </div>
        </div>
        <div class="container flex-vertical-center space-top-10per">
            <div class="col-md-10 center-block fade-in">
                <img alt="Kitty Price tag mockup" src="/wp-content/themes/starway/assets/img/portfolio/cats/cat_mockup.jpg" class="image fade-me-in" />
            </div>
        </div>
    </section>
    <section id="contacts" class="contacts-block group viewpoint">
        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/contact-stripe.svg", false, stream_context_create($arrContextOptions)); ?>
        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/contact-triangle.svg", false, stream_context_create($arrContextOptions)); ?>

        <div class="container">
            <div class="row space-top-x2 space-bottom-x2">
                <div class="section-title light-text text-center">
                    Contact Us
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="flexbox-container" >
                    <div class="col-md-8 vertical-center light-text">
                        <?php echo do_shortcode('[contact-form-7 id="10" title="Contacts"]')?>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<?php get_footer(); ?>
