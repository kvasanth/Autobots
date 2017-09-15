<?php defined( '_JEXEC' ) or die;

$doc   = JFactory::getDocument();

JHtml::_('bootstrap.loadCss', true, $this->direction);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/presets/<?php echo $this->params->get('choosetheme'); ?>.css" media="screen" />
	
	<?php if ($this->direction == 'rtl') : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template_rtl.css" media="screen" />
	<?php endif; ?>

	<style type="text/css">
	
	body {
	font-size: <?php echo $this->params->get('contentfontsize'); ?>;
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
	
</style>
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
<body class="contentpane">
		<jdoc:include type="component" />
</body>
</html>
