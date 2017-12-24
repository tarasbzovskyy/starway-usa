<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starway
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<?php wp_head(); ?>
    <?php if (is_home() || is_page_template( 'inc/home-page.php' )) {?>
        <style>
            .start #color-lines,.start #diag-lines{-webkit-animation:visibilityOFF .5s 1 forwards alternate ease}.info-block,.logo-loading .loading-block{position:absolute;top:50%;margin:0 auto;left:-50%;right:-50%}.logo-loading{display:block;background:#fff;position:absolute;width:100%;height:100%;z-index:2;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.start.logo-loading{-webkit-transform:translate(-105%,-50%);-ms-atransform:translate(-105%,-50%);transform:translate(-105%,-50%);-webkit-transition:-webkit-transform .5s ease;-o-transition:transform .5s ease;transition:transform .5s ease;transition:transform .5s ease,-webkit-transform .5s ease;-webkit-transition-delay:4s;-o-transition-delay:4s;transition-delay:4s}.logo-loading .loading-block{width:50%;overflow:hidden;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.start #color-lines{animation:visibilityOFF .5s 1 forwards alternate ease;-webkit-animation-delay:1.3s;animation-delay:1.3s;-webkit-transform:translate(15.9em,27.7em);-ms-transform:translate(15.9em,27.7em);transform:translate(15.9em,27.7em);-webkit-transition:-webkit-transform 1.2s cubic-bezier(.36,.6,.68,.19);-o-transition:transform 1.2s cubic-bezier(.36,.6,.68,.19);transition:transform 1.2s cubic-bezier(.36,.6,.68,.19);transition:transform 1.2s cubic-bezier(.36,.6,.68,.19),-webkit-transform 1.2s cubic-bezier(.36,.6,.68,.19)}.start #diag-lines{animation:visibilityOFF .5s 1 forwards alternate ease;-webkit-animation-delay:1.4s;animation-delay:1.4s;-webkit-transform:translate(-14.8em,25.6em);-ms-transform:translate(-14.8em,25.6em);transform:translate(-14.8em,25.6em);-webkit-transition:-webkit-transform 1.1s cubic-bezier(.36,.6,.68,.19);-o-transition:transform 1.1s cubic-bezier(.36,.6,.68,.19);transition:transform 1.1s cubic-bezier(.36,.6,.68,.19);transition:transform 1.1s cubic-bezier(.36,.6,.68,.19),-webkit-transform 1.1s cubic-bezier(.36,.6,.68,.19);-webkit-transition-delay:.2s;-o-transition-delay:.2s;transition-delay:.2s}.start #hor-lines{-webkit-animation:visibilityOFF .5s 1 forwards alternate ease;animation:visibilityOFF .5s 1 forwards alternate ease;-webkit-animation-delay:1.3s;animation-delay:1.3s;-webkit-transform:translateX(31.1em);-ms-transform:translateX(31.1em);transform:translateX(31.1em);-webkit-transition:-webkit-transform 1.2s cubic-bezier(.36,.6,.68,.19);-o-transition:transform 1.2s cubic-bezier(.36,.6,.68,.19);transition:transform 1.2s cubic-bezier(.36,.6,.68,.19);transition:transform 1.2s cubic-bezier(.36,.6,.68,.19),-webkit-transform 1.2s cubic-bezier(.36,.6,.68,.19);-webkit-transition-delay:.1s;-o-transition-delay:.1s;transition-delay:.1s}.start #stars polygon{-webkit-animation:starsAnim .5s 1 forwards alternate ease;animation:starsAnim .5s 1 forwards alternate ease;-webkit-animation-delay:1.6s;animation-delay:1.6s}#desc,#logo-body,#title,.start #stars polygon{opacity:0}.start #logo-body{-webkit-animation:visibilityON .7s 1 forwards alternate ease-in-out;animation:visibilityON .7s 1 forwards alternate ease-in-out;-webkit-animation-delay:1.3s;animation-delay:1.3s}#desc,#title{-webkit-transform:translateY(5em);-ms-transform:translateY(5em);transform:translateY(5em)}.start #desc,.start #title{-webkit-animation:visibilityON .9s 1 forwards alternate ease-in-out;animation:visibilityON .9s 1 forwards alternate ease-in-out;-webkit-animation-delay:2s;animation-delay:2s;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);-webkit-transition:-webkit-transform .9s ease;-o-transition:transform .9s ease;transition:transform .9s ease;transition:transform .9s ease,-webkit-transform .9s ease}@-webkit-keyframes visibilityON{from{opacity:0}to{opacity:1}}@keyframes visibilityON{from{opacity:0}to{opacity:1}}@-webkit-keyframes visibilityOFF{from{opacity:1}to{opacity:0}}@keyframes visibilityOFF{from{opacity:1}to{opacity:0}}@-webkit-keyframes starsAnim{0%{opacity:0;-webkit-transform:translateX(-2em);transform:translateX(-2em)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes starsAnim{0%{opacity:0;-webkit-transform:translateX(-2em);transform:translateX(-2em)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}.info-block{display:none;z-index:1;text-align:center;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}h2{display:inline}#logosvg{width:10%;margin-bottom:20px}
        </style>
    <?php }?>
</head>

<body <?php body_class(); ?>>

<?php if (is_home() || is_page_template( 'inc/home-page.php' )) {?>
<div class="logo-loading">
    <div class="loading-block">
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="-100 23 795 795" enable-background="new -100 23 795 795" xml:space="preserve">
			<g id="desc">
                <g>
                    <path fill="#9C9D9D" d="M225.9,508v-13.1h4.8c0.9,0,1.8,0.2,2.6,0.5s1.6,0.8,2.1,1.4c0.6,0.6,1,1.3,1.5,2.1
						c0.4,0.8,0.5,1.7,0.5,2.6c0,1.2-0.3,2.3-0.9,3.4c-0.6,1-1.5,1.8-2.4,2.4c-1,0.6-2.1,0.8-3.4,0.8L225.9,508L225.9,508L225.9,508z
						 M229.3,497.7v7.3h0.7c0.7,0,1.4-0.1,1.9-0.4s1-0.6,1.4-1.3c0.3-0.5,0.5-1.3,0.5-2.1c0-1.2-0.3-2.1-1-2.7s-1.6-0.9-2.7-0.9h-0.7
						L229.3,497.7L229.3,497.7z"/>
                    <path fill="#9C9D9D" d="M245.8,502.6l4.1,5.4h-4.3l-3.1-5l0,0v5H239v-13.1h5.1c0.8,0,1.7,0.1,2.4,0.4s1.3,0.7,1.6,1.4
						c0.3,0.6,0.6,1.4,0.6,2.3c0,0.6-0.1,1.2-0.3,1.7s-0.5,0.9-0.9,1.4C247,502.2,246.4,502.5,245.8,502.6z M242.5,497.5v3.3h0.3
						c0.4,0,0.8,0,1.2-0.1c0.3-0.1,0.6-0.2,0.8-0.5c0.2-0.2,0.3-0.6,0.3-1s-0.1-0.7-0.3-1c-0.2-0.2-0.5-0.4-0.8-0.5s-0.7-0.1-1.2-0.1
						L242.5,497.5L242.5,497.5z"/>
                    <path fill="#9C9D9D" d="M258.3,497.7h-4.1v2.2h3.9v2.9h-3.9v2.3h4.1v2.9h-7.5v-13h7.5V497.7z"/>
                    <path fill="#9C9D9D" d="M268.5,505.7h-4.7l-0.9,2.3h-3.6l5-13.1h3.8L273,508h-3.7L268.5,505.7z M267.5,503l-1.4-4.2l0,0l-1.4,4.2
						H267.5z"/>
                    <path fill="#9C9D9D" d="M273.3,508l2.2-13.1h3.4l2.6,7l2.8-7h3.4l2,13.1h-3.5l-0.9-7.6l0,0l-3.1,7.6h-1.4l-3-7.6l0,0l-1,7.6H273.3
						z"/>
                    <path fill="#9C9D9D" d="M299.9,508v-13.1h4.8c0.9,0,1.8,0.2,2.6,0.5c0.8,0.3,1.6,0.8,2.1,1.4c0.5,0.5,1,1.3,1.5,2.1
						c0.4,0.8,0.5,1.7,0.5,2.6c0,1.2-0.3,2.3-0.9,3.4c-0.6,1-1.4,1.8-2.4,2.4s-2.1,0.8-3.4,0.8L299.9,508L299.9,508L299.9,508z
						 M303.3,497.7v7.3h0.7c0.7,0,1.4-0.1,1.9-0.4s1-0.6,1.4-1.3c0.3-0.5,0.5-1.3,0.5-2.1c0-1.2-0.3-2.1-1-2.7s-1.6-0.9-2.7-0.9h-0.7
						L303.3,497.7L303.3,497.7z"/>
                    <path fill="#9C9D9D" d="M320.4,497.7h-4.1v2.2h3.9v2.9h-3.9v2.3h4.1v2.9H313v-13h7.5v2.7H320.4z"/>
                    <path fill="#9C9D9D" d="M331.1,495.6l-1.4,2.6c-0.7-0.6-1.5-0.8-2.3-0.8c-0.3,0-0.7,0.1-1,0.3c-0.3,0.2-0.4,0.4-0.4,0.8
						c0,0.3,0.1,0.6,0.4,0.7c0.3,0.2,0.6,0.3,1.2,0.5l0.8,0.3c1,0.3,1.8,0.7,2.4,1.3c0.5,0.5,0.8,1.4,0.8,2.3c0,1.6-0.4,2.7-1.4,3.6
						c-0.9,0.8-2.2,1.3-3.8,1.3c-1.7,0-3.1-0.5-4.6-1.5l1.5-2.7c1,0.9,2,1.4,3,1.4c0.4,0,0.8-0.1,1.2-0.3c0.3-0.2,0.5-0.5,0.5-0.9
						s-0.2-0.7-0.5-0.9c-0.4-0.2-0.8-0.4-1.5-0.5c-0.8-0.2-1.5-0.5-2-0.7s-0.8-0.6-1.2-1c-0.3-0.4-0.4-1.2-0.4-1.9
						c0-0.8,0.2-1.7,0.6-2.3c0.4-0.6,0.9-1.2,1.6-1.6c0.7-0.3,1.5-0.5,2.3-0.5c0.6,0,1.4,0.1,2.1,0.3
						C329.9,495,330.6,495.3,331.1,495.6z"/>
                    <path fill="#9C9D9D" d="M336.7,494.9V508h-3.5v-13.1H336.7z"/>
                    <path fill="#9C9D9D" d="M345.3,500.6h6.8c0,0.7-0.1,1.5-0.1,2c-0.1,0.5-0.2,1-0.4,1.7c-0.2,0.5-0.5,1-0.8,1.6
						c-1.3,1.7-3,2.6-5.5,2.6c-1.4,0-2.5-0.3-3.7-0.8c-1-0.6-1.9-1.4-2.5-2.4s-0.8-2.3-0.8-3.6c0-1,0.2-2,0.5-2.8s0.8-1.6,1.5-2.2
						c0.6-0.6,1.4-1.2,2.3-1.5c0.8-0.3,1.9-0.5,2.9-0.5c0.9,0,1.7,0.1,2.5,0.4c0.7,0.3,1.5,0.7,2,1.3c0.6,0.5,1,1.3,1.5,2l-3.3,1.4
						c-0.2-0.6-0.6-1.2-1-1.6s-1-0.5-1.8-0.5s-1.4,0.2-1.9,0.6s-0.9,0.9-1.2,1.6c-0.3,0.6-0.4,1.3-0.4,2s0.1,1.4,0.4,2s0.6,1.2,1.2,1.6
						s1.2,0.6,1.9,0.6c0.5,0,0.9-0.1,1.4-0.2c0.4-0.2,0.7-0.4,0.9-0.7c0.2-0.3,0.4-0.7,0.4-1.3h-2.8V500.6z"/>
                    <path fill="#9C9D9D" d="M353.6,508v-13.1h3.5l6.3,8.1l0,0v-8.1h3.5V508h-3.5l-6.3-8.1l0,0v8.1H353.6z"/>
                </g>
            </g>
            <g id="title">
                <g>
                    <path fill="#251C63" d="M195.5,448.2l-3.5,6.6c-1.8-1.5-3.7-2.2-5.7-2.2c-0.9,0-1.8,0.2-2.5,0.7s-1.2,1.2-1.2,2s0.3,1.5,1,1.9
						s1.6,0.8,2.7,1.3l2.2,0.6c2.6,0.7,4.6,1.8,6,3.3c1.5,1.4,2.1,3.4,2.1,5.8c0,4-1.2,6.9-3.4,8.9c-2.4,2.1-5.6,3.1-9.3,3.1
						c-4.2,0-8-1.3-11.7-3.8l3.7-6.9c2.6,2.3,5.1,3.5,7.7,3.5c1.2,0,2.1-0.3,2.9-0.8c0.8-0.5,1.3-1.4,1.3-2.5c0-1-0.5-1.8-1.5-2.3
						c-0.9-0.5-2.2-0.9-3.8-1.5c-2.1-0.6-3.8-1.2-4.9-1.8c-1.3-0.6-2.2-1.5-2.9-2.7s-1-2.8-1-4.8c0-2.2,0.5-4.1,1.5-5.8
						c0.9-1.7,2.3-2.9,4.1-3.9c1.8-0.9,3.7-1.4,5.9-1.4c1.7,0,3.5,0.2,5.4,0.7C192.4,446.7,194.1,447.3,195.5,448.2z"/>
                    <path fill="#251C63" d="M214.1,453.6v25.7h-8.6v-25.7h-7.1v-7.3h22.8v7.2L214.1,453.6L214.1,453.6L214.1,453.6z"/>
                    <path fill="#251C63" d="M244.5,473.6h-11.9l-2.3,5.8h-9.1l12.8-33.1h9.3l12.4,33h-9.1L244.5,473.6z M242.2,467l-3.5-10.5h-0.1
						L235,467H242.2z"/>
                    <path fill="#251C63" d="M275.5,465.8l10.4,13.5h-10.7l-8.1-12.7H267v12.7h-8.6v-33.1h12.8c2.2,0,4.2,0.3,6,1s3,1.9,4.1,3.4
						c0.9,1.6,1.5,3.5,1.5,5.7c0,1.6-0.3,2.9-0.8,4.3s-1.4,2.4-2.4,3.3C278.5,464.9,277.1,465.5,275.5,465.8z M267.1,452.9v8.2h0.8
						c1.2,0,2.1-0.1,2.9-0.3c0.8-0.2,1.6-0.6,2.1-1.3c0.5-0.6,0.8-1.5,0.8-2.6s-0.3-2-0.8-2.6s-1.3-1-2.1-1.3c-0.8-0.2-1.9-0.3-2.9-0.3
						h-0.8V452.9z"/>
                </g>
                <g>
                    <path fill="#BF0A20" d="M315.6,446.3l5.8,21.3h0.1l6.9-21.3h6.8l6.5,21.3h0.1l6.2-21.3h8.9l-10.5,33h-8.7l-5.8-19.1h-0.1
						l-6.5,19.1h-8.7l-9.9-33H315.6z"/>
                    <path fill="#BF0A20" d="M379.2,473.6h-11.9l-2.3,5.8h-9.1l12.7-33h9.3l12.4,33h-9.1L379.2,473.6z M376.9,467l-3.5-10.5h-0.1
						l-3.6,10.5H376.9z"/>
                    <path fill="#BF0A20" d="M401.8,463.5l-12.2-17.2h10.3l6.2,8.9l6.2-8.9h10.3l-12.2,17.2v15.8h-8.6L401.8,463.5L401.8,463.5z"/>
                </g>
            </g>
            <g id="logo-body">
                <polygon fill="#ECECED" points="379.1,407.4 371.5,420.6 396.2,420.6 383.9,399 	"/>
                <polygon fill="#BF0A20" points="370.9,333.3 383.9,356.1 371.5,377.5 346.1,333.3 	"/>
                <polygon fill="#ECECED" points="359.3,356.1 346.9,377.5 359.3,399 371.5,377.5 	"/>
                <polygon fill="#878786" points="360,397.7 359.3,399 346.9,377.5 351.3,369.9 	"/>
                <polygon fill="#BF0A20" points="321.5,333.3 359.3,399 346.9,420.6 296.8,333.3 	"/>
                <polygon fill="#ECECED" points="309.8,356.1 297.6,377.5 309.8,399 322.2,377.5 	"/>
                <polygon fill="#878786" points="310.7,397.7 309.8,399 297.6,377.5 302.1,369.8 	"/>
                <polygon fill="#BF0A20" points="272.2,333.3 309.8,399 297.6,420.6 247.5,333.3 	"/>
                <polygon fill="#ECECED" points="247.5,333.3 260,355.2 235.3,355.2 222.7,333.3 	"/>
                <polygon fill="#878786" points="243.2,355.2 235.3,355.2 222.7,333.3 223.7,333.3 	"/>
                <polygon fill="#251C63" points="222.7,333.3 260.5,399 248.1,420.6 210.4,354.8 	"/>
                <polygon fill="#ECECED" points="235.8,399 248.1,420.6 223.5,420.6 211.1,399 	"/>
                <polygon fill="#878786" points="227.9,399 235.8,399 248.1,420.6 247.3,420.6 	"/>
                <polygon fill="#251C63" points="211.1,399 223.5,420.6 198.8,420.6 	"/>
            </g>
            <g id="diag-lines">

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="640" y1="-44.2" x2="607.6" y2="12"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="659" y1="-34.2" x2="626.6" y2="22"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="595.4" y1="-9.6" x2="627.6" y2="-65.7"/>
                <path fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M603-65.7"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="615.4" y1="-87.1" x2="583" y2="-31.1"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="545.9" y1="-9.6" x2="578.3" y2="-65.7"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="565.9" y1="-87.1" x2="533.7" y2="-31.1"/>
            </g>
            <g id="color-lines">

                <line fill="none" stroke="#BF0A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="133.1" y1="-37.7" x2="82.7" y2="-125.2"/>

                <line fill="none" stroke="#BF0A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="107.5" y1="-125.2" x2="145.5" y2="-59.1"/>

                <line fill="none" stroke="#BF0A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="58.1" y1="-125.2" x2="120.9" y2="-16.2"/>

                <line fill="none" stroke="#BF0A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="108.5" y1="5.4" x2="33.4" y2="-125.2"/>

                <line fill="none" stroke="#BF0A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8.8" y1="-125.2" x2="71.4" y2="-16.2"/>

                <line fill="none" stroke="#BF0A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="59.2" y1="5.4" x2="-15.9" y2="-125.2"/>

                <line fill="none" stroke="#251C63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9.7" y1="5.4" x2="-53" y2="-103.7"/>

                <line fill="none" stroke="#251C63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-40.7" y1="-125.2" x2="22.1" y2="-16.2"/>

                <line fill="none" stroke="#251C63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-52.3" y1="-59.5" x2="-14.9" y2="5.4"/>

                <line fill="none" stroke="#251C63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-67" y1="-42.9" x2="-29.6" y2="22"/>
            </g>
            <g id="hor-lines">

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-290.3" y1="333.3" x2="-115.5" y2="333.3"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-103" y1="355.2" x2="-277.7" y2="355.2"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-114.9" y1="420.6" x2="-289.5" y2="420.6"/>

                <line fill="none" stroke="#ECECED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-301.9" y1="399" x2="-277.2" y2="399"/>
            </g>
            <g id="stars">
                <polygon fill="#FFFFFF" points="222.2,349.4 223.5,353.3 227.5,353.3 224.2,355.7 225.4,359.6 222.2,357.2 218.8,359.6
					220.2,355.7 216.8,353.3 220.9,353.3 	"/>
                <polygon fill="#FFFFFF" points="228.4,360.2 229.6,364.1 233.7,364.1 230.5,366.5 231.7,370.4 228.4,368 225.1,370.4 226.4,366.5
					223,364.1 227.1,364.1 	"/>
                <polygon fill="#FFFFFF" points="234.6,371 235.8,374.9 239.9,374.9 236.7,377.3 237.9,381.2 234.6,378.8 231.3,381.2 232.6,377.3
					229.2,374.9 233.3,374.9 	"/>
                <polygon fill="#FFFFFF" points="240.9,381.8 242.1,385.7 246.2,385.7 242.9,388.1 244.1,392 240.9,389.6 237.5,392 238.8,388.1
					235.5,385.7 239.6,385.7 	"/>
                <polygon fill="#FFFFFF" points="247.1,392.6 248.3,396.5 252.4,396.5 249.1,398.9 250.3,402.8 247.1,400.4 243.7,402.8 245,398.9
					241.7,396.5 245.8,396.5 	"/>
            </g>
            <g display="none">

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="-31.3" y1="-23" x2="223.7" y2="419"/>

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="199" y1="419" x2="-56" y2="-22.9"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M199,419"/>

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="18" y1="-23" x2="273" y2="418.9"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M-6.7-23.3"/>

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="248.1" y1="418.7" x2="-6.7" y2="-23.3"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="67.4" y1="-23.1" x2="322.3" y2="418.9"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M67.4-23.1"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M42.7-23.1"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="297.6" y1="418.9" x2="42.7" y2="-23.1"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="116.7" y1="-23.2" x2="371.6" y2="418.8"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M116.7-23.2"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M92-23.1"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="347" y1="418.8" x2="92" y2="-23.1"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="396.2" y1="418.3" x2="141.2" y2="-23.6"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="165.9" y1="-23.6" x2="421.1" y2="418.8"/>
            </g>
            <g display="none">

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="532.8" y1="-157.8" x2="277.4" y2="283.9"/>

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="265.1" y1="262.5" x2="520.4" y2="-179.2"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M265.1,262.5"/>

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="557.5" y1="-115.1" x2="302.1" y2="326.6"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M545.4-136.7"/>

                <line display="inline" fill="none" stroke="#251C63" stroke-width="2" stroke-miterlimit="10" x1="289.9" y1="304.9" x2="545.4" y2="-136.7"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="582.3" y1="-72.4" x2="326.8" y2="369.3"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M582.3-72.4"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M569.9-93.8"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="314.4" y1="347.9" x2="569.9" y2="-93.8"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="607" y1="-29.7" x2="351.5" y2="411.9"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M607-29.7"/>
                <path display="inline" fill="none" stroke="#ECECED" stroke-width="2" stroke-miterlimit="10" d="M594.5-51.1"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="339.2" y1="390.6" x2="594.5" y2="-51.1"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="364.2" y1="433" x2="619.6" y2="-8.7"/>

                <line display="inline" fill="none" stroke="#BF0A20" stroke-width="2" stroke-miterlimit="10" x1="631.9" y1="12.7" x2="376.2" y2="454.8"/>
            </g>
			</svg>
    </div>
</div>
<?php } ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="container navbar">
			<div class="navbar-header pull-left">
				<a href="/">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/starway-logo.svg">
				</a>
			</div>
			<div class="nav menu-button navbar-nav pull-right">
				<div class="stripe-block">
					<div class="menu-stripe stripe1"></div>
					<div class="menu-stripe stripe2"></div>
					<div class="menu-stripe stripe3"></div>
					<div class="menu-stripe stripe4"></div>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

    <div class="main-menu">
        <nav id="site-navigation" class="main-navigation">

            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav><!-- #site-navigation -->
    </div>


