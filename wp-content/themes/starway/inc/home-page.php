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
            <div class="header-content col-md-8 vertical-center">
                <div class="skew-left additional-bg smaller bg-gradient"></div>
                <div class="skew-right additional-bg bigger bg-gradient"></div>
                <div class="group block-reveal">
                    <div class="sliding-in">
                        <h1 class="light-text space-bottom-x2">FEW WORDS ABOUT COMPANY</h1>
                        <p class="light-text">Lorem ipsum dolor sit amet, consectetur a dipiscing elit, sed do eiusmod tempor i
                            ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco</p>
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
                <div class="walking-block" data-step="230">
                    <div class="skew-left accent-block accent-red"></div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-first skew-plus-9 fade-me-in">
                            <span>
                                <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/1.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
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
                            <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                              <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/2.svg", false, stream_context_create($arrContextOptions)); ?>
                              </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/3.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item fade-me-in">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/4.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item fade-me-in">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/5.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-inside fade-me-in">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/6.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-inside fade-me-in">
                            <span>
                                <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/7.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
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
                                <a href="#" class="skew-more">
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
                <div class="walking-block" data-step="230">
                    <div class="skew-left accent-block accent-black"></div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item skew-plus-9 fade-me-in">
                                <span>
                                    <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/graphic-design.svg", false, stream_context_create($arrContextOptions)); ?>
                                   <span>Graphic Design</span>
                                </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-plus-9 fade-me-in">
                               <span>
                                    <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/logo-design.svg", false, stream_context_create($arrContextOptions)); ?>
                                   <span>Logo Design</span>
                                </span>
                            </div>
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
                            <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                              <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/ui-ux.svg", false, stream_context_create($arrContextOptions)); ?>
                                 <span>UI/UX Design</span>
                              </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-plus-45 fade-me-in">
                                <span>
                                    <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/web-design.svg", false, stream_context_create($arrContextOptions)); ?>
                                    <span>Web Design</span>
                                </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-plus-45 skew-inside fade-me-in">
                                 <span>
                                     <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/app-dev.svg", false, stream_context_create($arrContextOptions)); ?>
                                     <span>App Development</span>
                                </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item fade-me-in">
                                <span>
                                     <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/seo.svg", false, stream_context_create($arrContextOptions)); ?>
                                    <span>SEO Promotion</span>
                                </span>
                            </div>
                            <div class="block-skew skew-left block-item fade-me-in">
                                <span>
                                     <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/services/qa.svg", false, stream_context_create($arrContextOptions)); ?>
                                    <span>Quality Assurance</span>
                                </span>
                            </div>
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
            <div class="header-content col-md-8 vertical-center">
                <div class="walking-block" data-step="230">
                    <div class="skew-left accent-block accent-red"></div>
                </div>
                <div class="skew-left additional-bg smaller bg-gradient"></div>
                <div class="skew-right additional-bg bigger bg-gradient"></div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/victoria.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title flexbox-container">
                                    <div class="company-logo vertical-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/law.svg" />
                                    </div>
                                    LAW Company
                                </div>
                                <p class="light-text testimonial col-md-10">Lorem ipsum dolor sit amet, consectetur a dipiscing elit, sed do eiusmod tempor i
                                    ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur a dipiscing elit, sed do eiusmod tempor i
                                    ncididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="author pull-right light-text">
                                    VIKTORIYA BONDARYK-CROSKEY
                                    <div class="author-position text-right">
                                        MARKETING CMO
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/victoria.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title flexbox-container">
                                    <div class="company-logo vertical-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/law.svg" />
                                    </div>
                                    LAW Company
                                </div>
                                <p class="light-text testimonial">Lorem ipsum dolor sit amet, consectetur a dipiscing elit, sed do eiusmod tempor i
                                    ncididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="author pull-right light-text space-top-x2">
                                    BONDARYK-CROSKEY
                                    <div class="author-position">
                                        MARKETING CMO
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clients-slide">
                                <div class="client-photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/victoria.jpg" /></div>
                                <div class="light-text space-bottom-x2 client-title flexbox-container">
                                    <div class="company-logo vertical-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/law.svg" />
                                    </div>
                                    LAW Company
                                </div>
                                <p class="light-text testimonial">Lona aliqua.
                                </p>
                                <div class="author pull-right light-text space-top-x2">
                                    VIKTORIYA BON
                                    <div class="author-position">
                                        MARKETING CMO
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






<!--<div class="row form-group">-->
<!--    <div class="col-md-6">[text* client-name class:form-control placeholder:"Your Name" ]</div>-->
<!--    <div class="col-md-6">[select* selected-services id:selected-services class:form-control placeholder:"Service" "Logo Design" "Web design" "UX/UI design" "iOS Development" "Graphic design" "Branding" "App Development" "Quality Assurance" "Content management" "Seo promotion" "Infrastructure management and information security services" "Technical Support"  "Аrchitectural design"  "Photo & Video Graphic"]</div>-->
<!--</div>-->
<!--<div class="row form-group">-->
<!--    <div class="col-md-6"> [email* client-email class:form-control placeholder:"Your Email"]</div>-->
<!--    <div class="col-md-6"> [text*  client-Phone class:form-control class:only-number placeholder:"Your Phone"]</div>-->
<!--</div>-->
<!--<div class="row form-group">-->
<!--    <div class="col-md-12">[textarea client-message class:form-control placeholder:"Tell Your Vision"]</div>-->
<!--    <div class="col-md-12 space-top-x2">[submit class:btn  class:btn-medium class:pull-right class:btn-action "Get Started"]</div>-->
<!--</div>-->
<?php get_footer(); ?>
