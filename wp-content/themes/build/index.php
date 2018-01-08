<?php get_header(); ?>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $img_slider_1 = ot_get_option( 'img_slider_1' );
	  $img_slider_2 = ot_get_option( 'img_slider_2' );
	  $img_slider_3 = ot_get_option( 'img_slider_3' );
	  $p_slider_1 = ot_get_option( 'p_slider_1' );
	  $p_slider_2 = ot_get_option( 'p_slider_2' );
	  $p_slider_3 = ot_get_option( 'p_slider_3' );
	  $t_slider_1 = ot_get_option( 't_slider_1' );
	  $t_slider_2 = ot_get_option( 't_slider_2' );
	  $t_slider_3 = ot_get_option( 't_slider_3' );
	}
    ?>
<!-- CONTENT START -->
        <div id="home" class="page-content">
        
            <!-- SLIDER START -->
            <div class="main-slider style-two default-banner">
           		<div class="tp-banner-container">
                    <div class="tp-banner" >
                        <!-- START REVOLUTION SLIDER 5.4.1 -->
                        <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                           <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
<ul>
<!-- SLIDE 1 -->	
<li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1//slide1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

<!-- MAIN IMAGE -->
<img src="<?php echo $img_slider_1; ?>"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
<!-- LAYERS -->

<!-- LAYER NR. 1 [ for overlay ] -->
<div class="tp-caption tp-shape tp-shapewrapper " 
id="slide-100-layer-1" 
data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
data-width="full"
data-height="full"
data-whitespace="nowrap"
data-type="shape" 
data-basealign="slide" 
data-responsive_offset="off" 
data-responsive="off"
data-frames='[
{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
</div>

<!-- LAYER NR. 2 [ for title ] -->
<div class="tp-caption   tp-resizeme" 
id="slide-100-layer-2" 
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"  
data-fontsize="['60','60','60','50']"
data-lineheight="['70','70','70','60']"
data-width="['700','700','700','700']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on" 
data-frames='[
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; 
white-space: normal; 
font-weight: 700; 
color: rgba(255, 255, 255, 1.00);
border-width:0px;">
<span class="text-uppercase" style="font-family:'Roboto' ;"> <?php echo $t_slider_1; ?></span>
</div>

<!-- LAYER NR. 3 [ for paragraph] -->
<div class="tp-caption  tp-resizeme" 
id="slide-100-layer-3" 
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"  
data-fontsize="['18','18','18','30']"
data-lineheight="['30','30','30','40']"
data-width="['650','650','650','650']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; 
font-weight: 500; 
color: rgba(255, 255, 255, 0.85);
border-width:0px;">
<span style="font-family:'Roboto';"><?php echo $p_slider_1; ?></span>
</div>

<!-- LAYER NR. 4 [ for readmore botton ] -->
<div class="tp-caption tp-resizeme" 	
id="slide-100-layer-4"						
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"  
data-lineheight="['none','none','none','none']"
data-width="['300','300','300','300']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[ 
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index:13; text-transform:uppercase; font-weight:700;">
<!--<a href="javascript:;" class="site-button button-lg skew-icon-btn m-r15">Read more <i class="fa fa-angle-double-right"></i></a>-->
</div>

</li>

<!-- SLIDE 2 -->
<li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1//slide2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

<!-- MAIN IMAGE -->
<img src="<?php echo $img_slider_2; ?>"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
<!-- LAYERS -->

<!-- LAYER NR. 1 [ for overlay ] -->
<div class="tp-caption tp-shape tp-shapewrapper " 
id="slide-200-layer-1" 
data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
data-width="full"
data-height="full"
data-whitespace="nowrap"
data-type="shape" 
data-basealign="slide" 
data-responsive_offset="off" 
data-responsive="off"
data-frames='[
{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
</div>

<!-- LAYER NR. 2 [ for title ] -->
<div class="tp-caption   tp-resizeme" 
id="slide-200-layer-2" 
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"  
data-fontsize="['60','60','60','50']"
data-lineheight="['70','70','70','60']"
data-width="['700','700','700','700']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on" 
data-frames='[
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; 
white-space: normal; 
font-weight: 700; 
color: rgba(255, 255, 255, 1.00);
border-width:0px;">
<span class="text-uppercase" style="font-family:'Roboto' ;"><?php echo $t_slider_2; ?></span>
</div>

<!-- LAYER NR. 3 [ for paragraph] -->
<div class="tp-caption  tp-resizeme" 
id="slide-200-layer-3" 
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"  
data-fontsize="['18','18','18','30']"
data-lineheight="['30','30','30','40']"
data-width="['650','650','650','650']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; 
font-weight: 500; 
color: rgba(255, 255, 255, 0.85);
border-width:0px;">
<span style="font-family:'Roboto';"><?php echo $p_slider_2; ?></span>
</div>

<!-- LAYER NR. 4 [ for readmore botton ] -->
<div class="tp-caption tp-resizeme" 	
id="slide-200-layer-4"						
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"  
data-lineheight="['none','none','none','none']"
data-width="['300','300','300','300']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[ 
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index:13; text-transform:uppercase; font-weight:700;">
<!--<a href="javascript:;" class="site-button button-lg skew-icon-btn m-r15">Read more <i class="fa fa-angle-double-right"></i></a>-->
</div>

<!-- LAYER NR. 5 [ for botton ] -->
<div class="tp-caption tp-resizeme" 	
id="slide-200-layer-5"						
data-x="['left','left','left','left']" data-hoffset="['230','230','230','230']" 
data-y="['top','top','top','top']" data-voffset="['490','490','490','600']"  
data-fontsize="['none','none','none','none']"
data-lineheight="['none','none','none','none']"
data-width="['300','300','300','300']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[ 
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; text-transform:uppercase; font-weight:700;">
<!--<a href="javascript:;" class="site-button button-lg skew-icon-btn m-r15" >Read More<i class="fa fa-arrow-circle-o-right"></i></a>--> 
</div>     

</li>

<!-- SLIDE 3 -->
<li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1//slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

<!-- MAIN IMAGE -->
<img src="<?php echo $img_slider_3; ?>"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
<!-- LAYERS -->

<!-- LAYER NR. 1 [ for overlay ] -->
<div class="tp-caption tp-shape tp-shapewrapper " 
id="slide-300-layer-1" 
data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
data-width="full"
data-height="full"
data-whitespace="nowrap"
data-type="shape" 
data-basealign="slide" 
data-responsive_offset="off" 
data-responsive="off"
data-frames='[
{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
</div>

<!-- LAYER NR. 2 [ for title ] -->
<div class="tp-caption   tp-resizeme" 
id="slide-300-layer-2" 
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"  
data-fontsize="['60','60','60','50']"
data-lineheight="['70','70','70','60']"
data-width="['700','700','700','700']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on" 
data-frames='[
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; 
white-space: normal; 
font-weight: 700; 
color: rgba(255, 255, 255, 1.00);
border-width:0px;">
<span class="text-uppercase" style="font-family:'Roboto' ;"><?php echo $t_slider_3; ?></span>
</div>

<!-- LAYER NR. 3 [ for paragraph] -->
<div class="tp-caption  tp-resizeme" 
id="slide-300-layer-3" 
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"  
data-fontsize="['18','18','18','30']"
data-lineheight="['30','30','30','40']"
data-width="['650','650','650','650']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; 
font-weight: 500; 
color: rgba(255, 255, 255, 0.85);
border-width:0px;">
<span style="font-family:'Roboto';"><?php echo $p_slider_3; ?></span>
</div>

<!-- LAYER NR. 4 [ for readmore botton ] -->
<div class="tp-caption tp-resizeme" 	
id="slide-300-layer-4"						
data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"  
data-lineheight="['none','none','none','none']"
data-width="['300','300','300','300']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[ 
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index:13; text-transform:uppercase; font-weight:700;">
<!--<a href="javascript:;" class="site-button button-lg skew-icon-btn m-r15">Read more <i class="fa fa-angle-double-right"></i></a>-->
</div>

<!-- LAYER NR. 5 [ for botton ] -->
<div class="tp-caption tp-resizeme" 	
id="slide-300-layer-5"						
data-x="['left','left','left','left']" data-hoffset="['230','230','230','230']" 
data-y="['top','top','top','top']" data-voffset="['490','490','490','600']"  
data-fontsize="['none','none','none','none']"
data-lineheight="['none','none','none','none']"
data-width="['300','300','300','300']"
data-height="['none','none','none','none']"
data-whitespace="['normal','normal','normal','normal']"

data-type="text" 
data-responsive_offset="on"
data-frames='[ 
{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[0,0,0,0]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[0,0,0,0]"
data-paddingleft="[0,0,0,0]"

style="z-index: 13; text-transform:uppercase; font-weight:700;">
<!--<a href="javascript:;" class="site-button button-lg skew-icon-btn m-r15" >Read More<i class="fa fa-arrow-circle-o-right"></i></a>--> 
</div>     

</li>

</ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                           </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
            	</div>
            </div>
            <!-- SLIDER END -->
       <?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $icon_quality_1 = ot_get_option( 'icon_quality_1' );
	  $icon_quality_2 = ot_get_option( 'icon_quality_2' );
	  $icon_call_1 = ot_get_option( 'icon_call_1' );
		$call = ot_get_option( 'phone' );
	  $icon_call_2 = ot_get_option( 'icon_call_2' );
	}
    ?>     
            <!-- OUR VALUE SECTION START -->           
            <div class="section-full overlay-wraper"  style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg1.jpg)">
               	<div class="overlay-main" style="opacity:0.90; background-color:#273447; " ></div>
                <div class="container">
                     <div class="row"> 
                        <div class="col-md-8 p-t15 p-b30 support-skew">
                             <div style="z-index:2; position:relative;">
                                <div class="col-md-6 p-tb10">
                                    <div class="wt-icon-box-wraper left ">
                                        <div class="icon-md text-primary">
                                            <a href="#" class="icon-cell">
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/besty-quality.png" alt="">
                                            </a>
                                        </div>
                                        <div class="icon-content text-white">
                                            <h5 class="wt-tilte text-uppercase m-b5 text-white"><?php echo $icon_quality_1; ?></h5>
                                           <?php echo $icon_quality_2; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-tb10">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md text-primary">
                                            <a href="#" class="icon-cell">
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/24-call-icon.png" alt="">
                                            </a>
                                        </div>
                                        <div class="icon-content text-white">
                                            <h5 class="wt-tilte text-uppercase m-b0 text-white">
												<?php echo $icon_call_1; ?></h5>
                                           <?php echo $icon_call_2; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-3 p-t50 p-b50 col-md-offset-1">
                            <div class="">
                                <a href="javascript:;" class="site-button skew-icon-btn m-r15 text-uppercase"  style="font-weight:600;"><?php echo $call; ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                     </div>
                </div>
             </div>
            <!-- OUR VALUE SECTION  END -->
             <?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_about = ot_get_option( 'title_about' );
	  $description_about = ot_get_option( 'description_about' );
	  $image_about = ot_get_option( 'image_about' );
	  $icon_t1 = ot_get_option( 'icon_t1' );
	  $icon_t2 = ot_get_option( 'icon_t2' );
	  $icon_t3 = ot_get_option( 'icon_t3' );
	  $icon_t4 = ot_get_option( 'icon_t4' );
	  $icon_t5 = ot_get_option( 'icon_t5' );
	  $icon_t6 = ot_get_option( 'icon_t6' );
	  $icon_d1 = ot_get_option( 'icon_d1' );
	  $icon_d2 = ot_get_option( 'icon_d2' );
	  $icon_d3 = ot_get_option( 'icon_d3' );
	  $icon_d4 = ot_get_option( 'icon_d4' );
	  $icon_d5 = ot_get_option( 'icon_d5' );
	  $icon_d6 = ot_get_option( 'icon_d6' );
	}
    ?>   
            <!-- ABOUT COMPANY SECTION START -->
            <div id="about" class="section-full p-tb100" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/background/pic-c-1bg.png); background-position:left bottom; background-repeat:no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="about-com-pic">
                                <img src="<?php echo $image_about; ?>" alt="" class="img-responsive"/>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="section-head text-left">
                                <h2 class="text-uppercase"><?php echo $title_about; ?></h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left bg-primary"></span>
                                        <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
								<?php echo $description_about; ?>
                                
                            </div></div>
                            <div class="about-types row">
                                <div class="col-md-6 col-sm-6 p-tb20">
                                    <div class="wt-icon-box-wraper left p-l20  bdr-1 bdr-gray-light">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-building" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0"><?php echo $icon_t1; ?></h5>
                                            <p><?php echo $icon_d1; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left  p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-paint-brush" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0"><?php echo $icon_t2; ?></h5>
                                            <p><?php echo $icon_d2; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left  p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-paint-brush" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0 "><?php echo $icon_t3; ?></h5>
                                            <p><?php echo $icon_d3; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-paint-brush" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0"><?php echo $icon_t4; ?></h5>
                                            <p><?php echo $icon_d4; ?></p>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-paint-brush" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0"><?php echo $icon_t5; ?></h5>
                                            <p><?php echo $icon_d5; ?></p>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm text-primary">
                                            <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-paint-brush" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0"><?php echo $icon_t6; ?></h5>
                                            <p><?php echo $icon_d6; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->
    <?php
			if ( function_exists( 'ot_get_option' ) ) {
				$images = explode( ',', ot_get_option( 'gallery', '' ) );
?>        
            <!-- LATEST PROJECT SECTION START -->
            <div class="section-full p-t50" style="background-image:url(images/background/bg-4.png); background-repeat:repeat;background-color:#273447; ">
            	<div class="overlay-main"></div>
                <div class="container">
                    <div class="section-head">
                        <div class="row">
                            <div class="col-md-12 text-center">
								<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo '<h2 class="text-uppercase text-white m-a0 p-t15">معرض صور</h2>'; 
						}elseif($lang == 'en'){
						echo '<h2 class="text-uppercase text-white m-a0 p-t15">Gallery</h2>'; 
					};
				  	?> 
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="portfolio-wrap mfp-gallery no-col-gap">
                        <?php
								if ( ! empty( $images ) ) {
							foreach( $images as $id ) {
								if ( ! empty( $id ) ) {
							$full_img_src = wp_get_attachment_image_src( $id, 'custom-thumb' );
								  echo '
								 <div class="masonry-item house col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx img-reflection">
                                    <div class="wt-thum-bx wt-img-effect zoom-slow ">
                                        <a href="javascript:void(0);">
                                            <img src="' . $full_img_src[0] . '"  alt="" >
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="' . $full_img_src[0] . '" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
								}
							  }
							}	
						}
					?>                   
                        </div>
                    </div>
                </div>
            </div>
            <!-- LATEST PROJECT SECTION END -->
           
            <!-- WHY CHOOSE US SECTION START  -->
            <div class="section-full bg-gray p-t80 p-b120" style="background-image:url(images/background/why-choose-pic.png); background-repeat:no-repeat; background-position:right bottom;">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
						<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo '<h2 class="text-uppercase">الخدمات</h2>'; 
						}elseif($lang == 'en'){
						echo '<h2 class="text-uppercase">Services</h2>'; 
					};
				  	?> 
                        
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE END-->
                    <div id="services" class="section-content">
                        <div class="row">
                        <?php
						$args = array(
								'post_type' => 'services',
								'posts_per_page' => 10,
						);
						$team_query = new WP_Query( $args );
							 ?>
						<?php if ( $team_query->have_posts() ) : ?>
                            <!-- COLUMNS 1 -->
							<?php $i = 1; ?>
							<?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
                            <div class="col-md-4 col-sm-6 p-tb15">
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase"><?php the_title(); ?></h5>
                                        <div class="wt-separator bg-primary"></div>
                                    </div>
                                </div>
                            </div>
							<?php $i++;
									?>
								<?php endwhile; endif; ?>                            
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- WHY CHOOSE US SECTION END -->                         
        </div>
        <!-- CONTENT END -->
<footer id="contact" class="site-footer footer-dark">

<?php get_footer(); ?>