<?php
// Access
defined('_JEXEC') or die('Restricted access');

$categories_per_row = VmConfig::get('homepage_categories_per_row', 4);

$app = JFactory::getApplication();
$doc = JFactory::getDocument();


$templateparams = $app->getTemplate(true)->params;


	$slitems = $templateparams->get('sl_items');
	$slitemsDesktop = $templateparams->get('sl_itemsDesktop');
	$slitemsDesktopSmall = $templateparams->get('sl_itemsDesktopSmall');
	$slitemsTablet = $templateparams->get('sl_itemsTablet');
	$slitemsTabletSmall = $templateparams->get('sl_itemsTabletSmall');
	$slitemsMobile = $templateparams->get('sl_itemsMobile');
	
	$itemsDesktopSmall = $categories_per_row ; 
	$itemsTablet = $categories_per_row - 1; 
	$itemsTabletSmall = $categories_per_row - 2; 
	if($itemsTabletSmall<1) : $itemsTabletSmall = 1; endif;


	if($slitemsDesktopSmall < 1) : $slitemsDesktopSmall = 1; endif;
	if($slitemsTablet < 1) : $slitemsTablet = 1; endif;
	if($slitemsTabletSmall < 1) : $slitemsTabletSmall = 1; endif;
	if($slitemsMobile < 1) : $slitemsMobile = 1; endif;
	
	if ($templateparams->get('sl_pagination')) : $slpag = "true"; else : $slpag = "false"; endif;


if ($templateparams->get('sl_stopOnHover')) : $slstopOnHover = "true"; else : $slstopOnHover = "false"; endif;
if ($templateparams->get('sl_navigation')) : $slnavigation = "true"; else : $slnavigation = "false"; endif;
if ($templateparams->get('sl_scrollPerPage')) : $slscrollPerPage = "true"; else : $slscrollPerPage = "false"; endif;
if ($templateparams->get('sl_paginationNumbers')) : $slpaginationNumbers = "true"; else : $slpaginationNumbers = "false"; endif;
if ($templateparams->get('sl_responsive')) : $slresponsive = "true"; else : $slresponsive = "false"; endif;
if ($templateparams->get('sl_dragBeforeAnimFinish')) : $sldragBeforeAnimFinish = "true"; else : $sldragBeforeAnimFinish = "false"; endif;
if ($templateparams->get('sl_mouseDrag')) : $slmouseDrag = "true"; else : $slmouseDrag = "false"; endif;
if ($templateparams->get('sl_touchDrag')) : $sltouchDrag = "true"; else : $sltouchDrag = "false"; endif;

$temps = JURI::base().'templates/'.$app->getTemplate();

$doc->addScript($temps.'/js/owl.carousel.min.js'); 
$doc->addCustomTag('
	<script type="text/javascript">
	jQuery(document).ready(function() {
	  var owl = jQuery("#owl-id-category");
	  owl.owlCarousel({
		pagination: '.$slpag.',
		items: '.$categories_per_row.',
		itemsDesktop : [1600, '.$categories_per_row.'],
		itemsDesktopSmall : [1170, '.$itemsDesktopSmall.'],
		itemsTablet : [980, '.$itemsTablet.'],
		itemsTabletSmall : [768, '.$itemsTabletSmall.'],
		itemsMobile : [480, 1],
		
		slideSpeed: '.$templateparams->get('sl_slideSpeed').',
		paginationSpeed: '.$templateparams->get('sl_paginationSpeed').',
		rewindSpeed: '.$templateparams->get('sl_rewindSpeed').',
		
		autoPlay: '.$templateparams->get('sl_autoPlay').',
		stopOnHover: '.$slstopOnHover.',
		navigation: '.$slnavigation.',
		scrollPerPage: '.$slscrollPerPage.',
		paginationNumbers: '.$slpaginationNumbers.',
		responsive: '.$slresponsive.',
		responsiveRefreshRate: '.$templateparams->get('sl_responsiveRefreshRate').',
		dragBeforeAnimFinish: '.$sldragBeforeAnimFinish.',
		mouseDrag: '.$slmouseDrag.',
		touchDrag: '.$sltouchDrag.'
		
	  });
	});
	</script>
');		

?>

<div class="category-view shop-browse-products">

    <h4><?php echo vmText::_('COM_VIRTUEMART_CATEGORIES') ?></h4>
	<div class="browse-products-handler vmgroup_products product-sl-handler">
	<div class="row-fluid" id="owl-id-category">
    <?php
    // Start the Output
    foreach ($this->categories as $category) {
		


	    // Category Link
	    $caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id=' . $category->virtuemart_category_id, FALSE);

	    // Show Category
	    ?>
    	<div class="category floatleft <?php echo $category_cellwidth . $show_vertical_separator ?>">
    	    <div class="spacer">
    		<h2 class="category-view-title">
    		    <a href="<?php echo $caturl ?>" title="<?php echo $category->category_name ?>">

	    <?php
	    if (!empty($category->images)) {
		echo $category->images[0]->displayMediaThumb("", false);
	    }
	    ?><br />
		    <span class="cat-title"><?php echo $category->category_name ?></span>
    			
    		    </a>
    		</h2>
			
			<?php // echo $category->category_description ?>
			
    	    </div>
    	</div>
	<?php }
    ?>
	
	</div></div>
	
</div>