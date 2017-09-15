<?php
$app = JFactory::getApplication();
$document = JFactory::getDocument ();

$getTemplateName  = $app->getTemplate('template')->template;

$styleSheets = array();

$styleSheets[0]["text"]='<i class="fa fa-th-large">&nbsp;</i>';
$styleSheets[0]["title"]='Click here to set view as grid (default)';
$styleSheets[0]["sheet"]='<link href="'.JURI::base(true).'/templates/'. $getTemplateName .'/css/view-grid.css" rel="stylesheet" type="text/css" />';
$styleSheets[0]["class"]='grid';

$styleSheets[1]["text"]='<i class="fa fa-th-list">&nbsp;</i>';
$styleSheets[1]["title"]='Click here to set view as list';
$styleSheets[1]["sheet"]='<link href="'.JURI::base(true).'/templates/'. $getTemplateName .'/css/view-list.css" rel="stylesheet" type="text/css" />';
$styleSheets[1]["class"]='list';

$defaultStyleSheet=0;

if(!isset($_COOKIE["STYLE"])) {
	if(isset($_SESSION["STYLE"])) {
		echo $styleSheets[$_SESSION["STYLE"]]["sheet"];
	} else {
		echo $styleSheets[$defaultStyleSheet]["sheet"];
	}
} else {
	echo $styleSheets[$_COOKIE["STYLE"]]["sheet"];
}
?>