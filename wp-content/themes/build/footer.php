   <?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_about_footer = ot_get_option( 'title_about_footer' );
	  $description_about_footer = ot_get_option( 'description_about_footer' );
	  $address = ot_get_option( 'address' );
	  $Phone = ot_get_option( 'phone_footer' );
	  $e_mail = ot_get_option( 'e_mail' );
	}
    ?>               <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main bg-black" style="opacity:0;"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-md-6 col-sm-6">  
                            <div class="widget widget_about">
                                <h4 class="widget-title"><?php echo $title_about_footer; ?></h4>
                               <?php echo $description_about_footer; ?> 
                            </div>
                        </div> 
                        <div class="col-md-6 col-sm-6">
                            <div class="widget widget_newsletter">
															 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<h4 class="widget-title">اتصل بنا</h4>'; 
		}elseif($lang == 'en'){
		echo '<h4 class="widget-title">Contact Us</h4>'; 
	};
	?>
                                
                                <div class="newsletter-bx">
                                   	<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo do_shortcode('[contact-form-7 id="23" title="Contact ar"]'); 
						}elseif($lang == 'en'){
						echo do_shortcode('[contact-form-7 id="22" title="Contact En"]'); 
					};
				  	?> 
                                </div>
                            </div>
                            <!-- SOCIAL LINKS -->
                        </div>
                    </div>
                    <div class="row">
                    
                       <div class="col-md-4 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="flaticon-placeholder"></span>
                                </div>
                                <div class="icon-content">
														 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<h5 class="wt-tilte text-uppercase m-b0">العنوان</h5>'; 
		}elseif($lang == 'en'){
		echo '<h5 class="wt-tilte text-uppercase m-b0">Address</h5>'; 
	};
	?>
                                    
                                    <?php echo $address; ?> 
                                </div>
                           </div>
                        </div>
                       <div class="col-md-4 col-sm-6  p-tb20 ">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                <div class="icon-md text-primary">
                                    <span class="flaticon-smartphone"></span>
                                </div>
                                <div class="icon-content">
											 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<h5 class="wt-tilte text-uppercase m-b0">التليفون</h5>'; 
		}elseif($lang == 'en'){
		echo '<h5 class="wt-tilte text-uppercase m-b0">Phone</h5>'; 
	};
	?>
                                    
                                    <?php echo $Phone; ?> 
                                </div>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="flaticon-email"></span>
                                </div>
                                <div class="icon-content">
										 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<h5 class="wt-tilte text-uppercase m-b0">البريد الالكتروني</h5>'; 
		}elseif($lang == 'en'){
		echo '<h5 class="wt-tilte text-uppercase m-b0">Email</h5>'; 
	};
	?>
                                    <?php echo $e_mail; ?> 
                                </div>
                            </div>
                        </div>

                  </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main bg-black" style="opacity:0;"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row"> 
						<span class="copyrights-text text-center">© <?php echo date ('Y'); ?> .  All Rights Reserved. Designed By psolvingegypt.com.</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>
        
    </div>
<?php wp_footer(); ?>
<script type="text/javascript">

    var tpj = jQuery;
    var revapi1014;
	
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
            revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1240, 1240, 800],
                gridheight: [700, 700, 700, 700],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
	<!-- LOADING AREA START ===== -->
<div class="loading-area" style="">
    <div class="loading-box"></div>
    <div class="loading-pic">
    	<div id="noTrespassingOuterBarG">
            <div id="noTrespassingFrontBarG" class="noTrespassingAnimationG">
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
            </div>
        </div>
    	<div id="cssload-cupcake" class="cssload-box">
            <span class="cssload-letter">L</span>
        
            <div class="cssload-cupcakeCircle cssload-box">
                <div class="cssload-cupcakeInner cssload-box">
                    <div class="cssload-cupcakeCore cssload-box"></div>
                </div>
            </div>
            <span class="cssload-letter cssload-box">A</span>
            <span class="cssload-letter cssload-box">D</span>
            <span class="cssload-letter cssload-box">I</span>
            <span class="cssload-letter cssload-box">N</span>
            <span class="cssload-letter cssload-box">G</span>
        </div>
    	<div id="noTrespassingOuterBarG">
            <div id="noTrespassingFrontBarG" class="noTrespassingAnimationG">
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->
</body>
</html>
