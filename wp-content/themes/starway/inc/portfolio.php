<?php
/*
Template Name: Portfolio test
*/

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

?>
<?php get_header(); ?>

<div class="landing-page">
    <div class="landing-header ">
        <h1 class="entry-title text-center space-bottom-x2">Network Security & Services</h1>
        <div class="block-reveal dark col-md-5 center-block">
            <div class="sliding-in">
                <p class="text-center ">Organisations face a complex threat landscape with an increasing rate of cyberattacks. Mobility, bring your own device, virtualisation, the cloud, and social media have opened new doors into your organisation.</p>
            </div>
        </div>
        <div class="fade-block light"></div>
        <div class="particles-js"></div>
    </div>
    <section class="group ui-ux-section">
        <div class="container flex-vertical-center">
            <div class="group col-md-6 ">
                <div class="block-reveal dark group">
                    <div class="sliding-in">We provide you with the cybersecurity expertise and experience that you need to secure your organisation. Take advantage of our comprehensive digital security solutions that span your IT infrastructure, on-premises and in the cloud, to respond swiftly to any security incident.</div>
                </div>
                <div class="block-reveal dark group space-top-x2 delay1 on-screen">
                    <div class="sliding-in">
                        <h3 class="space-bottom">The service provides:</h3>
                        <ul type="square" class="list-small">
                            <li>24/7 firewall and security event monitoring, generating immediate alerts and responses for service outages, security threats, and breaches associated with critical Internet access points;</li>
                            <li>Complete system maintenance that incorporates rule-based backup and restoration, software upgrades, patches, and system configuration;</li>
                            <li>Access to highly trained security experts who act as an extension of your in-house IT team, providing analysis, configuration, set-up, alerts, and 24/7 management of the firewall.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/wp-content/themes/starway/assets/img/security.png" class="image"/>
            </div>
    </section>
    <section id="contacts" class="contacts-block contacts-block-light group viewpoint">
        <div class="container">
            <div class="row space-top-x2 space-bottom-x2">
                <div class="section-title light-text text-center">Contact Us</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="flexbox-container">
                    <div class="col-md-8 light-text vertical-center"> [contact-form-7 id="10" title="Contacts"] </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
