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

<section class="main-header group">
    <div class="container ">
        <div class="flexbox-container full-height">
            <div class="header-content col-md-8 vertical-center">
                <div class="skew-left additional-bg smaller bg-gradient"></div>
                <div class="skew-right additional-bg bigger bg-gradient"></div>
                <div class="group">
                    <h1 class="light-text space-bottom-x2">FEW WORDS ABOUT COMPANY</h1>
                    <p class="light-text">Lorem ipsum dolor sit amet, consectetur a dipiscing elit, sed do eiusmod tempor i
                        ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco</p>
                    <a class="btn btn-action space-top-x2 ">
                        Get Started
                    </a>
                </div>
            </div>
        </div>

    </div>
    <?php
        echo file_get_contents(get_template_directory_uri()."/assets/img/parallels-left.svg", false, stream_context_create($arrContextOptions));
        echo file_get_contents(get_template_directory_uri()."/assets/img/parallels-right.svg", false, stream_context_create($arrContextOptions));
    ?>
</section>
<section class="group">
    <div id="portfolio" class="group">
        <div class="container">
            <div class="fade-block"></div>
            <div class="row space-top-x2">
                <div class="section-title light-text group" title="Our Works">
                    Our Works
                </div>
            </div>
            <div class="group">
                <div class="skew-left accent-block accent-red"></div>
                <div class="row">
                    <div class="container-skew">
                        <div class="skew-center">
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-space">
                            </div>
                            <div class="block-skew skew-left block-item skew-plus-9 ">
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
                            <div class="block-skew skew-left block-item skew-plus-45">
                              <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/2.svg", false, stream_context_create($arrContextOptions)); ?>
                              </span>
                            </div>
                            <div class="block-skew skew-left block-item skew-plus-45">
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
                            <div class="block-skew skew-left block-item">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/4.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/5.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/6.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item">
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
                            <div class="block-skew skew-left block-item skew-minus-45">
                            <span>
                                 <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/portfolio/8.svg", false, stream_context_create($arrContextOptions)); ?>
                            </span>
                            </div>
                            <div class="block-skew skew-left block-item show-more skew-minus-45">
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
    <?php
        echo file_get_contents(get_template_directory_uri()."/assets/img/triangles.svg", false, stream_context_create($arrContextOptions));
    ?>
</section>
<?php get_footer(); ?>
