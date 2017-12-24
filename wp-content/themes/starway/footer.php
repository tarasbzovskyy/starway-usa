<?php

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
?>
	</div>

	<footer id="colophon" class="viewpoint">
        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/footer-triangle.svg", false, stream_context_create($arrContextOptions)); ?>
        <div class="container">
            <div class="site-footer ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title light-text space-bottom-x2">
                            Our<br/>Contacts
                        </div>
                        <div class="footer-info light-text">
                            <p>INFO@STARWAYUSA.COM</p>
                            <p>+1 (773) 312-38-87</p>
                        </div>
                        <a class="btn btn-action btn-medium btn-lined space-top-x2 show-contact-form">
                            Get Started
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="social-block group">
                            <div class="walking-block" data-step="230">
                                <div class="accent-block accent-red skew-right"></div>
                            </div>
                            <div class="row col-xs-6 col-md-12">
                                <div class="col-md-offset-4 col-xs-offset-0 col-md-3 space-top col-xs-6">
                                    <div class="block-skew skew-left block-item">
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/social/fb.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 space-top col-xs-6">
                                    <div class="block-skew skew-left block-item">
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/social/insta.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row space-top col-xs-6 col-md-12">
                                <div class="col-md-offset-3 col-xs-offset-0 col-md-3 col-xs-6 space-top">
                                    <div class="block-skew skew-left block-item">
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/social/g-plus.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 space-top col-xs-6">
                                    <div class="block-skew skew-left block-item ">
                                        <?php  echo file_get_contents(get_template_directory_uri()."/assets/img/social/linked.svg", false, stream_context_create($arrContextOptions)); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright light-text">&copy; 2017 All Rights Reserved. StarWay USA</p>
                </div>
            </div>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
