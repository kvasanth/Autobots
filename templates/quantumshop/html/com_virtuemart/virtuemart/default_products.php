<?php defined('_JEXEC') or die('Restricted access');
vmJsApi::jPrice();

foreach ($this->products as $type => $productList ) {
// Calculating Products Per Row
$products_per_row = VmConfig::get ( 'homepage_products_per_row', 3 ) ;

$productTitle = vmText::_('COM_VIRTUEMART_'.$type.'_PRODUCT');

?>

<?php 
$app = JFactory::getApplication();
$doc = JFactory::getDocument();


$templateparams = $app->getTemplate(true)->params;


	$slitems = $templateparams->get('sl_items');
	$slitemsDesktop = $templateparams->get('sl_itemsDesktop');
	$slitemsDesktopSmall = $templateparams->get('sl_itemsDesktopSmall');
	$slitemsTablet = $templateparams->get('sl_itemsTablet');
	$slitemsTabletSmall = $templateparams->get('sl_itemsTabletSmall');
	$slitemsMobile = $templateparams->get('sl_itemsMobile');
	
	$itemsDesktopSmall = $products_per_row ; 
	$itemsTablet = $products_per_row - 1; 
	$itemsTabletSmall = $products_per_row - 2; 
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
	  var owl = jQuery("#owl-id-'.$type.'");
	  owl.owlCarousel({
		pagination: '.$slpag.',
		items: '.$products_per_row.',
		itemsDesktop : [1600, '.$products_per_row.'],
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

<div class="shop-browse-products <?php echo $type ?>-view">

	<h4><?php echo $productTitle ?></h4>
	<div class="browse-products-handler vmgroup_products product-sl-handler">
	<div class="row-fluid" id="owl-id-<?php echo $type; ?>">
	<?php 

foreach ( $productList as $product ) {



		// Show Products ?>
		<div class="product">
			<div class="spacer">
				<div class="spacer-handler">
					<div class="pr-img-handler">
					<?php // Product Image
					if ($product->images) {
						echo JHTML::_ ( 'link', JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id ), $product->images[0]->displayMediaThumb( 'class="featuredProductImage" border="0"',false,'' ) ) ;
					}
					?>

					
					
					</div>
					<div class="action-handler">
						<h3 class="h-pr-title">
						<?php // Product Name
						echo JHTML::link ( JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id ), $product->product_name, array ('title' => $product->product_name ) ); ?>
						</h3>


							<span class="product-price">
							<?php
							if (VmConfig::get ( 'show_prices' ) == '1') {
							//				if( $featProduct->product_unit && VmConfig::get('vm_price_show_packaging_pricelabel')) {
							//						echo "<strong>". vmText::_('COM_VIRTUEMART_CART_PRICE_PER_UNIT').' ('.$featProduct->product_unit."):</strong>";
							//					} else echo "<strong>". vmText::_('COM_VIRTUEMART_CART_PRICE'). ": </strong>";

							if ($this->showBasePrice) {
								echo $this->currency->createPriceDiv( 'basePrice', 'COM_VIRTUEMART_PRODUCT_BASEPRICE', $product->prices );
								echo $this->currency->createPriceDiv( 'basePriceVariant', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_VARIANT', $product->prices );
							}
							echo $this->currency->createPriceDiv( 'variantModification', 'COM_VIRTUEMART_PRODUCT_VARIANT_MOD', $product->prices );
							if (round($product->prices['basePriceWithTax'],$this->currency->_priceConfig['salesPrice'][1]) != $product->prices['salesPrice']) {
								echo '<div class="price-crossed">' . $this->currency->createPriceDiv( 'basePriceWithTax', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_WITHTAX', $product->prices ) . "</div>";
							}
							if (round($product->prices['salesPriceWithDiscount'],$this->currency->_priceConfig['salesPrice'][1]) != $product->prices['salesPrice']) {
								echo $this->currency->createPriceDiv( 'salesPriceWithDiscount', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITH_DISCOUNT', $product->prices );
							}
							echo $this->currency->createPriceDiv( 'salesPrice', 'COM_VIRTUEMART_PRODUCT_SALESPRICE', $product->prices );
							if ($product->prices['discountedPriceWithoutTax'] != $product->prices['priceWithoutTax']) {
								echo $this->currency->createPriceDiv( 'discountedPriceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $product->prices );
							} else {
								echo $this->currency->createPriceDiv( 'priceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $product->prices );
							}
							echo $this->currency->createPriceDiv( 'discountAmount', 'COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT', $product->prices );
							echo $this->currency->createPriceDiv( 'taxAmount', 'COM_VIRTUEMART_PRODUCT_TAX_AMOUNT', $product->prices );
							} ?>

							</span>
							
							<div class="popout-price">
								<div class="popout-price-buttons-handler">
									<?php 
									if ($product->images) {
										echo '<div class="show-pop-up-image">'.$product->images[0]->displayMediaThumb( 'class="featuredProductImage"',true,'class="modal"' ).'</div>';
									}
									?>
								</div>
							</div>

							<div class="hand-product-details">

								<div class="addtocart-area">
								<?php echo shopFunctionsF::renderVmSubLayout('addtocart',array('product'=>$product, 'position' => array('ontop', 'addtocart'))); ?>
								</div>

							</div>
						<div class="gr-cover"></div>
					</div>
				</div>

			</div>
		</div>
<?php
}
?>

	</div></div>

</div>
<?php }
