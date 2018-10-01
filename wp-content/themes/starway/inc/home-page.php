<?php
/*
Template Name: Home Page
*/

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

?>
<?php get_header(); ?>

<section class="main-header group viewpoint">
    <div class="container ">
        <div class="flexbox-container full-height">
            <div class="header-content col-md-10 vertical-center">
                <div class="skew-left additional-bg smaller bg-gradient"></div>
                <div class="skew-right additional-bg bigger bg-gradient"></div>
                <div class="group block-reveal">
                    <div class="sliding-in">
                        <h1 class="light-text space-bottom-x2">You have a dream<br/> we have a way - Star Way!</h1>
                        <p class="light-text col-md-10"> Your business deserves to grow up and to develop. You need more than just a
                            website. You need result and we know how to make it best. Even If your
                            project is small or difficult or completely crazy, in any case we realize it at
                            the highest level. We create a website design that will be perfect for your
                            company, and that’ll look and feel like your brand.<br/>Our services range from web site design to logo design, visual branding and
                        marketing.</p>
                        <a class="btn btn-action space-top-x2 show-contact-form">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
        echo file_get_contents(get_template_directory_uri()."/assets/img/parallels-left.svg", false, stream_context_create($arrContextOptions));
        echo file_get_contents(get_template_directory_uri()."/assets/img/parallels-right.svg", false, stream_context_create($arrContextOptions));
    ?>
</section>
<section class="group viewpoint">
    <?php
        echo file_get_contents(get_template_directory_uri()."/assets/img/triangles.svg", false, stream_context_create($arrContextOptions));
        echo file_get_contents(get_template_directory_uri()."/assets/img/para.svg", false, stream_context_create($arrContextOptions));
    ?>
    <div id="portfolio" class="group">
        <div class="parallax-background" data-smooth="-15"></div>
        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/triangle-reverse.svg", false, stream_context_create($arrContextOptions)); ?>
        <div class="container">
            <div class="fade-block"></div>
            <div class="row space-top-x2 ">
                <div class="section-title light-text group" title="Our Works">
                    Our Works
                </div>
            </div>
            <div class="group fade-in">
                <div class="walking-block" data-step="430">
                    <div class="skew-left accent-block accent-red"></div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <a href="/portfolio/my-atelier">
                                <div class="block-skew skew-left block-item skew-first skew-plus-9 fade-me-in">
                                    <span>
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/1.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </span>
                                </div>
                            </a>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <a href="/portfolio/build-dream">
                                <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                                  <span>
                                     <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/2.svg", false, stream_context_create($arrContextOptions)); ?>
                                  </span>
                                </div>
                            </a>
                            <a href="/portfolio/massive">
                                <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                                    <span>
                                         <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/3.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </span>
                                </div>
                            </a>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <a href="/portfolio/ze-chat">
                                <div class="block-skew skew-left block-item fade-me-in">
                                    <span>
                                         <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/4.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </span>
                                </div>
                            </a>
                            <a href="/portfolio/arseal">
                                <div class="block-skew skew-left block-item fade-me-in job_arseal">
                                    <span>
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/5.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </span>
                                </div>
                            </a>
                            <div class="block-skew skew-left block-item skew-inside fade-me-in">
                                <span>
                                     <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/6.svg", false, stream_context_create($arrContextOptions)); ?>
                                </span>
                            </div>
                            <a href="/portfolio/kitties">
                                <div class="block-skew skew-left block-item skew-inside fade-me-in">
                                    <span class="portfolio-item kitties_hp">

                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-minus-45 fade-me-in">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/8.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item show-more skew-minus-45 fade-me-in">
                                <a href="/portfolio" class="skew-more">
                                    <span class="unskew-child">More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-footer">
        <?php
            echo file_get_contents(get_template_directory_uri()."/assets/img/services-foot.svg", false, stream_context_create($arrContextOptions));
        ?>
    </div>
</section>
<section class="group viewpoint">
    <div id="services" class="group">
        <div class="services-stripe-block">
            <?php echo file_get_contents(get_template_directory_uri()."/assets/img/services-stripe.svg", false, stream_context_create($arrContextOptions)); ?>
        </div>
        <div class="container">
            <div class="row space-top-x2">
                <div class="section-title group" title="Our Services">
                    Our Services
                </div>
            </div>
            <div class="group fade-in">
                <div class="walking-block" data-step="430">
                    <div class="skew-left accent-block accent-black"></div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <a href="/graphic-design">
                                <div class="block-skew skew-left block-item skew-plus-9 fade-me-in">
                                    <span>
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/graphic-design.svg", false, stream_context_create($arrContextOptions)); ?>
                                       <span>Graphic Design</span>
                                    </span>
                                </div>
                            </a>
                            <a href="/logo-design">
                                <div class="block-skew skew-left block-item skew-plus-9 fade-me-in">
                                   <span>
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/logo-design.svg", false, stream_context_create($arrContextOptions)); ?>
                                       <span>Logo Design</span>
                                    </span>
                                </div>
                            </a>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <a href="/ui-ux-design">
                                <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                                  <span>
                                     <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/ui-ux.svg", false, stream_context_create($arrContextOptions)); ?>
                                     <span>UI/UX Design</span>
                                  </span>
                                </div>
                            </a>
                            <a href="/web-development">
                                <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                                    <span>
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/web-design.svg", false, stream_context_create($arrContextOptions)); ?>
                                        <span>Web Development</span>
                                    </span>
                                </div>
                            </a>
                            <a href="/app-development">
                                <div class="block-skew skew-left block-item skew-plus-45 skew-inside fade-me-in">
                                     <span>
                                         <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/app-dev.svg", false, stream_context_create($arrContextOptions)); ?>
                                         <span>App Development</span>
                                    </span>
                                </div>
                            </a>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <a href="/seo-promotion">
                                <div class="block-skew skew-left block-item fade-me-in">
                                    <span>
                                         <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/seo.svg", false, stream_context_create($arrContextOptions)); ?>
                                        <span>SEO Promotion</span>
                                    </span>
                                </div>
                            </a>
                            <a href="/branding">
                                <div class="block-skew skew-left block-item fade-me-in">
                                    <span>
                                         <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/branding.svg", false, stream_context_create($arrContextOptions)); ?>
                                        <span>Branding</span>
                                    </span>
                                </div>
                            </a>
                            <div class="block-skew skew-left block-item skew-inside fade-me-in">
                                <span>
                                     <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/security.svg", false, stream_context_create($arrContextOptions)); ?>
                                    <span>Network Security</span>
                                </span>
                            </div>
                            <div class="block-skew skew-left show-more block-item skew-inside fade-me-in">
                                <a href="#" class="skew-more">
                                    <span class="unskew-child">More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fade-block light"></div>
    </div>
</section>
<section class="group our-clients our-contacts viewpoint">
    <div class="particles-js"></div>
    <div class="fade-block reversed light"></div>

    <div class="skew-left cover-bg">
        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/clients-bg.svg", false, stream_context_create($arrContextOptions)); ?>
        <div class="our-clients-cover unskew-child">
            <div class="fade-block reversed unskew-child"></div>
        </div>
        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/contact-para.svg", false, stream_context_create($arrContextOptions)); ?>
        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/contact-para-2.svg", false, stream_context_create($arrContextOptions)); ?>
    </div>

    <div id="clients" class="container our-clients-block">
        <div class="row space-top-x2">
            <div class="section-title light-text group" title="Clients Comments">
               Clients Comments
            </div>
        </div>
        <div class="row flexbox-container">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="walking-block" data-step="430">
                    <div class="skew-left accent-block accent-red"></div>
                </div>
                <div class="skew-left additional-bg smaller bg-gradient"></div>
                <div class="skew-right additional-bg bigger bg-gradient"></div>
                <div class="swiper-nav ">
                    <img alt="navigation arrow left" class="swiper-nav-prev" src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_left.svg" />
                    <img alt="navigation arrow right" class="swiper-nav-next" src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_right.svg" />
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img alt="Helena" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/helena.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title space-top-x2 flexbox-container">
                                    dreamlifedispatch.com
                                </div>
                                <p class="light-text testimonial col-md-10">I am very pleased by the look of the website and its functionality! I also used their marketing service and I am very happy with their work and would recommend Star Way USA if you are looking to increase your market share.</p>
                                <div class="author pull-right light-text">
                                    Helena Rubina
                                    <div class="author-position text-right">
                                        CEO
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img alt="Victoria" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/victoria.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title space-top-x2 flexbox-container">
                                    <div class="flexbox-container company-logo vertical-center">
                                        <img alt="Law logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/law.svg" />
                                    </div>
                                    scoblawyers.com
                                </div>
                                <p class="light-text testimonial col-md-10">Thank you Starway usa for a great job. I definitely recommend this team. Everything is done in time and with really good quality. I’m sure, our cooperation will continue.</p>
                                <div class="author pull-right light-text space-top-x2">
                                    Viktoriya Bondaryk-Croskey
                                    <div class="author-position">
                                        CO-founder
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img alt="Rik" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/rik.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title space-top-x2 flexbox-container">
                                    <div class="flexbox-container company-logo vertical-center">
                                        <img alt="Starway" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/starway.svg" />
                                    </div>
                                    StarWay USA
                                </div>
                                <p class="light-text testimonial col-md-10">I sincerely thank you, Starway USA, for the excellent service and professionalism. It is very convenient to work with the site: a wonderful design and it’s very easy to manage it. It's nice to deal with professionals.</p>
                                <div class="author pull-right light-text space-top-x2">
                                    Rik Huk
                                    <div class="author-position">
                                        CEO
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img alt="Raphael" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/raphael.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title space-top-x2 flexbox-container">
                                    proserviceagency.com
                                </div>
                                <p class="light-text testimonial col-md-10">From the first day, guys understood what we were wanting. Everything, including  communication, speed, and quality was on the higher level and the result exceeded our expectations. We will be glad to work with you again.</p>
                                <div class="author pull-right light-text space-top-x2">
                                    Raphael Oganesyan
                                    <div class="author-position">
                                        CO-founder
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img alt="Tetyana" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/tetyana.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title space-top-x2 flexbox-container">
                                    Everbalance Yoga Barre Pilates
                                </div>
                                <p class="light-text testimonial col-md-10">I’m very satisfied with the results. During the development of the website, the managers and specialists of the company showed a high level of professionalism and interest in implementing our ideas.</p>
                                <div class="author pull-right light-text space-top-x2">
                                    Tetyana Boyeva
                                    <div class="author-position">
                                        CEO
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<?php get_footer(); ?>
