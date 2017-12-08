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
    <?php
        echo file_get_contents(get_template_directory_uri()."/assets/img/services.svg", false, stream_context_create($arrContextOptions));
    ?>
</section>
<?php get_footer(); ?>
