<?php 
JHtml::_('behavior.framework', true);
JHtml::_('bootstrap.framework');
JHTML::_('bootstrap.tooltip');

$doc = JFactory::getDocument();
$doc->setMetaData( 'cleartype', 'on', true );
JHtml::_('bootstrap.loadCss', true, $this->direction);

$socials = false;
if($this->params->get('twitterON') || $this->params->get('gplusON') || $this->params->get('facebookON') || $this->params->get('RSSON') || $this->params->get('linkedinON')  || $this->params->get('youtubeON') || $this->params->get('vimeoON') || $this->params->get('pinterestON')  || $this->params->get('instagramON') || $this->params->get('stumbleuponON') || $this->params->get('diggON') || $this->params->get('bloggerON')|| $this->params->get('customSoc1ON')|| $this->params->get('customSoc2ON')|| $this->params->get('customSoc3ON')|| $this->params->get('customSoc4ON')|| $this->params->get('customSoc5ON') ) : 
$socials = true;
endif;
?>
<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<jdoc:include type="head" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/selectivizr-min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/modernizr.js"></script>
<![endif]-->

<?php
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css', $type = 'text/css', $media = 'all');
if($this->params->get('usetheme')==true) : $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/presets/'.$this->params->get('choosetheme').'.css', $type = 'text/css', $media = 'screen,projection'); endif; 
$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', $type = 'text/css', $media = 'all');
if($this->direction == 'rtl') : $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template-rtl.css', $type = 'text/css', $media = 'all'); endif; 
?>

<script type="text/javascript">  
(function(){
  var d = document, e = d.documentElement, s = d.createElement('style');
//  if (e.style.MozTransform === ''){ // gecko 1.9.1 inference
    s.textContent = 'body{visibility:hidden} .site-loading{visibility:visible !important;}';
    var r = document.getElementsByTagName('script')[0];
    r.parentNode.insertBefore(s, r);
    function f(){ s.parentNode && s.parentNode.removeChild(s); }
    addEventListener('load',f,false);
    setTimeout(f,3000);
//  }
})();
 </script>
 
 
 <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.selectric.js"></script>
 <script type="text/javascript">
jQuery(function(){
 jQuery('select#limit').selectric();
});
 </script>
 
<?php if($this->params->get('usecookielaw') == true) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/jquery-eu-cookie-law-popup.js"></script>
<?php endif; ?>
 
 <?php if($this->params->get("siBackgroundImage") || $this->params->get("bodybackgroundimage") || $this->params->get("welcome_box") ) : ?>
 <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.backstretch.min.js"></script>
 <?php endif; ?>
<!--[if IE 6]> <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie6.css" media="screen" /> <![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie.css" media="screen" /> <![endif]-->

	<?php if($this->params->get("usedropdown")) : ?> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/supersubs.js"></script>
	<script type="text/javascript">
    jQuery(document).ready(function(){ 
        jQuery("ul.menu-nav").supersubs({ 
			minWidth: <?php echo $this->params->get("dropdownhandler1"); ?>,
			maxWidth: <?php echo $this->params->get("dropdownhandler1maxwidth"); ?>,
            extraWidth:  1
        }).superfish({ 
            delay:500,
            animation:{opacity:'<?php if($this->params->get("dropopacity")) : ?>show<?php else: ?>hide<?php endif; ?>',height:'<?php if($this->params->get("dropheight")) : ?>show<?php else: ?>hide<?php endif; ?>',width:'<?php if($this->params->get("dropwidth")): ?>show<?php else: ?>hide<?php endif; ?>'},
            speed:'<?php echo $this->params->get("dropspeed"); ?>',
            autoArrows:true,
            dropShadows:false 
        });
    }); 
	
	jQuery(function() {                      
		jQuery(".closeMenu").click(function() { 
			jQuery('#social-links').attr('style','display:none');		
		});
	});
	</script>
	<?php endif; ?>
	<?php if( $this->countModules('position-0')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#searchOpenButton" ).click(function() {
		  jQuery( "#searchpanel" ).toggle( "fast" );
		});
	});
	jQuery(function() {                      
		jQuery("#searchOpenButton").click(function() { 
			jQuery('#cart-panel2').attr('style','display:none');
			jQuery('#LoginForm').attr('style','display:none');
		});
	});
	</script>
	<?php endif; ?>
	
	<script type="text/javascript">
	jQuery(function() {                      
		jQuery("#cartpanel").click(function() { 
			jQuery('#LoginForm').attr('style','display:none');
			jQuery('#searchpanel').attr('style','display:none');
		});
	});
	</script>
	
	<?php if( $this->countModules('intro-1 or intro-2 or intro-3 or intro-4 or intro-5 or intro-6')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#open-intro-panel" ).click(function() {
		  jQuery( "#intro-panel" ).toggle( "slow" );
		  jQuery( "#open-intro-panel" ).toggleClass( "highlight" );
		});
	});
	</script>
	<?php endif; ?>
	
	<?php if( $this->countModules('header-left')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#hl-open" ).click(function() {
		  jQuery( "#header-left-panel" ).toggle( "<?php echo $this->params->get("HLboxspeed"); ?>'" ); 
		});
	});
	</script>
	<?php endif; ?>
	
	<?php if( $this->countModules('header-right')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#hr-open" ).click(function() {
		  jQuery( "#header-right-panel" ).toggle( "fast" );
		});
	});
	</script>
	<?php endif; ?>
	
	<?php if( $this->countModules('loginform')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".open-register-form" ).click(function() {
		  jQuery( "#LoginForm" ).toggle( "fast" );
		});
	});
	
	jQuery(function() {                      
		jQuery(".open-register-form").click(function() { 
			jQuery('#cart-panel2').attr('style','display:none');
		});
	});
	
	</script>
	<?php endif; ?>

	<script type="text/javascript">
		function toggle_visibility(id) {
		var e = document.getElementById(id);
		if(e.style.display == 'block')
		e.style.display = 'none';
		else
		e.style.display = 'block';
		}
	</script>
	
	<script type="text/javascript">	
	jQuery(window).on("scroll touchmove", function () {
		jQuery('.jump-to-top').toggleClass('visible', jQuery(document).scrollTop() > jQuery(window).height() / 4);
	});
	</script>
	
	<?php echo $this->params->get("headcode"); ?>

	<?php if( $this->countModules('builtin-slideshow')) : ?>
	<!-- Built-in Slideshow -->
	<?php if($this->params->get("cam_turnOn")) : ?>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/camera.min.js"></script> 
		<script>
			jQuery(function(){		
				jQuery('#ph-camera-slideshow').camera({
					alignment: 'topCenter',
					autoAdvance: <?php if ($this->params->get("cam_autoAdvance")) : ?>true<?php else: ?>false<?php endif; ?>,
					mobileAutoAdvance: <?php if ($this->params->get("cam_mobileAutoAdvance")) : ?>true<?php else: ?>false<?php endif; ?>, 
					slideOn: '<?php if($this->params->get("cam_slideOn")) : echo $this->params->get("cam_slideOn"); else : ?>random<?php endif; ?>',	
					thumbnails: <?php if ($this->params->get("cam_thumbnails")) : ?>true<?php else: ?>false<?php endif; ?>,
					time: <?php if($this->params->get("cam_time")) : echo $this->params->get("cam_time"); else : ?>7000<?php endif; ?>,
					transPeriod: <?php if($this->params->get("cam_transPeriod")) : echo $this->params->get("cam_transPeriod"); else : ?>1500<?php endif; ?>,
					cols: <?php if($this->params->get("cam_cols")) : echo $this->params->get("cam_cols"); else : ?>10<?php endif; ?>,
					rows: <?php if($this->params->get("cam_rows")) : echo $this->params->get("cam_rows"); else : ?>10<?php endif; ?>,
					slicedCols: <?php if($this->params->get("cam_slicedCols")) : echo $this->params->get("cam_slicedCols"); else : ?>10<?php endif; ?>,	
					slicedRows: <?php if($this->params->get("cam_slicedRows")) : echo $this->params->get("cam_slicedRows"); else : ?>10<?php endif; ?>,
					fx: '<?php if($this->params->get("cam_fx_multiple_on")) : echo $this->params->get("cam_fx_multi"); else : echo $this->params->get("cam_fx"); endif; ?>',
					gridDifference: <?php if($this->params->get("cam_gridDifference")) : echo $this->params->get("cam_gridDifference"); else : ?>250<?php endif; ?>,
					height: '<?php if($this->params->get("cam_height")) : echo $this->params->get("cam_height"); else : ?>50%<?php endif; ?>',
					minHeight: '<?php echo $this->params->get("cam_minHeight"); ?>',
					imagePath: '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/',	
					hover: <?php if ($this->params->get("cam_hover")) : ?>true<?php else: ?>false<?php endif; ?>,
					loader: '<?php if($this->params->get("cam_loader")) : echo $this->params->get("cam_loader"); else : ?>pie<?php endif; ?>',
					barDirection: '<?php if($this->params->get("cam_barDirection")) : echo $this->params->get("cam_barDirection"); else : ?>leftToRight<?php endif; ?>',
					barPosition: '<?php if($this->params->get("cam_barPosition")) : echo $this->params->get("cam_barPosition"); else : ?>bottom<?php endif; ?>',	
					pieDiameter: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>,
					piePosition: '<?php if($this->params->get("cam_piePosition")) : echo $this->params->get("cam_piePosition"); else : ?>rightTop<?php endif; ?>',
					loaderColor: '<?php if($this->params->get("cam_loaderColor")) : echo $this->params->get("cam_loaderColor"); else : ?><?php endif; ?>', 
					loaderBgColor: '<?php if($this->params->get("cam_loaderBgColor")) : echo $this->params->get("cam_loaderBgColor"); else : ?>#222222<?php endif; ?>', 
					loaderOpacity: <?php if($this->params->get("cam_loaderOpacity")) : echo $this->params->get("cam_loaderOpacity"); else : ?>8<?php endif; ?>,
					loaderPadding: <?php if($this->params->get("cam_loaderPadding")) : echo $this->params->get("cam_loaderPadding"); else : ?>2<?php endif; ?>,
					loaderStroke: <?php if($this->params->get("cam_loaderStroke")) : echo $this->params->get("cam_loaderStroke"); else : ?>7<?php endif; ?>,
					navigation: <?php if ($this->params->get("cam_navigation")) : ?>true<?php else: ?>false<?php endif; ?>,
					playPause: <?php if ($this->params->get("cam_playPause")) : ?>true<?php else: ?>false<?php endif; ?>,
					navigationHover: <?php if ($this->params->get("cam_navigationHover")) : ?>true<?php else: ?>false<?php endif; ?>,
					mobileNavHover: <?php if ($this->params->get("cam_mobileNavHover")) : ?>true<?php else: ?>false<?php endif; ?>,
					opacityOnGrid: <?php if ($this->params->get("cam_opacityOnGrid")) : ?>true<?php else: ?>false<?php endif; ?>,
					pagination: <?php if ($this->params->get("cam_pagination")) : ?>true<?php else: ?>false<?php endif; ?>,
					pauseOnClick: <?php if ($this->params->get("cam_pauseOnClick")) : ?>true<?php else: ?>false<?php endif; ?>,
					portrait: <?php if ($this->params->get("cam_portrait")) : ?>true<?php else: ?>false<?php endif; ?>
				});
			});
		</script>
	<?php endif; ?>
	<!-- End of Built-in Slideshow -->
	<?php endif; ?>

	<style type="text/css">

	.button,button,a.button,.btn, #com-form-login-remember input.default, a.product-details,input.addtocart-button,a.ask-a-question,.highlight-button,.vm-button-correct, span.quantity-controls input.quantity-plus,span.quantity-controls input.quantity-minus,a.details {
	font-size: <?php echo $this->params->get('contentfontsize'); ?>;
}

	body, input, button, select, textarea {
	font-size: <?php echo $this->params->get('contentfontsize'); ?>;
	font-weight: <?php echo $this->params->get('fontweight'); ?>;
	<?php
	if($this->params->get('OverrideDefaultSettings') == false ) : 

	$selectFont = $this->params->get('fontfamily');
	$selectAddCharSet = false;
	$gfont = false;
	$gfontString = false;
	if($this->params->get('addcharacterset') != "0") :
	$selectAddCharSet = ",".$this->params->get('addcharacterset');
	endif;
	
	switch ($selectFont) {
		case "1":
			echo 'font-family: Georgia, serif;';
			break;
		case "2":
			echo 'font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;';
			break;
		case "3":
			echo 'font-family: "Times New Roman", Times, serif;';
			break;
		case "4":
			echo 'font-family: Arial, Helvetica, sans-serif;';
			break;
		case "5":
			echo 'font-family: "Arial Black", Gadget, sans-serif;';
			break;
		case "6":
			echo 'font-family: "Comic Sans MS", cursive, sans-serif;';
			break;
		case "7":
			echo 'font-family: Impact, Charcoal, sans-serif;';
			break;
		case "8":
			echo 'font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;';
			break;
		case "9":
			echo 'font-family: Tahoma, Geneva, sans-serif;';
			break;
		case "10":
			echo 'font-family: "Trebuchet MS", Helvetica, sans-serif;';
			break;
		case "11":
			echo 'font-family: Verdana, Geneva, sans-serif';
			break;
		case "12":
			echo 'font-family: "Courier New", Courier, monospace;';
			break;
		case "13":
			echo 'font-family: "Lucida Console", Monaco, monospace;';
			break;
		case "g1":
			echo 'font-family: "Open Sans", sans-serif;';
			$gfont = true;
			$gfontString = "Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic:latin".$selectAddCharSet;
			break;
		case "g2":
			echo 'font-family: "Roboto", sans-serif;';
			$gfont = true;
			$gfontString = "Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900italic,900:latin".$selectAddCharSet;
			break;
		case "g3":
			echo 'font-family: "Lato", sans-serif;';
			$gfont = true;
			$gfontString = "Lato:400,300,300italic,400italic,700,700italic,900,900italic:latin".$selectAddCharSet;
			break;
		case "g4":
			echo 'font-family: "Oswald", sans-serif;';
			$gfont = true;
			$gfontString = "Oswald:400,300,700:latin".$selectAddCharSet;
			break;
		case "g5":
			echo 'font-family: "PT Sans", sans-serif;';
			$gfont = true;
			$gfontString = "PT+Sans:400,400italic,700,700italic:latin".$selectAddCharSet;
			break;
		case "g6":
			echo 'font-family: "Droid Sans", sans-serif;';
			$gfont = true;
			$gfontString = "Droid+Sans:400,700:latin".$selectAddCharSet;
			break;
		case "g7":
			echo 'font-family: "Droid Serif", serif;';
			$gfont = true;
			$gfontString = "Droid+Serif:400,400italic,700italic,700:latin".$selectAddCharSet;
			break;
		case "g8":
			echo 'font-family: "Ubuntu", sans-serif;';
			$gfont = true;
			$gfontString = "Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic:latin".$selectAddCharSet;
			break;
		case "g9":
			echo 'font-family: "Raleway", sans-serif;';
			$gfont = true;
			$gfontString = "Raleway:400,300,300italic,400italic,500,500italic,600,600italic,700,700italic:latin".$selectAddCharSet;
			break;		
	}
	else: 
	echo 'font-family: '.$this->params->get('AdditionalGFontFamily').';';
	endif; ?>
	
	}
	<?php 
	$gfont1 = false;
	if($this->params->get('AdditionalGFontON') == true ) : 
	$gfont1 = true;
	echo $this->params->get('AdditionalGFontTagsAffected'); ?> { font-family: <?php echo $this->params->get('AdditionalGFontFamily'); ?>;}
	<?php endif; ?>
	
	header#top-handler{
		position: <?php echo $this->params->get('headerposition'); ?>;
		top: 0px;
	}
	
	<?php if($this->params->get('headerposition') == 'fixed' ) : ?>
	body{padding-top:<?php echo $this->params->get('topheight'); ?>px;}
	<?php endif; ?>
	
	header#top-handler.fixed.tiny #top {
		margin-top: -<?php echo $this->params->get('topheight'); ?>px;
	}
	
	#st-navigation {
		padding-top: <?php echo $this->params->get('topheight')/2 - 20; ?>px;
	}
	
	@media (max-width:979px){
		<?php if( $this->countModules('builtin-slideshow or slideshow')) : ?>
		#mega-menu {
			top: 0px;
		}
		<?php else: ?>
		#mega-menu {
			top: <?php echo $this->params->get('topheight'); ?>px;
		}
		<?php endif; ?>
	}
	
	<?php 
	if(!$this->countModules('builtin-slideshow or slideshow') and ($this->params->get("usemegamenu")) ) : 
	?>
	
	@media (min-width:768px) and (max-width:979px) {
		<?php if( !($this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') ) && !($this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2') )  ) : ?>
		.rs-cl{width:0px !important;}
		.rs-cc{width:100% !important;}
		<?php elseif( ($this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') ) && !($this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2') )  ) : ?>
		.rs-cl{width:0px !important;}
		.rs-cc{width:74.30939226519337% !important;}
		<?php endif; ?>	
	}
	<?php endif; ?>

	
	#site-name-handler,#sn-position,.snc-handler, #st-navigation{height:<?php echo $this->params->get('topheight'); ?>px; }
	#searchOpenButton,#cl-handler .cart-button,.log-panel li a{}

	@media (max-width: 767px) {
		.megamenu-background{position:static;}
	}
	
	#sn-position .h1{<?php if ($this->direction == 'rtl') : ?>right<?php else: ?>left<?php endif; ?>:<?php echo $this->params->get('H1TitlePositionX'); ?>px;top:<?php echo $this->params->get('H1TitlePositionY'); ?>px;color:<?php echo $this->params->get('sitenamecolor'); ?>;font-size:<?php echo $this->params->get('sitenamefontsize'); ?>;}
	#sn-position .h1 a {color:<?php echo $this->params->get('sitenamecolor'); ?>;}
	#sn-position .h2 {<?php if ($this->direction == 'rtl') : ?>right<?php else: ?>left<?php endif; ?>:<?php echo $this->params->get('H2TitlePositionX'); ?>px;top:<?php echo $this->params->get('H2TitlePositionY'); ?>px;color:<?php echo $this->params->get('slogancolor'); ?>;font-size:<?php echo $this->params->get('sloganfontsize'); ?>;line-height:<?php echo $this->params->get('sloganfontsize'); ?>;}
	#top-header-handler{margin-top:<?php echo $this->params->get('H1TitlePositionY') -2; ?>px;}

	.eupopup-container { background-color: rgba(<?php echo hex2rgb($this->params->get('cookiecolor1')); ?>,<?php echo $this->params->get('windowopacity'); ?>); }
	.eupopup-head, .eupopup-closebutton:hover { color: <?php echo $this->params->get('cookiecolor2'); ?> !important; }
	.eupopup-body, .eupopup-closebutton { color: <?php echo $this->params->get('cookiecolor3'); ?>; }
	.eupopup-button_1, .eupopup-button_2, .eupopup-button_1:hover, .eupopup-button_2:hover { color: <?php echo $this->params->get('cookiecolor4'); ?> !important; }
	
	<?php if($this->params->get('breadcrumbbg')) : ?>
	#breadcrumb-line.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('breadcrumbbg'); ?>);
	}
	#breadcrumb-line > .background-parallax {
		height: <?php echo $this->params->get('breadcrumbpbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('breadcrumbbg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('topmod1bg')) : ?>
	#tab-modules.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('topmod1bg'); ?>);
	}
	#tab-modules > .background-parallax {
		height: <?php echo $this->params->get('topmod1pbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('topmod1bg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('topmod2bg')) : ?>
	#top-modules.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('topmod2bg'); ?>);
	}
	#top-modules > .background-parallax {
		height: <?php echo $this->params->get('topmod2pbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('topmod2bg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('toplongbg')) : ?>
	#top-long.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('toplongbg'); ?>);
	}
	#top-long > .background-parallax {
		height: <?php echo $this->params->get('toplongpbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('toplongbg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('tabsbg')) : ?>
	#tabs.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('tabsbg'); ?>);
	}
	#tabs .background-parallax {
		height: <?php echo $this->params->get('tabspbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('tabsbg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('testimonialsbg')) : ?>
	#testimonials.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('testimonialsbg'); ?>);
	}
	#testimonials> .background-parallax {
		height: <?php echo $this->params->get('testimonialspbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('testimonialsbg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('bottomlongbg')) : ?>
	#bottom-long.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('bottomlongbg'); ?>);
	}
	#bottom-long> .background-parallax {
		height: <?php echo $this->params->get('bottomlongpbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('bottomlongbg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('botmodulesbg')) : ?>
	#bot-modules.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('botmodulesbg'); ?>);
	}
	#bot-modules> .background-parallax {
		height: <?php echo $this->params->get('botmodulespbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('botmodulesbg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('bottomlong2bg')) : ?>
	#bottom-long-2.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('bottomlong2bg'); ?>);
	}
	#bottom-long-2 > .background-parallax {
		height: <?php echo $this->params->get('bottomlong2pbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('bottomlong2bg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('bottomlong3bg')) : ?>
	#bottom-long-3.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('bottomlong3bg'); ?>);
	}
	#bottom-long-3 > .background-parallax {
		height: <?php echo $this->params->get('bottomlong3pbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('bottomlong3bg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('bottombgbg')) : ?>
	#bottom-bg.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('bottombgbg'); ?>);
	}
	#bottom-bg > .background-parallax {
		height: <?php echo $this->params->get('bottombgpbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('bottombgbg'); ?>);
	}
	<?php endif; ?>
	<?php if($this->params->get('footerbg')) : ?>
	#footer.background-photo {
		background-image: url(<?php echo JURI::base(). $this->params->get('footerbg'); ?>);
	}
	#footer > .background-parallax {
		height: <?php echo $this->params->get('footerpbgheight'); ?>;
		background-image: url(<?php echo JURI::base(). $this->params->get('footerbg'); ?>);
	}
	<?php endif; ?>

	<?php if( $this->countModules('header-left')) : ?>

		#header-left-handler {
			<?php echo $this->params->get('HLposition'); ?>: <?php echo $this->params->get('HLspaceFrom'); ?>px; 
			max-width: <?php echo $this->params->get('HLmaxWidth'); ?>px;
		}

		#header-left-panel {
			height: <?php echo $this->params->get('HLheight'); ?>px !important;
		}

		#hl-panel-handler {
			width: <?php echo $this->params->get('HLmaxWidth') - 60; ?>px !important; 
		}

		#hl-open {
			height: <?php echo $this->params->get('HLlabelSize'); ?>px;
			<?php if( $this->params->get('HLposition') == "bottom" ) : ?>margin-top: <?php echo $this->params->get('HLheight') - $this->params->get('HLlabelSize'); ?>px;<?php endif; ?>
		}

		#hl-open:after {
			<?php if( $this->params->get('HLposition') == "top" ) : ?>
			border-bottom-color: transparent !important;
			border-right-color: transparent !important;
			bottom: -10px;
			<?php else: ?>
			border-top-color: transparent !important;
			border-right-color: transparent !important;
			top: -10px;			
			<?php endif; ?>
		}

		#hl-open-label {
			top: <?php echo $this->params->get('HLlabelSize')/2; ?>px;
			right: -<?php echo ($this->params->get('HLlabelSize') - 40)/2; ?>px;
			width: <?php echo $this->params->get('HLlabelSize'); ?>px;

		}
	<?php endif; ?>

	<?php if( $this->countModules('header-right')) : ?>

		#header-right-handler {
			<?php echo $this->params->get('HRposition'); ?>: <?php echo $this->params->get('HRspaceFrom'); ?>px; 
			max-width: <?php echo $this->params->get('HRmaxWidth'); ?>px;
		}

		#header-right-panel {
			height: <?php echo $this->params->get('HRheight'); ?>px !important;
		}

		#hr-panel-handler {
			width: <?php echo $this->params->get('HRmaxWidth') - 60; ?>px !important; 
		}

		#hr-open {
			height: <?php echo $this->params->get('HRlabelSize'); ?>px;
			<?php if( $this->params->get('HRposition') == "bottom" ) : ?>margin-top: <?php echo $this->params->get('HRheight') - $this->params->get('HRlabelSize'); ?>px;<?php endif; ?>
		}

		#hr-open-label {
			top: <?php echo $this->params->get('HRlabelSize')/2; ?>px;
			right: -<?php echo ($this->params->get('HRlabelSize') - 40)/2; ?>px;
			width: <?php echo $this->params->get('HRlabelSize'); ?>px;

		}
	
	<?php endif; ?>	
	
	<?php if( $this->countModules('header-left or header-right')) : ?>
	@media screen and (max-width: 767px) {
	 <?php if( $this->params->get('HLmobileVisible') == "no" ) : ?>
	 #header-left-handler {display:none;}
	 <?php endif; ?>
	 <?php if( $this->params->get('HRmobileVisible') == "no" ) : ?>
	 #header-right-handler {display:none;}
	 <?php endif; ?>
	}
	<?php endif; ?>	

	ul.columns-2 {width: <?php echo $this->params->get('dropdownhandler2'); ?>px !important;}
	ul.columns-3 {width: <?php echo $this->params->get('dropdownhandler3'); ?>px !important;}
	ul.columns-4 {width: <?php echo $this->params->get('dropdownhandler4'); ?>px !important;}
	ul.columns-5 {width: <?php echo $this->params->get('dropdownhandler5'); ?>px !important;}

	
	<?php if ($this->direction == 'rtl') : ?>
	ul.menu-nav li li:hover ul, ul.menu-nav li li.sfHover ul {
		right: <?php echo $this->params->get("dropdownhandler1") - 1; ?>em !important;
		left: auto !important;
	}
	<?php endif; ?>
	<?php if( $this->countModules('builtin-slideshow')) : 
	if($this->params->get("cam_turnOn")) : ?>

	[class*="fade"] > div > div { top: <?php echo $this->params->get('cam_captionTop2'); ?>; }

	.camera_pie {
		width: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>px;
		height: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>px;
	}
	#slideshow-handler { min-height: <?php echo $this->params->get("cam_minHeight"); ?>; }
	<?php endif; endif; ?>
<?php							
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb);
}
?>

<?php if($this->params->get('usetheme')==false) : ?> 
body,.chas-bg .tmp-content-area,.featured-mods,.cart-button .products-number .total_products,#intro-panel,.action-handler .addtocart-area form.product .custom-fields-panel .close-advanced-fields{background-color:#ffffff;color:#585858;}#main-content-handler ul#mega-menu > li > a{color:#585858;}#main-content-handler #megamenu-handler #mega-menu.menu-nav>li:after{background:-moz-linear-gradient(left,rgba(204,204,204,0.1) 0%,rgba(204,204,204,0.7) 50%,rgba(204,204,204,0.1) 100%);background:-webkit-gradient(linear,left top,right top,color-stop(0%,rgba(204,204,204,0.1)),color-stop(50%,rgba(204,204,204,0.7)),color-stop(100%,rgba(204,204,204,0.1)));background:-webkit-linear-gradient(left,rgba(204,204,204,0.1) 0%,rgba(204,204,204,0.7) 50%,rgba(204,204,204,0.1) 100%);background:-o-linear-gradient(left,rgba(204,204,204,0.1) 0%,rgba(204,204,204,0.7) 50%,rgba(204,204,204,0.1) 100%);background:-ms-linear-gradient(left,rgba(204,204,204,0.1) 0%,rgba(204,204,204,0.7) 50%,rgba(204,204,204,0.1) 100%);background:linear-gradient(to right,rgba(204,204,204,0.1) 0%,rgba(204,204,204,0.7) 50%,rgba(204,204,204,0.1) 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#1acccccc',endColorstr='#1acccccc',GradientType=1 );}.global-container{background-color:#efeff1;}#top-modules,#tabs:before,#tab-modules:before{background-color:<?php echo $this->params->get("color2"); ?>;color:#ffffff;}dt.tabs.open,.latest-view .spacer,.topten-view .spacer,.recent-view .spacer,.featured-view .spacer,.browse-view .spacer,.row-fluid .spacer .action-handler .popout-price .product-details,.row-fluid .spacer .action-handler .popout-price .show-pop-up-image,.row-fluid .spacer .popout-price-buttons-handler .show-advanced-fields,.moduletable_products.quick .spacer .pr-img-handler a,#customers-box,div.spacer,li.spacer,.product-details-image-handler,.zoomWindow{background-color:#ffffff!important;}.custom-color1{color:<?php echo $this->params->get("color6"); ?>!important;}.custom-color2{color:<?php echo $this->params->get("color7"); ?>!important;}.custom-color3{color:<?php echo $this->params->get("color8"); ?>!important;}.custom-color4{color:<?php echo $this->params->get("color9"); ?>!important;}.custom-background1{background-color:<?php echo $this->params->get("color10"); ?>!important;}.custom-background2{background-color:<?php echo $this->params->get("color11"); ?>!important;}.custom-background3{background-color:<?php echo $this->params->get("color12"); ?>!important;}.custom-background4{background-color:<?php echo $this->params->get("color13"); ?>!important;}header#top-handler{background:#ffffff;}.holder-background{background:<?php echo $this->params->get("color1"); ?>;background:-moz-linear-gradient(left,<?php echo $this->params->get("color1"); ?> 0%,<?php echo $this->params->get("color2"); ?> 100%);background:-webkit-gradient(linear,left top,right top,color-stop(0%,<?php echo $this->params->get("color1"); ?>),color-stop(100%,<?php echo $this->params->get("color2"); ?>));background:-webkit-linear-gradient(left,<?php echo $this->params->get("color1"); ?> 0%,<?php echo $this->params->get("color2"); ?> 100%);background:-o-linear-gradient(left,<?php echo $this->params->get("color1"); ?> 0%,<?php echo $this->params->get("color2"); ?> 100%);background:-ms-linear-gradient(left,<?php echo $this->params->get("color1"); ?> 0%,<?php echo $this->params->get("color2"); ?> 100%);background:linear-gradient(to right,<?php echo $this->params->get("color1"); ?> 0%,<?php echo $this->params->get("color2"); ?> 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $this->params->get("color1"); ?>',endColorstr='<?php echo $this->params->get("color2"); ?>',GradientType=1 );}.sl-holder-bg .shapes-bg-shape-2,.sl-holder-bg .shapes-bg-shape-5,.tabs-holder-bg .shapes-bg-shape-4,.tabs-holder-bg .shapes-bg-shape-5,.footer-holder-bg .shapes-bg-shape-8{color:#efeff1;}.tabs-holder-bg:before{background-color:#efeff1;}.tabs-holder-bg .shapes-bg-shape-5:before,.sl-holder-bg .shapes-bg-shape-2:before{text-shadow:0px 3px 1px #efeff1;}.sl-holder-bg .shapes-bg-shape-1,.tabs-holder-bg .shapes-bg-shape-6,.footer-holder-bg .shapes-bg-shape-9{color:rgba(<?php echo hex2rgb($this->params->get("color1")); ?>,0.2);}.sl-holder-bg .shapes-bg-shape-1:before,.tabs-holder-bg .shapes-bg-shape-6:before,.footer-holder-bg .shapes-bg-shape-9:before{background:-webkit-linear-gradient(left,rgba(<?php echo hex2rgb($this->params->get("color1")); ?>,0.2),rgba(<?php echo hex2rgb($this->params->get("color2")); ?>,0.2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;}.sl-holder-bg .shapes-bg-shape-3,.tabs-holder-bg .shapes-bg-shape-7,.footer-holder-bg .shapes-bg-shape-10{color:<?php echo $this->params->get("color3"); ?>;}#top-handler-holder,#top-handler-holder .breadcrumb>li>.divider,.breadcrumb>.active,.breadcrumb>li>a{color:#ffffff;}#search-position #searchpanel input.inputbox,#search-position .search{color:#585858;background-color:#eeeeee;}a#cartpanel,#cl-handler .selectric p.label,.log-panel li a,#cl-handler .button.currency-button,#searchOpenButton{color:#585858;}.jump-to-top a{background-color:<?php echo $this->params->get("color1"); ?>;color:#ffffff;}.jump-to-top a:hover{background-color:<?php echo $this->params->get("color2"); ?>;color:#ffffff;}a,a:hover,.moduletable_menu ul.menu li ul li a:hover{color:<?php echo $this->params->get("color2"); ?>;}.row-fluid .spacer .action-handler .popout-price .show-pop-up-image a:hover:after,.row-fluid .spacer .action-handler .popout-price .show-advanced-fields:hover:after,.moduletable_menu.icon.vertical .menu-nav>li>a:hover{color:<?php echo $this->params->get("color2"); ?>!important;}.button,button,a.button,.btn,dt.tabs.closed:hover,dt.tabs.closed:hover h3 a,.closemenu,.vmproduct.product-details .spacer:hover .pr-add,.vmproduct.product-details .spacer:hover .pr-add-bottom,a.product-details,a.ask-a-question,.highlight-button,.vm-button-correct,.cartpanel span.closecart,.vm-pagination ul li a,#LoginForm .btn-group > .dropdown-menu,#LoginForm .btn-group > .dropdown-menu a,a.details,#stickymenuButton,.img_style2 .con_style2 p:before,.product-neighbours a.previous-page:before,.product-neighbours a.next-page:after,input.addtocart-button,.camera_caption .button.b-arrow:after,#com-form-login-remember input.default,.camera_caption_bg a.button,#sbox-btn-close:hover:after,.activeOrder,.view-as li a,#open-intro-panel {color:#ffffff!important;background-color:<?php echo $this->params->get("color2"); ?>!important;}div.activeOrder a,.addtocart-bar,.addtocart-bar input,.addtocart-bar input:hover{color:#ffffff!important;}.button:hover,button:hover,a.button:hover,.closemenu:hover,.btn:hover,a.product-details:hover,a.ask-a-question:hover,.highlight-button:hover,.vm-button-correct:hover .cartpanel span.closecart:hover,.vm-pagination ul li a:hover,a.details:hover,#stickymenuButton:hover,input.addtocart-button:hover,.camera_caption .button.b-arrow:hover:after,#com-form-login-remember input.default:hover,.camera_caption_bg a.button:hover,#open-intro-panel:hover,.button.light:hover,.button.light.white:hover,.button.light.black:hover,.activeOrder:hover,.view-as li a:hover,#open-intro-panel:hover{color:#ffffff!important;background-color:<?php echo $this->params->get("color4"); ?>!important;border-color:<?php echo $this->params->get("color4"); ?>!important;}.button.light{color:#585858!important;background-color:#ffffff!important;border-color:#e8e8e8!important;}#LoginForm .modal-header{background-color:#ededed;color:#666666;}.close-lgform-button{color:#666666!important;}#LoginForm .btn-group > .dropdown-menu a:hover{background:<?php echo $this->params->get("color4"); ?>!important;color:#ffffff!important;}#LoginForm .button:hover .caret,#LoginForm .button .caret{border-top-color:#ffffff!important;}.row-fluid .spacer .action-handler .popout-price .show-pop-up-image a:after,.row-fluid .spacer .action-handler .popout-price .show-advanced-fields:after{color:#727272;}.pr-add,.pr-add-bottom,.featured-view .spacer h3,.latest-view .spacer h3,.topten-view .spacer h3,.recent-view .spacer h3,.related-products-view .spacer h3,.browse-view .product .spacer h2,.featured-view .spacer .product_s_desc,.latest-view .spacer .product_s_desc,.topten-view .spacer .product_s_desc,.recent-view .spacer .product_s_desc,.related-products-view .spacer .product_s_desc,.browse-view .product .spacer .product_s_desc{color:#666666;}.browse-top,.browse-top h1,.orderby-displaynumber,.category_description{background-color:#fafafa;}.category-view .row-fluid .category .spacer h2 a .cat-title{color:#666666;}.moduletable_products .short_des{color:#b5b5b5;}.moduletable_products.tiles .spacer .action-handler{background:rgba(255,255,255,0.95);}.action-handler .addtocart-area form.product .custom-fields-panel{background-color:#ffffff;}.moduletable a,div.panel2 a,.category_description a,.productdetails-view a{color:<?php echo $this->params->get("color2"); ?>;}.camera_prev,.camera_next,.camera_commands{background-color:#ffffff;}.camera_prev>span:before,.camera_next>span:before,.camera_commands>.camera_play:before,.camera_commands>.camera_stop:before{color:#585858;}.camera_wrap .camera_pag .camera_pag_ul li > span{background-color:#b8b8b8;}.camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span,.camera_wrap .camera_pag .camera_pag_ul li:hover > span{background-color:<?php echo $this->params->get("color2"); ?>;}.camera_thumbs_cont ul li > img{border:2px solid #ffffff!important;}.camera_caption_bg,.slickslideshow .action-handler-inner,.slickslideshow .action-handler-inner *{color:#ffffff;}#megamenu-handler ul.menu-nav ul{background-color:#ffffff;}#megamenu-handler #mega-menu.menu-nav>li:after{background:-moz-linear-gradient(left,rgba(255,255,255,0.1) 0%,rgba(255,255,255,0.7) 50%,rgba(255,255,255,0.1) 100%);background:-webkit-gradient(linear,left top,right top,color-stop(0%,rgba(255,255,255,0.1)),color-stop(50%,rgba(255,255,255,0.7)),color-stop(100%,rgba(255,255,255,0.1)));background:-webkit-linear-gradient(left,rgba(255,255,255,0.1) 0%,rgba(255,255,255,0.7) 50%,rgba(255,255,255,0.1) 100%);background:-o-linear-gradient(left,rgba(255,255,255,0.1) 0%,rgba(255,255,255,0.7) 50%,rgba(255,255,255,0.1) 100%);background:-ms-linear-gradient(left,rgba(255,255,255,0.1) 0%,rgba(255,255,255,0.7) 50%,rgba(255,255,255,0.1) 100%);background:linear-gradient(to right,rgba(255,255,255,0.1) 0%,rgba(255,255,255,0.7) 50%,rgba(255,255,255,0.1) 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#1affffff',endColorstr='#1affffff',GradientType=1 );}ul#mega-menu > li > a{color:#ffffff;}ul#mega-menu > li.active > a,ul#mega-menu > li > a:hover,ul#mega-menu > li.sfHover > a{color:#585858!important;background-color:#ffffff;}.menu-nav > li > a{color:#585858;}.menu-nav > li.active > a,.menu-nav > li > a:hover,.menu-nav > li.sfHover > a,.menupanel ul.selectnav li a:hover,a.menupanel:hover,a.menupanel,.open-social-links:hover,#menupanel2{color:#585858!important;background-color:#efeff1;}.menu-nav > li > a > span small{background:#ffae21;color:#ffffff;}.menu-nav > li > a > span small:before{border-top-color:#ffae21;}.menu-nav > li > a > span small.hot{background:#e53535;color:#ffffff;}.menu-nav > li > a > span small.hot:before{border-top-color:#e53535;}.menu-nav > li > a > span small.featured{background:#9ccc6c;color:#ffffff;}.menu-nav > li > a > span small.featured:before{border-top-color:#9ccc6c;}.menu-nav ul li a,.selectric-items li,.orderlist a{color:#595959;}.menu-nav ul li > a:hover,.menu-nav ul li.sfHover > a,.selectric-items li:hover,.orderlist a:hover{color:#ffffff!important;background-color:<?php echo $this->params->get("color2"); ?>!important;}#mega-menu [class*="moduletable"] h3{color:#666666;border-bottom-color:#d9d9d9;}@media (max-width:979px){ #menu #nav,#mega-menu,#megamenu-handler > ul.menu-nav{background-color:#ffffff!important;}#menu .menu-nav ul li a,ul#mega-menu > li > a,#menu .menu-nav>li>a{color:#696969!important;}#menu .menu-nav ul li a:hover,#menu .menu-nav ul li.sfHover > a,ul#mega-menu > li.active > a{color:<?php echo $this->params->get("color2"); ?>!important;}ul#mega-menu > li > a:hover,ul#mega-menu > li.sfHover > a,#menu .menu-nav>li>a:hover{color:#ffffff!important;background-color:<?php echo $this->params->get("color2"); ?>!important;}}.menu-nav ul li a .sf-sub-indicator{border-color:<?php echo $this->params->get("color2"); ?>;}.menu-nav ul li a:hover .sf-sub-indicator,.menu-nav ul li.sfHover > a .sf-sub-indicator {border-color:#ffffff;}.menu-nav li ul,.menu-nav li ul li ul,#nav ol,#nav ul,#nav ol ol,#nav ul ul,div.panel1,div.panel2,#tpr-nav #LoginForm,.selectric-items,.li-container{background-color:#ffffff!important;}thead th,table th,tbody th,tbody td{border:1px solid #dedede;}table.cart-summary tr th{background-color:#dedede;}.search-results dt.result-title,.moduletable_menu > h3,.moduletable > h3,.category-view h4,.featured-view h4,.latest-view h4,.topten-view h4,.recent-view h4,.blog-featured .item h2{border-bottom:1px solid #dedede;}.productdetails-view h1,.product-short-description,input.quantity-input{border-color:#dedede;}.zoomimg_floating a{background-color:#ffffff;}.zoomimg_floating a.active{border-color:<?php echo $this->params->get("color2"); ?>;}.icons .btn.dropdown-toggle .icon-cog{color:#c2c2c2;}.icons .dropdown-menu li a{color:#c2c2c2;background-color:#ffffff!important;}.icons .btn.dropdown-toggle .icon-cog:hover,.icons .dropdown-menu li a:hover{color:#ffffff!important;background-color:<?php echo $this->params->get("color2"); ?>!important;}.product-price,div.PricebillTotal.vm-display.vm-price-value span.PricebillTotal,.product-price-1{color:<?php echo $this->params->get("color2"); ?>;}.h-pr-title a{color:#696969;}.owl-theme .owl-controls .owl-page span,.slick-dots li button{color:#696969;background-color:#cfcfcf!important;}.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span,.slick-dots li.slick-active button,.slick-dots li:hover button{color:#ffffff;background-color:<?php echo $this->params->get("color2"); ?>!important;}.moduletable_menu > h3,.moduletable_products > h3,.moduletable > h3,.category-view h4,.featured-view h4,.latest-view h4,.topten-view h4,.recent-view h4{color:#666666;}.moduletable_menu ul.menu li a,.latestnews_menu li a,.VMmenu li div a{color:<?php echo $this->params->get("color4"); ?>;}.moduletable_menu ul.menu li a:hover,ul.latestnews_menu li a:hover,.VMmenu li div a:hover{color:<?php echo $this->params->get("color2"); ?>;}.VmArrowdown{background-color:<?php echo $this->params->get("color2"); ?>;}.moduletable_products .owl-white .owl-theme .owl-controls .owl-page span,.moduletable_products .owl-white .owl-theme .owl-controls .owl-page.active span{background-color:#ffffff!important;}.moduletable_products .owl-white .owl-theme .owl-controls .owl-prev,.moduletable_products .owl-white .owl-theme .owl-controls .owl-next{color:#ffffff;}.moduletable_products > .module-content-handler > h3{color:<?php echo $this->params->get("color1"); ?>;border-bottom:1px solid #d6d6d6;}.moduletable_products > .module-content-handler > h3 span.h-cl:before{background-color:<?php echo $this->params->get("color1"); ?>;}.moduletable_style1 h3 .ifa-icon{background-color:#ffffff;color:<?php echo $this->params->get("color1"); ?>;}.moduletable_style1:hover h3 .ifa-icon{background-color:<?php echo $this->params->get("color1"); ?>;color:#ffffff;}.moduletable_style2{border-color:#cccccc;}.moduletable_style3,.moduletable_style3.color1,.moduletable_style4,.moduletable_style4.color1{background-color:#ffffff!important;color:#585858!important;}.moduletable_style4:after,.moduletable_style4.color1:after{border-color:#ffffff transparent transparent transparent;}.moduletable_style3.color1 a,.moduletable_style4 a,.moduletable_style4.color1 a,.moduletable_style4 h3,.moduletable_style4.color1 h3,.moduletable_style5.color1 a{color:<?php echo $this->params->get("color2"); ?>;}.moduletable_style3.color2,.moduletable_style4.color2,.moduletable_style4.color2,.moduletable_style5.color2,.quick-contact{background-color:<?php echo $this->params->get("color2"); ?>!important;color:#ffffff!important;}.moduletable_style4.color2:after{border-color:<?php echo $this->params->get("color2"); ?> transparent transparent transparent;}.moduletable_style3.color2 a,.moduletable_style4.color2 a,.moduletable_style4.color2 h3,.moduletable_style5.color2 a,.moduletable_style5.color2 h3,.quick-contact a{color:#ffffff;}.moduletable_style4 .module-content-handler > h3 .h-cl .ifa-icon{background-color:#b51421;color:#ffffff;}.moduletable_style3.color3,.moduletable_style4.color3,.moduletable_style5.color3{background-color:#2d2d2d!important;color:#ffffff!important;}.moduletable_style4.color3:after{border-color:#2d2d2d transparent transparent transparent;}.moduletable_style3.color3 a,.moduletable_style4.color3 a,.moduletable_style4.color3 h3,.moduletable_style5.color3 a,.moduletable_style5.color3 h3 {color:#ffffff;}.moduletable_style6.color1 .module-content{background-color:#efeff1;color:#585858;}.moduletable_style6.color1 .module-content a{color:<?php echo $this->params->get("color2"); ?>;}.moduletable_style6.tes-down.color1 .module-content:after{border-color:#efeff1 transparent transparent transparent;}.moduletable_style6.tes-up.color1 .module-content:after{border-color:transparent transparent #efeff1 transparent;}.moduletable_style6.tes-left.color1 .module-content:after{border-color:transparent #efeff1 transparent transparent;}.moduletable_style6.tes-right.color1 .module-content:after{border-color:transparent transparent transparent #efeff1;}.moduletable_style6.color2 .module-content{background-color:<?php echo $this->params->get("color2"); ?>;color:#ffffff;}.moduletable_style6.color2 .module-content a{color:#ffffff;}.moduletable_style6.tes-down.color2 .module-content:after{border-color:<?php echo $this->params->get("color2"); ?> transparent transparent transparent;}.moduletable_style6.tes-up.color2 .module-content:after{border-color:transparent transparent <?php echo $this->params->get("color2"); ?> transparent;}.moduletable_style6.tes-left.color2 .module-content:after{border-color:transparent <?php echo $this->params->get("color2"); ?> transparent transparent;}.moduletable_style6.tes-right.color2 .module-content:after{border-color:transparent transparent transparent <?php echo $this->params->get("color2"); ?>;}.moduletable_style6.color3 .module-content{background-color:<?php echo $this->params->get("color5"); ?>;color:#9fa4ab;}.moduletable_style6.color3 .module-content a{color:#ffffff;}.moduletable_style6.tes-down.color3 .module-content:after{border-color:<?php echo $this->params->get("color5"); ?> transparent transparent transparent;}.moduletable_style6.tes-up.color3 .module-content:after{border-color:transparent transparent <?php echo $this->params->get("color5"); ?> transparent;}.moduletable_style6.tes-left.color3 .module-content:after{border-color:transparent <?php echo $this->params->get("color5"); ?> transparent transparent;}.moduletable_style6.tes-right.color3 .module-content:after{border-color:transparent transparent transparent <?php echo $this->params->get("color5"); ?>;}.moduletable_menu .VmOpen ul.menu li a,.moduletable_menu ul.menu li ul li a{color:#4d4d4d;}.moduletable_menu .VmOpen ul.menu li a:hover,.moduletable_menu ul.menu li ul li a:hover{color:<?php echo $this->params->get("color2"); ?>;}#tabs-1 .nav-tabs{border-color:rgba(255,255,255,0.35);}#tabs-1 .nav-tabs>.active>a,#tabs-1 .nav-tabs>.active>a:hover,#tabs-1 .nav-tabs > li > a:hover,#tabs-1 .nav-tabs > li > a{color:#ffffff!important;}#tabs-1 .nav-tabs>.active>a:after,#tabs-1 .nav-tabs>.active>a:hover:after,#tabs-1 .nav-tabs > li > a:hover:after{background-color:#ffffff;}#header-left-panel,#hl-open{background-color:<?php echo $this->params->get("color2"); ?>;color:#ffffff!important;}#header-left-panel h3,#header-left-panel a{color:#ffffff!important;}#header-left-panel .button{color:#ffffff;border-color:#ffffff;}#header-left-panel .button:hover{background-color:#ffffff!important;color:<?php echo $this->params->get("color2"); ?>!important;border-color:#ffffff;}#header-right-panel,#hr-open{background-color:<?php echo $this->params->get("color2"); ?>;color:#ffffff!important;}#header-right-panel h3,#header-right-panel a{color:#ffffff!important;}#header-right-panel .button:hover{background-color:#ffffff!important;color:<?php echo $this->params->get("color2"); ?>!important;}#bottom-bg,#bottom-bg h3,#bottom-bg a,#bottom-bg a:hover,#footer,#footer a,#footer a:hover{color:#ffffff;}
<?php endif; ?>
</style>
<?php if( $this->countModules('top-1 or top-2 or top-3 or top-4 or top-5 or top-6')) : 
	if( $this->countModules('top-1') ) $a[0] = 0;
	if( $this->countModules('top-2') ) $a[1] = 1;
	if( $this->countModules('top-3') ) $a[2] = 2;
	if( $this->countModules('top-4') ) $a[3] = 3;
	if( $this->countModules('top-5') ) $a[4] = 4;
	if( $this->countModules('top-6') ) $a[5] = 5; 
	$topmodules1 = count($a); 
	if ($topmodules1 == 1) $tm1class = "span12";
	if ($topmodules1 == 2) $tm1class = "span6";
	if ($topmodules1 == 3) $tm1class = "span4";
	if ($topmodules1 == 4) $tm1class = "span3";
	if ($topmodules1 == 5) { $tm1class = "span2"; $tm1class5w = "20%"; };
	if ($topmodules1 == 6) $tm1class = "span2";
	endif; 
	
	if( $this->countModules('top-7 or top-8 or top-9 or top-10 or top-11 or top-12')) : 
	if( $this->countModules('top-7') ) $b[0] = 0;
	if( $this->countModules('top-8') ) $b[1] = 1;
	if( $this->countModules('top-9') ) $b[2] = 2;
	if( $this->countModules('top-10') ) $b[3] = 3;
	if( $this->countModules('top-11') ) $b[4] = 4;
	if( $this->countModules('top-12') ) $b[5] = 5; 
	$topmodules2 = count($b); 
	if ($topmodules2 == 1) $tm2class = "span12";
	if ($topmodules2 == 2) $tm2class = "span6";
	if ($topmodules2 == 3) $tm2class = "span4";
	if ($topmodules2 == 4) $tm2class = "span3";
	if ($topmodules2 == 5) { $tm2class = "span2"; $tm2class5w = "20%"; };
	if ($topmodules2 == 6) $tm2class = "span2";
	endif; 
	
	if( $this->countModules('intro-1 or intro-2 or intro-3 or intro-4 or intro-5 or intro-6')) :
	if( $this->countModules('intro-1') ) $itr[0] = 0; 
	if( $this->countModules('intro-2') ) $itr[1] = 1; 
	if( $this->countModules('intro-3') ) $itr[2] = 2; 
	if( $this->countModules('intro-4') ) $itr[3] = 3; 
	if( $this->countModules('intro-5') ) $itr[4] = 4; 
	if( $this->countModules('intro-6') ) $itr[5] = 5; 
	$intromodules = count($itr); 
	if ($intromodules == 1) $introclass = "span12";
	if ($intromodules == 2) $introclass = "span6";
	if ($intromodules == 3) $introclass = "span4";
	if ($intromodules == 4) $introclass = "span3";
	if ($intromodules == 5) { $introclass = "span2"; $introclass5w = "20%"; };
	if ($intromodules == 6) $introclass = "span2";
	endif; 	

	if( $this->countModules('bottom-1 or bottom-2 or bottom-3 or bottom-4 or bottom-5 or bottom-6')) :
	if( $this->countModules('bottom-1') ) $c[0] = 0; 
	if( $this->countModules('bottom-2') ) $c[1] = 1; 
	if( $this->countModules('bottom-3') ) $c[2] = 2; 
	if( $this->countModules('bottom-4') ) $c[3] = 3; 
	if( $this->countModules('bottom-5') ) $c[4] = 4; 
	if( $this->countModules('bottom-6') ) $c[5] = 5; 
	$botmodules = count($c); 
	if ($botmodules == 1) $bmclass = "span12";
	if ($botmodules == 2) $bmclass = "span6";
	if ($botmodules == 3) $bmclass = "span4";
	if ($botmodules == 4) $bmclass = "span3";
	if ($botmodules == 5) { $bmclass = "span2"; $bmclass5w = "20%"; };
	if ($botmodules == 6) $bmclass = "span2";
	endif; 
	
	if( $this->countModules('bottom-7 or bottom-8 or bottom-9 or bottom-10 or bottom-11 or bottom-12')) :
	if( $this->countModules('bottom-7') ) $cb[0] = 0; 
	if( $this->countModules('bottom-8') ) $cb[1] = 1; 
	if( $this->countModules('bottom-9') ) $cb[2] = 2; 
	if( $this->countModules('bottom-10') ) $cb[3] = 3; 
	if( $this->countModules('bottom-11') ) $cb[4] = 4; 
	if( $this->countModules('bottom-12') ) $cb[5] = 5; 
	$botmodules2 = count($cb); 
	if ($botmodules2 == 1) $bm2class = "span12";
	if ($botmodules2 == 2) $bm2class = "span6";
	if ($botmodules2 == 3) $bm2class = "span4";
	if ($botmodules2 == 4) $bm2class = "span3";
	if ($botmodules2 == 5) { $bm2class = "span2"; $bm2class5w = "20%"; };
	if ($botmodules2 == 6) $bm2class = "span2";
	endif; 
	
	if( $this->countModules('top-a or top-b or top-c or top-d')) :
	if( $this->countModules('top-a') ) $d[0] = 0; 
	if( $this->countModules('top-b') ) $d[1] = 1; 
	if( $this->countModules('top-c') ) $d[2] = 2; 
	if( $this->countModules('top-d') ) $d[3] = 3; 
	$topamodules = count($d); 
	if ($topamodules == 1) $tpaclass = "span12";
	if ($topamodules == 2) $tpaclass = "span6";
	if ($topamodules == 3) $tpaclass = "span4";
	if ($topamodules == 4) $tpaclass = "span3";
	endif; 
	
	if( $this->countModules('bottom-a or bottom-b or bottom-c or bottom-d')) :
	if( $this->countModules('bottom-a') ) $e[0] = 0; 
	if( $this->countModules('bottom-b') ) $e[1] = 1; 
	if( $this->countModules('bottom-c') ) $e[2] = 2; 
	if( $this->countModules('bottom-d') ) $e[3] = 3; 
	$bottomamodules = count($e); 
	if ($bottomamodules == 1) $bmaclass = "span12";
	if ($bottomamodules == 2) $bmaclass = "span6";
	if ($bottomamodules == 3) $bmaclass = "span4";
	if ($bottomamodules == 4) $bmaclass = "span3";
	endif; 
	
	$movemegamenu = false;
	if(!$this->countModules('builtin-slideshow or slideshow') and ($this->params->get("usemegamenu")) ) : 
	$movemegamenu = true;
	endif;
	
	if( ($this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2')  ) && ($this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2') || $movemegamenu )  ) : $mcols = 'span6'; 
	elseif( ($this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2')  ) && !($this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2') || $movemegamenu ) ) : $mcols = 'span9'; 
	elseif( !($this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2')  ) && ($this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2') || $movemegamenu )  ) : $mcols = 'span9'; else : $mcols = 'span12'; endif; ?>
	
	
<?php if($gfont == true || $gfont1 == true ) : ?>
<script type="text/javascript">
  WebFontConfig = {
	  <?php
	  if($this->params->get('AdditionalGFontON') == true ) :
	  	  $adFontName = str_replace(" ","+", $this->params->get('AdditionalGFontFamily')); 
		  $adFontSettings = $this->params->get('AdditionalGFontString');
	  endif;
	  if($this->params->get('OverrideDefaultSettings') == false ) : 
		$gfont = true;
		  else: 
		  $gfont = false;
		  endif;
		  ?>  
    google: { families: [ <?php if($gfont == true) : ?>'<?php echo $gfontString; ?>' <?php endif; if($gfont == true && $gfont1 == true ) : ?>,<?php endif; if($gfont1 == true ) : ?>'<?php echo $adFontName.":".$adFontSettings; ?>'<?php endif; ?> ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
<?php endif; ?>
</head>
<body>

	<?php if($this->params->get("usejumptotop")):?><div id="jumphere" name="jumphere"></div><?php endif; ?>
	<div class="site-loading"></div>
	<?php if($this->params->get('usecookielaw') == true) : ?>
	<div class="eupopup eupopup-container <?php echo $this->params->get('cookielawposition'); ?>">
		<div class="eupopup-markup">
			<div class="eupopup-head"><?php echo $this->params->get('windowtitle'); ?></div>
			<div class="eupopup-body"><?php echo $this->params->get('windowbody'); ?></div>
			<div class="eupopup-buttons">
				<a href="#" class="eupopup-button eupopup-button_1"><?php echo $this->params->get('agreelinklabel'); ?></a>
				<a href="<?php echo $this->params->get('learnmorelink'); ?>" target="<?php echo $this->params->get('learnmorelinktargetwindow'); ?>" class="eupopup-button eupopup-button_2"><?php echo $this->params->get('learnmorelinklabel'); ?></a>
			</div>
			<div class="clearfix"></div>
			<a href="#" class="eupopup-closebutton">&times;</a>
		</div>
	</div>
	<?php endif; ?>

	<div class="global-container">
		<header id="top-handler" class="<?php echo $this->params->get('headerposition'); ?>">
			<div class="th-bgs">
				<div class="<?php if($this->params->get("headerwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
					<?php if($this->params->get("headercontentwidth")):?><div class="container"><?php endif; ?>
						<div class="inner-handler">
							<div id="top">
								<div class="container-lr">
									<div class="row-fluid">
										<div id="site-name-handler" class="span3">
											<div id="sn-position">
												<div class="snc-handler">
													<?php if($this->params->get('logoLinked')) : ?>
													<?php if($this->params->get('H1TitleImgText') == true) : ?>
													<div class="h1"><a href="<?php echo JURI::root(); ?>"><img alt="<?php echo strip_tags($this->params->get("H1Title")); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></a></div>
													<?php else : ?>
													<div class="h1"><a href="<?php echo JURI::root(); ?>"> <?php echo $this->params->get("H1Title"); ?></a></div>
													<?php endif; ?>
													<?php else : ?>
													<?php if($this->params->get('H1TitleImgText') == true) : ?>
													<div class="h1"><img alt="<?php echo strip_tags($this->params->get("H1Title")); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></div>
													<?php else : ?>
													<div class="h1"><?php echo $this->params->get("H1Title"); ?></div>
													<?php endif; ?>
													<?php endif; ?>
													<?php if( $this->countModules('quick-contact')) : ?><div class="quick-contact"><jdoc:include type="modules" name="quick-contact" /></div><?php endif; ?>
												</div>
												<?php if($this->params->get('H2TitleImgText') == true) : ?>
												<div class="h2"><img alt="<?php echo strip_tags($this->params->get("H2Title")); ?>" src="<?php echo $this->params->get("H2Titleimage"); ?>" /></div>
												<?php else : ?>
												<div class="h2"><?php echo $this->params->get("H2Title"); ?></div>
												<?php endif; ?>
											</div>
										</div>
										<div id="st-navigation" class="span9">
											<?php if( $this->countModules('quick-menu')) : ?>
											<div class="row-fluid">
												<div class="quick-menu">
													<jdoc:include type="modules" name="quick-menu" />
												</div>
											</div>
											<?php endif; ?>
										
											<div class="row-fluid">
												<?php if( $this->countModules('cart or position-0 or loginform')) : ?>
												<div id="cl-handler">
													<?php if( $this->countModules('cart')) : ?>
													<div class="cl-handler">
														<jdoc:include type="modules" name="cart" />
													</div>
													<?php endif; ?>
													<?php if( $this->countModules('position-0')) : ?>
													<div id="search-position-handler"><div id="search-position">
														<div id="searchOpenButton"><i class="fa fa-search"></i></div>
														<div id="searchpanel">
															<jdoc:include type="modules" name="position-0" />
														</div>
													</div></div>
													<?php endif; ?>
													<?php if( $this->countModules('loginform')) : ?>
													<div id="tpr-nav">
														<?php if( $this->countModules('loginform')) : ?>
														<ul class="log-panel">
															<?php jimport( 'joomla.application.module.helper' ); $module_login = JModuleHelper::getModules('loginform'); ?>
															<li><a data-toggle="modal" href="#LoginForm" class="open-register-form"><i class="fa fa-user" aria-hidden="true"></i></a></li>
															<li><a class="v_register" href="<?php echo JRoute::_('index.php?option=com_virtuemart&view=user&layout=editaddress'); ?>"><i class="fa fa-pencil"></i></a></li>
															</ul>
														<?php endif; ?>
													</div>
													<?php endif; ?>
												</div>
												<?php endif; ?>
												<?php if( $this->countModules('position-1') or $this->params->get("usemegamenu")) : ?>
												<div id="menu">
													<?php if( $this->params->get("usemegamenu")) : ?><a href="JavaScript:;" onclick="toggle_visibility('mega-menu');" class="menupanel" id="menupanel2"><i class="fa fa-bars"></i> Shop Menu</a><?php endif; ?> <?php if( $this->countModules('position-1')) : ?><a href="JavaScript:;" onclick="toggle_visibility('nav');" class="menupanel" id="menupanel"><i class="fa fa-bars"></i> <?php jimport( 'joomla.application.module.helper' ); $module_menu = JModuleHelper::getModules('position-1'); ?><?php echo $module_menu[0]->title; ?></a><?php endif; ?>
													<?php if( $this->countModules('position-1')) : ?><div class="responsive-menu"><jdoc:include type="modules" name="position-1" /></div><?php endif; ?>
												</div>
												<?php endif; ?>
											</div>


										</div>
									</div>
								</div>
							</div>

						</div>
					<?php if($this->params->get("headercontentwidth")):?></div><?php endif; ?>
				</div>
			</div>
		</header>
	
		<?php if( ($this->countModules('builtin-slideshow or slideshow') && ($this->params->get("usemegamenu"))) || $this->countModules('top-header') ) : ?>
			<section id="slideshow-handler-bg">
				<div class="sl-holder-bg">
					<span class="holder-background"></span>
					<?php if( $this->countModules('builtin-slideshow or slideshow') && $this->params->get("usemegamenu") )  : ?>
					<span class="shapes-bg-shape-2"></span>
					<span class="shapes-bg-shape-1"></span>
					<span class="shapes-bg-shape-3"></span>
					<?php endif; ?>
					<?php if( $this->countModules('top-header') ) : ?>
					<span class="shapes-bg-shape-5"></span>
					<?php endif; ?>
				</div>
					<div class="slideshow-handler-overlayer">
						<div class="<?php if($this->params->get("headerwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
							<?php if($this->params->get("headercontentwidth")):?><div class="container"><?php endif; ?>
								<div class="row-fluid">
									
									
									<?php 
									$animData = "";
									if( $this->countModules('builtin-slideshow or slideshow') && $this->params->get("usemegamenu") )  : 
									
									if( $this->params->get("megamenuanim") != "off" ) :
										
										if( $this->params->get("megamenuanim") == "movedown" ) : 
											$animData = 'data-sr="enter bottom hustle 50px over 1.5s"';
										endif;

										if( $this->params->get("megamenuanim") == "moveup" ) :
											$animData = 'data-sr="enter top hustle 50px over 1.5s"';
										endif;

										if( $this->params->get("megamenuanim") == "moveright" ) :
											$animData = 'data-sr="enter right, hustle 60px over 1.5s"';
										endif;

										if( $this->params->get("megamenuanim") == "moveleft" ) :
											$animData = 'data-sr="enter left, hustle 60px over 1.5s"';
										endif;

									endif;
									?>
									
									<div id="megamenu-handler" class="span3" >
										<div class="megamenu-background" <?php echo $animData; ?>>
											<div class="mega-menu-responsive-handler">
											<?php
											$app = JFactory::getApplication();
											$menu = $app->getMenu();
											$menu_items = $menu->getItems('menutype', $this->params->get("selectmegamenu"));				
											//var_dump($menu_items);
											?>
											
											<?php
											echo '<ul class="menu-nav" id="mega-menu">';
											foreach ($menu_items as $i => &$id) :

												$menuitem   = $menu_items[$i];
												$params = $menuitem->params; 
												
												if ($params->get('menu_image')) {
													$put_image = '<img src="'.$params->get('menu_image').'" />';
												} else {
													$put_image = '';
												}
											
												print_r('<li class="main-li-container item-'.$menu_items[$i]->id.'"><a href="'.$menu_items[$i]->link.'">'.$put_image.$menu_items[$i]->title.'</a>');
												if( $this->countModules('menu-position-1-'.$menu_items[$i]->alias.' or menu-position-2-'.$menu_items[$i]->alias.' or menu-position-3-'.$menu_items[$i]->alias)) : ?>
													<ul class="ul-container" style="min-width: <?php echo $params->get('menu-anchor_css'); ?>">
														<li class="li-container">
															<div class="sub-items-handler">
																<div class="container-fluid">
																	<?php if( $this->countModules('menu-position-1-'.$menu_items[$i]->alias)) : ?>
																	<div class="row-fluid"><div class="rw-handler"><jdoc:include type="modules" name="menu-position-1-<?php print_r($menu_items[$i]->alias); ?>" style="megamenu" /></div></div>
																	<?php endif; ?>
																	<?php if( $this->countModules('menu-position-2-'.$menu_items[$i]->alias)) : ?>
																	<div class="row-fluid"><div class="rw-handler"><jdoc:include type="modules" name="menu-position-2-<?php print_r($menu_items[$i]->alias); ?>" style="megamenu" /></div></div>
																	<?php endif; ?>
																	<?php if( $this->countModules('menu-position-3-'.$menu_items[$i]->alias)) : ?>
																	<div class="row-fluid"><div class="rw-handler"><jdoc:include type="modules" name="menu-position-3-<?php print_r($menu_items[$i]->alias); ?>" style="megamenu" /></div></div>
																	<?php endif; ?>
																</div>
															</div>
														</li>
													</ul>
												<?php endif;
												print_r('</li>');
											endforeach;
											echo "</ul>"; ?>
											</div>
										</div>
									</div>
									<?php endif; ?>
									
									<?php if( $this->countModules('builtin-slideshow or slideshow') ) : ?>
									<div id="slideshow-handler" class="<?php if($this->params->get("usemegamenu")) : ?>span9<?php else: ?>span12<?php endif; ?>"> 
										<?php if( $this->countModules('builtin-slideshow') ) : ?>
										<div id="ph-camera-slideshow-handler">
											<?php
											$count_slides = JDocumentHTML::countModules('builtin-slideshow');
											$module = JModuleHelper::getModules('builtin-slideshow');
											$moduleParams = new JRegistry();
											echo "<div class=\"camera_wrap\" id=\"ph-camera-slideshow\">"; 
											for($sld_a=0;$sld_a<$count_slides;$sld_a++) { 
												$moduleParams->loadString($module[$sld_a]->params);
												$bgimage[$sld_a] = $moduleParams->get('backgroundimage', 'defaultValue'); 
												$caption_suffix[$sld_a] = $moduleParams->get('moduleclass_sfx', '');
												$caption_bsize[$sld_a] = $moduleParams->get('bootstrap_size', '');

												
											?>
											<div data-thumb="<?php if($bgimage[$sld_a] == "defaultValue") : echo $this->baseurl."/templates/".$this->template."/images/slideshow/no-image.png"; else : echo $this->baseurl."/".$bgimage[$sld_a]; endif; ?>" data-src="<?php if($bgimage[$sld_a] == "defaultValue") : echo $this->baseurl."/templates/".$this->template."/images/slideshow/no-image.png"; else : echo $this->baseurl."/".$bgimage[$sld_a]; endif; ?>">	
												<?php if($module[$sld_a]->content) : ?>
												<div class="camera_caption fadeIn">
													<div><div class="container-fluid"><div class="row-fluid"><div class="camera_caption_bg span<?php echo $caption_bsize[$sld_a]; ?> <?php echo $caption_suffix[$sld_a]; ?>"><div class="inner-space"><?php echo $module[$sld_a]->content; ?></div></div></div></div></div>
												</div>
												<?php endif; ?>
											</div>
											<?php } echo "</div>"; // End of camera_wrap ?> 
										</div>
										<?php elseif( $this->countModules('slideshow') ) : ?>
										<div class="sl-3rd-parties">
											<jdoc:include type="modules" name="slideshow" style="vmdefault" />
										</div>
										<?php endif; ?>
									</div>
									<?php endif; ?>
									<?php if( $this->countModules('top-header') ) : ?>
									<div id="top-handler-holder">
									<jdoc:include type="modules" name="top-header" style="vmdefault" />
									</div>
									<?php endif; ?>
								</div>
							<?php if($this->params->get("headercontentwidth")):?></div><?php endif; ?>
						</div>
					</div>
				
			</section>
		<?php endif; ?>

		<?php if( $this->countModules('position-2')) : ?>
		<div class="<?php if($this->params->get("breadcrumbwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<div id="breadcrumb-line" <?php if($this->params->get("breadcrumbbg") ) : ?>class="<?php if($this->params->get('breadcrumbbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('breadcrumbbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('breadcrumbbgtype')=='parallax' &&  $this->params->get("breadcrumbbg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('breadcrumbparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('breadcrumbparallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("breadcrumbcontentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
					<div class="row-fluid <?php if($this->params->get("breadcrumbmods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("breadcrumbalign") !== 'none' ) : echo "flex-".$this->params->get("breadcrumbalign"); endif; ?>">
						<jdoc:include type="modules" name="position-2" style="vmdefault" />
					</div>
				</div><?php if($this->params->get("breadcrumbcontentwidth")):?></div><?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
	
		<?php if( $this->countModules('top-1 or top-2 or top-3 or top-4 or top-5 or top-6')) : ?>
		<div class="<?php if($this->params->get("topmod1width") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="tab-modules" <?php if($this->params->get("topmod1bg") ) : ?>class="<?php if($this->params->get('topmod1bgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('topmod1bgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('topmod1bgtype')=='parallax' &&  $this->params->get("topmod1bg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('topmod1parallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('topmod1parallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("topmod1contentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
					<div class="row-fluid <?php if($this->params->get("topmod1pos") == 'plain' ) : ?>tf-modules<?php endif; ?> <?php if($this->params->get("topmod1mods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("topmod1align") !== 'none' ) : echo "flex-".$this->params->get("topmod1align"); endif; ?>">
						<?php if( $this->countModules('top-1')) : ?><div class="tf-module <?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-1" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-2')) : ?><div class="tf-module <?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-2" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-3')) : ?><div class="tf-module <?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-3" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-4')) : ?><div class="tf-module <?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-4" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-5')) : ?><div class="tf-module <?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-5" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-6')) : ?><div class="tf-module <?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-6" style="vmdefault" /></div><?php endif; ?>
					</div>
				</div><?php if($this->params->get("topmod1contentwidth")):?></div><?php endif; ?>
			</section>
		</div>
		<?php endif; ?>

		<?php if( $this->countModules('top-7 or top-8 or top-9 or top-10 or top-11 or top-12')) : ?>
		<div class="<?php if($this->params->get("topmod2width") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="top-modules" <?php if($this->params->get("topmod2bg") ): ?>class="<?php if($this->params->get('topmod2bgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('topmod2bgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('topmod2bgtype')=='parallax' &&  $this->params->get("topmod2bg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('topmod2parallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('topmod2parallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("topmod2contentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
					<div class="row-fluid <?php if($this->params->get("topmod2pos") == 'plain' ) : ?>tf-modules<?php endif; ?> <?php if($this->params->get("topmod2mods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("topmod2align") !== 'none' ) : echo "flex-".$this->params->get("topmod2align"); endif; ?>">
						<?php if( $this->countModules('top-7')) : ?><div class="tf-module <?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-7" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-8')) : ?><div class="tf-module <?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-8" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-9')) : ?><div class="tf-module <?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-9" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-10')) : ?><div class="tf-module <?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-10" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-11')) : ?><div class="tf-module <?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-11" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('top-12')) : ?><div class="tf-module <?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-12" style="vmdefault" /></div><?php endif; ?>
					</div>
				</div><?php if($this->params->get("topmod2contentwidth")):?></div><?php endif; ?>
			</section>
		</div>
		<?php endif; ?>
		


		<?php if( $this->countModules('top-long')) : ?>
		<div class="<?php if($this->params->get("toplongwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="top-long" <?php if($this->params->get("toplongbg") ): ?>class="<?php if($this->params->get('toplongbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('toplongbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('toplongbgtype')=='parallax' &&  $this->params->get("toplongbg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('toplongparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('toplongparallaxverticaloffset');?>"></div>
				<?php endif; ?>
			
				<?php if($this->params->get("toplongcontentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
				
					<div class="row-fluid <?php if($this->params->get("toplongmods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("toplongalign") !== 'none' ) : echo "flex-".$this->params->get("toplongalign"); endif; ?>">
						<div class="tf-module"><jdoc:include type="modules" name="top-long" style="vmdefault" /></div>
					</div>
					
				</div><?php if($this->params->get("toplongcontentwidth")):?></div><?php endif; ?>
				
			</section>
		</div>
		<?php endif; ?>	
		
		
		<div class="<?php if($this->params->get("contentwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="story-content">
				<?php if($this->params->get("contentcontentwidth")) : ?><div class="container" id="content-handler"><?php endif; ?><div class="inner-sep">
					<div id="main-content-handler">
						<div class="row-fluid">
							<?php if( $this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2') || $this->params->get("usemegamenu")) : ?>
							<div class="span3 rs-cl">
							
								<?php if(!$this->countModules('builtin-slideshow or slideshow') and ($this->params->get("usemegamenu")) ) : ?>
								<div id="megamenu-handler">
									<div class="megamenu-background">
										<?php if($this->params->get("usemegamenu")) :
										$animData = "";
										if( $this->params->get("megamenuanim") != "off" ) :
											$animData = "";
											if( $this->params->get("megamenuanim") == "moveup" ) : 
												$animData = 'data-sr="enter bottom hustle 50px over 1.5s"';
											endif;

											if( $this->params->get("megamenuanim") == "movedown" ) :
												$animData = 'data-sr="enter top hustle 50px over 1.5s"';
											endif;

											if( $this->params->get("megamenuanim") == "moveright" ) :
												$animData = 'data-sr="enter right, hustle 60px over 1.5s"';
											endif;

											if( $this->params->get("megamenuanim") == "moveleft" ) :
												$animData = 'data-sr="enter left, hustle 60px over 1.5s"';
											endif;

										endif;
										?>
										<div class="mega-menu-responsive-handler" <?php echo $animData; ?>>
										<?php
										$app = JFactory::getApplication();
										$menu = $app->getMenu();
										$menu_items = $menu->getItems('menutype', $this->params->get("selectmegamenu"));				
										//var_dump($menu_items);
										?>

										<?php
										echo '<ul class="menu-nav" id="mega-menu">';
										foreach ($menu_items as $i => &$id) :

											$menuitem   = $menu_items[$i];
											$params = $menuitem->params; 
											
											if ($params->get('menu_image')) {
												$put_image = '<img src="'.$params->get('menu_image').'" />';
											} else {
												$put_image = '';
											}
										
											print_r('<li class="main-li-container item-'.$menu_items[$i]->id.'"><a href="'.$menu_items[$i]->link.'">'.$put_image.$menu_items[$i]->title.'</a>');
											if( $this->countModules('menu-position-1-'.$menu_items[$i]->alias.' or menu-position-2-'.$menu_items[$i]->alias.' or menu-position-3-'.$menu_items[$i]->alias)) : ?>
												<ul class="ul-container" style="min-width: <?php echo $params->get('menu-anchor_css'); ?>">
													<li class="li-container">
														<div class="sub-items-handler">
															<div class="container-fluid">
																<?php if( $this->countModules('menu-position-1-'.$menu_items[$i]->alias)) : ?>
																<div class="row-fluid"><div class="rw-handler"><jdoc:include type="modules" name="menu-position-1-<?php print_r($menu_items[$i]->alias); ?>" style="megamenu" /></div></div>
																<?php endif; ?>
																<?php if( $this->countModules('menu-position-2-'.$menu_items[$i]->alias)) : ?>
																<div class="row-fluid"><div class="rw-handler"><jdoc:include type="modules" name="menu-position-2-<?php print_r($menu_items[$i]->alias); ?>" style="megamenu" /></div></div>
																<?php endif; ?>
																<?php if( $this->countModules('menu-position-3-'.$menu_items[$i]->alias)) : ?>
																<div class="row-fluid"><div class="rw-handler"><jdoc:include type="modules" name="menu-position-3-<?php print_r($menu_items[$i]->alias); ?>" style="megamenu" /></div></div>
																<?php endif; ?>
															</div>
														</div>
													</li>
												</ul>
											<?php endif;
											print_r('</li>');
										endforeach;
										echo "</ul>"; ?>
										</div>
										<?php endif; ?>
									</div>
								</div>
								<?php endif; ?>
							
							
								<jdoc:include type="modules" name="top-left-1" style="vmdefault" />
								<jdoc:include type="modules" name="top-left-2" style="vmdefault" />
								<jdoc:include type="modules" name="position-7" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-left-1" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-left-2" style="vmdefault" />
							</div>
							<?php endif; ?>
							<div class="<?php echo $mcols; ?> rs-cc">
								<?php if( $this->countModules('top-a or top-b or top-c or top-d')) : ?>
								<div id="top-content-modules">
									<div class="row-fluid">
										<?php if( $this->countModules('top-a')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-a" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-b')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-b" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-c')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-c" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-d')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-d" style="vmdefault" /></div><?php endif; ?>
									</div>
								</div>
								<?php endif; ?>
								
								<div class="tmp-content-area">
									<?php if(JFactory::getApplication()->getMessageQueue()) : ?>
									<div id="top-com-handler">
										<jdoc:include type="message" />
									</div>
									<?php endif; ?>
									<jdoc:include type="component" />
								</div>
								<?php if( $this->countModules('bottom-a or bottom-b or bottom-c or bottom-d')) : ?>
								<div id="bottom-content-modules">
									<div class="row-fluid">
										<?php if( $this->countModules('bottom-a')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-a" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-b')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-b" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-c')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-c" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-d')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-d" style="vmdefault" /></div><?php endif; ?>
									</div>	
								</div>
								<?php endif; ?>
								
							</div>
							<?php if( $this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2')) : ?>
							<div class="span3 rs-cr">
								<jdoc:include type="modules" name="top-right-1" style="vmdefault" />
								<jdoc:include type="modules" name="top-right-2" style="vmdefault" />
								<jdoc:include type="modules" name="position-6" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-right-1" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-right-2" style="vmdefault" />
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div><?php if($this->params->get("contentcontentwidth")):?></div><?php endif; ?>
			</section>
		</div>

		<?php if( $this->countModules('tabs-1')) : 
		$count_tabs = JDocumentHTML::countModules('tabs-1');
		$tabs1 = JModuleHelper::getModules('tabs-1');
		?>
		<div class="<?php if($this->params->get("tabswidth") == 'fixed' ): ?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="tabs" <?php if($this->params->get("tabsbg") ): ?>class="<?php if($this->params->get('tabsbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('tabsbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
			
					<div class="tabs-holder-bg">
						<span class="holder-background"></span>
						<?php if($this->params->get('tabsbgtype')=='parallax' &&  $this->params->get("tabsbg") ) : ?>
						<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('tabsparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('tabsparallaxverticaloffset');?>"></div>
						<?php endif; ?>
					
						<span class="shapes-bg-shape-4"></span>
						<span class="shapes-bg-shape-5"></span>
						<?php if(!$this->params->get('tabsbgtype')=='parallax' || !$this->params->get("tabsbg") ) : ?>
						<span class="shapes-bg-shape-6"></span>
						<?php endif; ?>
						<span class="shapes-bg-shape-7"></span>
					</div>
					<div class="tabs-handler-overlayer">
						<?php if($this->params->get("tabscontentwidth")) : ?><div class="container"><?php endif; 
						
						$animData1 = "";
						if( $this->params->get("tabsanim") != "off" ) :
							$animData1 = "";
							if( $this->params->get("tabsanim") == "moveup" ) : 
								$animData1 = 'data-sr="enter bottom hustle 50px over 1.5s"';
							endif;

							if( $this->params->get("tabsanim") == "movedown" ) :
								$animData1 = 'data-sr="enter top hustle 50px over 1.5s"';
							endif;

							if( $this->params->get("tabsanim") == "moveright" ) :
								$animData1 = 'data-sr="enter right, hustle 60px over 1.5s"';
							endif;

							if( $this->params->get("tabsanim") == "moveleft" ) :
								$animData1 = 'data-sr="enter left, hustle 60px over 1.5s"';
							endif;

						endif;
						
						?>
							<div id="tabs-1" class="nav-tabs-handler tabbable row-fluid" <?php echo $animData1; ?>>
								<div class="">
									<ul class="nav nav-tabs" id="Tab1">
									<?php 
									$moduleParams2 = new JRegistry();
									for($tab_a=0;$tab_a<$count_tabs;$tab_a++) { 
									$moduleParams2->loadString($tabs1[$tab_a]->params);
									$msfx[$tab_a] = $moduleParams2->get('moduleclass_sfx', '_default');
									
									
									?><li <?php if($tab_a==0):?>class="active"<?php endif; ?>><a href="#tabid<?php echo $tabs1[$tab_a]->id; ?>" class="tabsfx<?php echo $msfx[$tab_a]; ?>" data-toggle="tab" title="<?php echo $tabs1[$tab_a]->title; ?>"><?php echo $tabs1[$tab_a]->title; ?></a></li><?php } ?>
									</ul>
								
									<div class="tab-content <?php if($this->params->get("tabsmods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("tabsalign") !== 'none' ) : echo "flex-".$this->params->get("tabsalign"); endif; ?>">
										<jdoc:include type="modules" name="tabs-1" style="vmtab" />	
									</div>
								
									<script type="text/javascript">
									jQuery(document).ready(function() {
										jQuery( ".tab-content .tab-pane:first-child" ).addClass( "active" );
									});
									</script>
								</div>

							</div>
						<?php if($this->params->get("tabscontentwidth")):?></div><?php endif; ?>
					</div>
			</section>
		</div>
		<?php endif; ?>

		<?php if( $this->countModules('bottom-long')) : ?>
		<div class="<?php if($this->params->get("bottomlongwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="bottom-long" <?php if($this->params->get("bottomlongbg") ): ?>class="<?php if($this->params->get('bottomlongbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('bottomlongbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('bottomlongbgtype')=='parallax' &&  $this->params->get("bottomlongbg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('bottomlongparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('bottomlongparallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("bottomlongcontentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
					<div class="row-fluid <?php if($this->params->get("bottomlongmods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("bottomlongalign") !== 'none' ) : echo "flex-".$this->params->get("bottomlongalign"); endif; ?>">
						<div class="tf-module"><jdoc:include type="modules" name="bottom-long" style="vmdefault" /></div>
					</div>
				</div><?php if($this->params->get("bottomlongcontentwidth")):?></div><?php endif; ?>
			</section>
		</div>
		<?php endif; ?>		
		
		<?php if( $this->countModules('bottom-1 or bottom-2 or bottom-3 or bottom-4 or bottom-5 or bottom-6')) : ?>
		<div class="<?php if($this->params->get("botmoduleswidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="bot-modules" <?php if($this->params->get("bottomlongbg") ): ?>class="<?php if($this->params->get('botmodulesbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('botmodulesbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('botmodulesbgtype')=='parallax' &&  $this->params->get("botmodulesbg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('botmodulesparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('botmodulesparallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("botmodulescontentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
					<div class="row-fluid <?php if($this->params->get("botmodulespos") == 'plain' ) : ?>tf-modules<?php endif; ?> <?php if($this->params->get("botmodulesmods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("botmodulesalign") !== 'none' ) : echo "flex-".$this->params->get("botmodulesalign"); endif; ?>">
						<?php if( $this->countModules('bottom-1')) : ?><div class="tf-module <?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-1" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('bottom-2')) : ?><div class="tf-module <?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-2" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('bottom-3')) : ?><div class="tf-module <?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-3" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('bottom-4')) : ?><div class="tf-module <?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-4" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('bottom-5')) : ?><div class="tf-module <?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-5" style="vmdefault" /></div><?php endif; ?>
						<?php if( $this->countModules('bottom-6')) : ?><div class="tf-module <?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-6" style="vmdefault" /></div><?php endif; ?>
					</div>
				</div><?php if($this->params->get("botmodulescontentwidth")):?></div><?php endif; ?>
			</section>
		</div>
		<?php endif; ?>

		<?php if( $this->countModules('position-3')) :
			$testislitems = $this->params->get('testisl_items');
			$testislitemsDesktop = $this->params->get('testisl_itemsDesktop');
			$testislitemsDesktopSmall = $this->params->get('testisl_itemsDesktopSmall');
			$testislitemsTablet = $this->params->get('testisl_itemsTablet');
			$testislitemsTabletSmall = $this->params->get('testisl_itemsTabletSmall');
			$testislitemsMobile = $this->params->get('testisl_itemsMobile');
			if ($this->params->get('testisl_pagination')) : $testislpag = "true"; else : $testislpag = "false"; endif;


			if ($this->params->get('testisl_stopOnHover')) : $testislstopOnHover = "true"; else : $testislstopOnHover = "false"; endif;
			if ($this->params->get('testisl_navigation')) : $testislnavigation = "true"; else : $testislnavigation = "false"; endif;
			if ($this->params->get('testisl_scrollPerPage')) : $testislscrollPerPage = "true"; else : $testislscrollPerPage = "false"; endif;
			if ($this->params->get('testisl_paginationNumbers')) : $testislpaginationNumbers = "true"; else : $testislpaginationNumbers = "false"; endif;
			if ($this->params->get('testisl_responsive')) : $testislresponsive = "true"; else : $testislresponsive = "false"; endif;
			if ($this->params->get('testisl_dragBeforeAnimFinish')) : $testisldragBeforeAnimFinish = "true"; else : $testisldragBeforeAnimFinish = "false"; endif;
			if ($this->params->get('testisl_mouseDrag')) : $testislmouseDrag = "true"; else : $testislmouseDrag = "false"; endif;
			if ($this->params->get('testisl_touchDrag')) : $testisltouchDrag = "true"; else : $testisltouchDrag = "false"; endif;

			$temp_path = $this->baseurl."/templates/".$this->template; 

			$doc->addScript($temp_path.'/js/owl.carousel.min.js'); 
			$doc->addCustomTag('
				<script type="text/javascript">
				jQuery(document).ready(function() {
				  var owl = jQuery("#owl-id-testimonial");
				  owl.owlCarousel({
					pagination: '.$testislpag.',
					items: '.$testislitems.',
					itemsDesktop : [1600, '.$testislitemsDesktop.'],
					itemsDesktopSmall : [1260, '.$testislitemsDesktopSmall.'],
					itemsTablet : [1000, '.$testislitemsTablet.'],
					itemsTabletSmall : [768, '.$testislitemsTabletSmall.'],
					itemsMobile : [480, '.$testislitemsMobile.'],
					
					slideSpeed: '.$this->params->get('testisl_slideSpeed').',
					paginationSpeed: '.$this->params->get('testisl_paginationSpeed').',
					rewindSpeed: '.$this->params->get('testisl_rewindSpeed').',
					
					autoPlay: '.$this->params->get('testisl_autoPlay').',
					stopOnHover: '.$testislstopOnHover.',
					navigation: '.$testislnavigation.',
					scrollPerPage: '.$testislscrollPerPage.',
					paginationNumbers: '.$testislpaginationNumbers.',
					responsive: '.$testislresponsive.',
					responsiveRefreshRate: '.$this->params->get('testisl_responsiveRefreshRate').',
					dragBeforeAnimFinish: '.$testisldragBeforeAnimFinish.',
					mouseDrag: '.$testislmouseDrag.',
					touchDrag: '.$testisltouchDrag.'
					
				  });
				});
				</script>
			');	

		?>
	
		<div class="<?php if($this->params->get("testimonialswidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="testimonials" <?php if($this->params->get("testimonialsbg") ): ?>class="<?php if($this->params->get('testimonialsbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('testimonialsbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('testimonialsbgtype')=='parallax' &&  $this->params->get("testimonialsbg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('testimonialsparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('testimonialsparallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("testimonialscontentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
				<?php
						$animData2 = "";
						if( $this->params->get("testimonialsanim") != "off" ) :
							$animData2 = "";
							if( $this->params->get("testimonialsanim") == "moveup" ) : 
								$animData2 = 'data-sr="enter bottom hustle 50px over 1.5s"';
							endif;

							if( $this->params->get("testimonialsanim") == "movedown" ) :
								$animData2 = 'data-sr="enter top hustle 50px over 1.5s"';
							endif;

							if( $this->params->get("testimonialsanim") == "moveright" ) :
								$animData2 = 'data-sr="enter right, hustle 60px over 1.5s"';
							endif;

							if( $this->params->get("testimonialsanim") == "moveleft" ) :
								$animData2 = 'data-sr="enter left, hustle 60px over 1.5s"';
							endif;

						endif;
				?>
				<div id="customers-box" <?php echo $animData2; ?>><div class="row-fluid"><div class="span8 offset2">
					<div class="ts-label">
						<h3 class="testi-title"><span><?php echo $this->params->get('testi_title'); ?></span></h3>
						<div class="testi-desc"><?php echo $this->params->get('testi_desc'); ?></div>
					</div>
					<div class="customers-box-handler">
						<div class="owl-carousel owl-theme" id="owl-id-testimonial">
							<jdoc:include type="modules" name="position-3" style="testimonial" />
						</div>
					</div>
				</div></div></div>
				</div><?php if($this->params->get("testimonialscontentwidth")):?></div><?php endif; ?>
			</section>
		</div>
		<?php endif; ?>
		
		<?php if( $this->countModules('position-4')) : ?>
		<div class="<?php if($this->params->get("bottomlong2width") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="bottom-long-2" <?php if($this->params->get("bottomlong2bg") ): ?>class="<?php if($this->params->get('bottomlong2bgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('bottomlong2bgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('bottomlong2bgtype')=='parallax' &&  $this->params->get("bottomlong2bg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('bottomlong2parallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('bottomlong2parallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("bottomlong2contentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
					<div class="row-fluid <?php if($this->params->get("bottomlong2mods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("bottomlong2align") !== 'none' ) : echo "flex-".$this->params->get("bottomlong2align"); endif; ?>">
						<div class="tf-module"><jdoc:include type="modules" name="position-4" style="vmdefault" /></div>
					</div>
				</div><?php if($this->params->get("bottomlong2contentwidth")):?></div><?php endif; ?>
			</section>
		</div>
		<?php endif; ?>	
		
		<?php if( $this->countModules('position-5')) : ?>
		<div class="<?php if($this->params->get("bottomlong3width") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
			<section id="bottom-long-3" <?php if($this->params->get("bottomlong3bg") ): ?>class="<?php if($this->params->get('bottomlong3bgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('bottomlong3bgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
				<?php if($this->params->get('bottomlong3bgtype')=='parallax' &&  $this->params->get("bottomlong3bg") ) : ?>
				<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('bottomlong3parallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('bottomlong3parallaxverticaloffset');?>"></div>
				<?php endif; ?>
				<?php if($this->params->get("bottomlong3contentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
					<div class="row-fluid <?php if($this->params->get("bottomlong3mods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("bottomlong3align") !== 'none' ) : echo "flex-".$this->params->get("bottomlong3align"); endif; ?>">
						<div class="tf-module"><jdoc:include type="modules" name="position-5" style="vmdefault" /></div>
					</div>
				</div><?php if($this->params->get("bottomlong3contentwidth")):?></div><?php endif; ?>
			</section>
		</div>
		<?php endif; ?>	
		
		<div class="footer-holder">
			<div class="footer-holder-bg">
				<span class="holder-background"></span>
				<span class="shapes-bg-shape-8"></span>
				<span class="shapes-bg-shape-9"></span>
				<span class="shapes-bg-shape-10"></span>
			</div>
			<div class="footer-content-handler">
				<?php if( $socials ) : ?>
				<div id="socialModal" class="<?php if($this->params->get("bottombgwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
					<?php if($this->params->get("bottombgcontentwidth")) : ?><div class="container"><?php endif; ?>
						<div class="row-fluid">
							<?php if($this->params->get("sociallabel")): ?>
							<div class="span3 social-label">
								<?php echo $this->params->get("sociallabel"); ?>
							</div>
							<?php endif; ?>
							<div class="<?php if($this->params->get("sociallabel")): ?>span9<?php else: ?>span12<?php endif; ?>">
								<ul id="social-links">
									<?php if($this->params->get('twitterON') == true ) : ?><li><a class="sc-1" href="<?php echo $this->params->get('twitter'); ?>" target="_blank"><span class="icon socicon-twitter"></span></a></li><?php endif; ?><?php if($this->params->get('gplusON') == true ) : ?><li><a class="sc-2" href="<?php echo $this->params->get('gplus'); ?>" target="_blank"><span class="icon socicon-googleplus"></span></a></li><?php endif; ?><?php if($this->params->get('facebookON') == true ) : ?><li><a class="sc-3" href="<?php echo $this->params->get('facebook'); ?>" target="_blank"><span class="icon socicon-facebook"></span></a></li><?php endif; ?><?php if($this->params->get('RSSON') == true ) : ?><li><a class="sc-4" href="<?php echo $this->params->get('RSS'); ?>" target="_blank"><span class="icon socicon-rss"></span></a></li><?php endif; ?><?php if($this->params->get('linkedinON') == true ) : ?><li><a class="sc-5" href="<?php echo $this->params->get('linkedin'); ?>" target="_blank"><span class="icon socicon-linkedin"></span></a></li><?php endif; ?><?php if($this->params->get('youtubeON') == true ) : ?><li><a class="sc-6" href="<?php echo $this->params->get('youtube'); ?>" target="_blank"><span class="icon socicon-youtube"></span></a></li><?php endif; ?><?php if($this->params->get('vimeoON') == true ) : ?><li><a class="sc-7" href="<?php echo $this->params->get('vimeo'); ?>" target="_blank"><span class="icon socicon-vimeo"></span></a></li><?php endif; ?><?php if($this->params->get('pinterestON') == true ) : ?><li><a class="sc-8" href="<?php echo $this->params->get('pinterest'); ?>" target="_blank"><span class="icon socicon-pinterest"></span></a></li><?php endif; ?><?php if($this->params->get('instagramON') == true ) : ?><li><a class="sc-9" href="<?php echo $this->params->get('instagram'); ?>" target="_blank"><span class="icon socicon-instagram"></span></a></li><?php endif; ?><?php if($this->params->get('stumbleuponON') == true ) : ?><li><a class="sc-10" href="<?php echo $this->params->get('stumbleupon'); ?>" target="_blank"><span class="icon socicon-stumbleupon"></span></a></li><?php endif; ?><?php if($this->params->get('diggON') == true ) : ?><li><a class="sc-11" href="<?php echo $this->params->get('digg'); ?>" target="_blank"><span class="icon socicon-digg"></span></a></li><?php endif; ?><?php if($this->params->get('bloggerON') == true ) : ?><li><a class="sc-12" href="<?php echo $this->params->get('blogger'); ?>" target="_blank"><span class="icon socicon-blogger"></span></a></li><?php endif; ?><?php if($this->params->get('customSoc1ON') == true ) : ?><li><a class="sc-13" href="<?php echo $this->params->get('customSoc1'); ?>" target="_blank"><span class="icon <?php echo $this->params->get('customSoc1Icon'); ?>"></span></a></li><?php endif; ?><?php if($this->params->get('customSoc2ON') == true ) : ?><li><a class="sc-14" href="<?php echo $this->params->get('customSoc2'); ?>" target="_blank"><span class="icon <?php echo $this->params->get('customSoc2Icon'); ?>"></span></a></li><?php endif; ?><?php if($this->params->get('customSoc3ON') == true ) : ?><li><a class="sc-15" href="<?php echo $this->params->get('customSoc3'); ?>" target="_blank"><span class="icon <?php echo $this->params->get('customSoc3Icon'); ?>"></span></a></li><?php endif; ?><?php if($this->params->get('customSoc4ON') == true ) : ?><li><a class="sc-16" href="<?php echo $this->params->get('customSoc4'); ?>" target="_blank"><span class="icon <?php echo $this->params->get('customSoc4Icon'); ?>"></span></a></li><?php endif; ?><?php if($this->params->get('customSoc5ON') == true ) : ?><li><a class="sc-17" href="<?php echo $this->params->get('customSoc5'); ?>" target="_blank"><span class="icon <?php echo $this->params->get('customSoc5Icon'); ?>"></span></a></li><?php endif; ?>
								</ul>
							</div>
						</div>
					<?php if($this->params->get("bottombgcontentwidth")):?></div><?php endif; ?>
				</div>
				<?php endif; ?>
				
				<?php if( $this->countModules('bottom-7 or bottom-8 or bottom-9 or bottom-10 or bottom-11 or bottom-12')  ) : ?>
				<div class="<?php if($this->params->get("bottombgwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
					<section id="bottom-bg" <?php if($this->params->get("bottombgbg") ): ?>class="<?php if($this->params->get('bottombgbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('bottombgbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
						<?php if($this->params->get('bottombgbgtype')=='parallax' &&  $this->params->get("bottombgbg") ) : ?>
						<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('bottombgparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('bottombgparallaxverticaloffset');?>"></div>
						<?php endif; ?>
						<?php if($this->params->get("bottombgcontentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
							<div class="row-fluid <?php if($this->params->get("bottombgpos") == 'plain' ) : ?>tf-modules<?php endif; ?> <?php if($this->params->get("bottombgmods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("bottombgalign") !== 'none' ) : echo "flex-".$this->params->get("bottombgalign"); endif; ?>">
								<?php if( $this->countModules('bottom-7')) : ?><div class="tf-module <?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-7" style="vmdefault" /></div><?php endif; ?>
								<?php if( $this->countModules('bottom-8')) : ?><div class="tf-module <?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-8" style="vmdefault" /></div><?php endif; ?>
								<?php if( $this->countModules('bottom-9')) : ?><div class="tf-module <?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-9" style="vmdefault" /></div><?php endif; ?>
								<?php if( $this->countModules('bottom-10')) : ?><div class="tf-module <?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-10" style="vmdefault" /></div><?php endif; ?>
								<?php if( $this->countModules('bottom-11')) : ?><div class="tf-module <?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-11" style="vmdefault" /></div><?php endif; ?>
								<?php if( $this->countModules('bottom-12')) : ?><div class="tf-module <?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-12" style="vmdefault" /></div><?php endif; ?>
							</div>
						</div><?php if($this->params->get("bottombgcontentwidth")):?></div><?php endif; ?>
					</section>
				</div>
				<?php endif; ?>

				<?php if( $this->countModules('footer or footer-left or footer-right') ) : ?>
				<div class="<?php if($this->params->get("footerwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">		
					<footer id="footer" <?php if($this->params->get("footerbg") ): ?>class="<?php if($this->params->get('footerbgtype')=='parallax') : ?>parallax-handler<?php elseif($this->params->get('footerbgtype') == 'static') : ?>background-photo static<?php endif; ?>"<?php endif; ?>>
						<?php if($this->params->get('footerbgtype')=='parallax' &&  $this->params->get("footerbg") ) : ?>
						<div class="background-parallax" data-stellar-ratio="<?php echo $this->params->get('footerparallaxbgratio');?>" data-stellar-vertical-offset="<?php echo $this->params->get('footerparallaxverticaloffset');?>"></div>
						<?php endif; ?>
						<?php if($this->params->get("footercontentwidth")) : ?><div class="container"><?php endif; ?><div class="inner-sep">
							<div id="footer-line" class="row-fluid <?php if($this->params->get("footermods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("footeralign") !== 'none' ) : echo "flex-".$this->params->get("footeralign"); endif; ?>">
								<?php if( $this->countModules('footer-left or footer-right') ) : ?>
								<div id="foo-left-right">
									<?php if( $this->countModules('footer-left')) : ?>
									<div class="tf-module <?php if( $this->countModules('footer-left and footer-right') ) : ?>span6<?php else: ?>span12<?php endif;?>">
										<jdoc:include type="modules" name="footer-left" />
									</div>
									<?php endif; ?>
									<?php if( $this->countModules('footer-right') || $socials) : ?>
									<div class="tf-module <?php if( $this->countModules('footer-left and footer-right') ) : ?>span6<?php else: ?>span12<?php endif;?>">
										<jdoc:include type="modules" name="footer-right" />

									</div>
									<?php endif; ?>
									<div class="clear"> </div>
								</div>
								<?php endif; ?>
								<?php if( $this->countModules('footer')) : ?><div class="row-fluid <?php if($this->params->get("footermods") == 'plain' ) : ?>tft-modules<?php endif; ?> <?php if($this->params->get("footeralign") !== 'none' ) : echo "flex-".$this->params->get("footeralign"); endif; ?>"><div class="span12 tf-module"><jdoc:include type="modules" name="footer" /></div></div><?php endif; ?>
							</div>
						</div><?php if($this->params->get("footercontentwidth")):?></div><?php endif; ?>
					</footer>
				</div>
				<?php endif; ?>
			</div>
			
		</div>
		
	</div>

<?php if( $this->countModules('intro-1 or intro-2 or intro-3 or intro-4 or intro-5 or intro-6')) : ?>
<section id="intro-modules">
	<div class="<?php if($this->params->get("intropanelwidth") == 'fixed' ):?>container<?php else: ?>container-fluid<?php endif; ?>">
		<div id="open-intro-panel"></div>
		<div id="intro-panel" class="inner-spacer">
			<?php if($this->params->get("intropalenusecontentwidth")):?><div class="container"><?php endif; ?>
				<div class="row-fluid">
					<?php if( $this->countModules('intro-1')) : ?><div class="<?php echo $introclass; ?>" style="<?php if ($intromodules == 5) {echo "width:".$introclass5w;} ?>"><jdoc:include type="modules" name="intro-1" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('intro-2')) : ?><div class="<?php echo $introclass; ?>" style="<?php if ($intromodules == 5) {echo "width:".$introclass5w;} ?>"><jdoc:include type="modules" name="intro-2" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('intro-3')) : ?><div class="<?php echo $introclass; ?>" style="<?php if ($intromodules == 5) {echo "width:".$introclass5w;} ?>"><jdoc:include type="modules" name="intro-3" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('intro-4')) : ?><div class="<?php echo $introclass; ?>" style="<?php if ($intromodules == 5) {echo "width:".$introclass5w;} ?>"><jdoc:include type="modules" name="intro-4" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('intro-5')) : ?><div class="<?php echo $introclass; ?>" style="<?php if ($intromodules == 5) {echo "width:".$introclass5w;} ?>"><jdoc:include type="modules" name="intro-5" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('intro-6')) : ?><div class="<?php echo $introclass; ?>" style="<?php if ($intromodules == 5) {echo "width:".$introclass5w;} ?>"><jdoc:include type="modules" name="intro-6" style="vmdefault" /></div><?php endif; ?>
				</div>
			<?php if($this->params->get("intropalenusecontentwidth")):?></div><?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>


<?php if($this->params->get("usejumptotop")):?>
<div class="jump-to-top">
<a href="#jumphere"><i class="fa fa-arrow-up" aria-hidden="true"></i><br><span>TOP</span></a>
</div>
<?php endif; ?>
<?php if( $this->countModules('header-left') ) : ?>
<div id="header-left-handler">
	<div id="header-left-panel"><div id="hl-panel-handler"><jdoc:include type="modules" name="header-left" style="vmdefault" /></div></div>
	<div id="hl-open"><div id="hl-open-label"><?php jimport( 'joomla.application.module.helper' ); $module_hl = JModuleHelper::getModules('header-left'); ?><?php echo $module_hl[0]->title; ?> &nbsp;<i class="fa fa-arrow-circle-o-up"></i>
</div></div>
</div>
<?php endif; ?>
<?php if( $this->countModules('header-right') ) : ?>
<div id="header-right-handler">
	<div id="header-right-panel"><div id="hr-panel-handler"><jdoc:include type="modules" name="header-right" style="vmdefault" /></div></div>
	<div id="hr-open"><div id="hr-open-label"><?php jimport( 'joomla.application.module.helper' ); $module_hr = JModuleHelper::getModules('header-right'); ?><?php echo $module_hr[0]->title; ?></div></div>
</div>
<?php endif; ?>
<?php if( $this->countModules('loginform')) : ?>
<div id="LoginForm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-header"><span id="myModalLabel"><?php echo $module_login[0]->title; ?></span> <a class="close-lgform-button" data-dismiss="modal">&times;</a></div>
	<div class="modal-body"><div class="container-fluid"><div class="row-fluid"><jdoc:include type="modules" name="loginform" style="vmdefaultlogin" /></div></div></div>
</div>
<?php endif; ?>

<?php if($this->params->get("bodybackgroundimage")) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
<?php if($this->params->get("bodybackgroundimage")) : ?>
jQuery.backstretch("<?php echo JURI::base().$this->params->get("bodybackgroundimage"); ?>");
<?php endif; ?>
</script>
<?php endif; ?>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/scrollReveal.min.js"></script>
<script type="text/javascript">
(function(jQuery) {
'use strict';
window.sr= new scrollReveal({
reset: false,
vFactor:.01,
move: '0px',
mobile: true
});
})();
</script>
<?php if($this->params->get("usejumptotop")):?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.plusanchor.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
jQuery('body').plusAnchor({
easing: 'easeInOutExpo',
offsetTop: 0,
speed: 1000,
onInit: function( base ) {
if ( base.initHash != '' && jQuery(base.initHash).length > 0 ) {
window.location.hash = 'hash_' + base.initHash.substring(1);
window.scrollTo(0, 0);
jQuery(window).load( function() {
timer = setTimeout(function() {
jQuery(base.scrollEl).animate({
scrollTop: jQuery( base.initHash ).offset().top
}, base.options.speed, base.options.easing);
}, 2000);
}); 
}; 
} 
});
});
</script>
<?php endif; ?>

<jdoc:include type="modules" name="debug" />
<?php echo $this->params->get("footercode"); ?>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/iscroll.js"></script>
<script type="text/javascript">
jQuery(window).on("load resize ready",function(){

      jQuery.stellar({
        horizontalScrolling: false,
		parallaxBackgrounds: true,
		positionProperty: 'transform',
		verticalOffset: 0,
		responsive: true,
		hideDistantElements: false
      });
	  
});

</script>
</body>
</html>