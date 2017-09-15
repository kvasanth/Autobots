<?php // no direct access
defined ('_JEXEC') or die('Restricted access');
vmJsApi::jPrice();
$col = 1;

if ($products_per_row > 1) {
	$float = "floatleft";
} else {
	$float = "center";
}
?>

<?php 
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$temps = $doc->baseurl.'/templates/'.$doc->template;

$templateparams = $app->getTemplate(true)->params;



if ($templateparams->get('slick_pagination')) : $slick_pagination = "true"; else : $slick_pagination = "false"; endif;
if ($templateparams->get('slick_fade')) : $slick_fade = "true"; else : $slick_fade = "false"; endif;
if ($templateparams->get('slick_autoplay')) : $slick_autoplay = "true"; else : $slick_autoplay = "false"; endif;
if ($templateparams->get('slick_pauseOnHover')) : $slick_pauseOnHover = "true"; else : $slick_pauseOnHover = "false"; endif;


$doc->addScript($temps.'/js/slick.min.js'); 
$doc->addCustomTag('
  <script type="text/javascript">
   jQuery(document).on("ready", function() {
      jQuery(".slicksliderhandler'.$module->id.'").slick({
        dots: '.$slick_pagination.',
		fade: '.$slick_fade.',
		autoplay: '.$slick_autoplay.',
		pauseOnHover: '.$slick_pauseOnHover.',
		autoplaySpeed: '.$templateparams->get("slickplayspeed").',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>

');		

$GLOBALS['moddd'] = $module->id;

?>


<?php JHTML::_('behavior.modal'); ?>
<div class="vmgroup<?php echo $params->get('moduleclass_sfx') ?> product-sl-handler slickslideshow">

	<?php if ($headerText) { ?>
	<div class="vmheader"><?php echo $headerText ?></div>
	<?php
}
	if ($display_style == "div") {
		?>
		<div class="sl-products slicksliderhandler<?php echo($module->id); ?> product-details product-container">
			<?php 
			$a = 0;
			foreach ($products as $product) : ?>
			<div class="<?php echo "sl-item-".$a++%$products_per_row; ?>">
				<div class="spacer">
				<div class="pr-img-handler">
				<?php
				if (!empty($product->images[0])) {
					$image = $product->images[0]->displayMediaThumb ('class="featuredProductImage" border="0"', FALSE);
				} else {
					$image = '';
				}
				
				if (!empty($product->images[1])) {
					$image2 = $product->images[1]->displayMediaThumb ('class="featuredProductImage" border="0"', FALSE);
				} else {
					$image2 = '';
				}
				
				echo JHTML::_ ('link', JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id), $image, array('title' => $product->product_name));
				
				if (!empty($product->images[1])) {
				echo '<div class="nd-image">'.JHTML::_ ('link', JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id), $image2, array('title' => $product->product_name)).'</div>';
				}
				
				?>

					<div class="popout-price">
					
					</div>
				<?php $url = JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' .
					$product->virtuemart_category_id); ?>


					
				</div>
					<div class="action-handler">
						<div class="action-handler-inner">
							<h3 class="h-pr-title">
								<a href="<?php echo $url ?>"><?php echo $product->product_name ?></a>
							</h3>
							<?php
							if (!empty($product->product_s_desc)) {
							?>
								<p class="product_s_desc">
									<?php echo shopFunctionsF::limitStringByWord ($product->product_s_desc, 90, '...') ?>
								</p>
							<?php } ?>

							<span class="product-price">
							<?php 
								// $product->prices is not set when show_prices in config is unchecked
								if ($show_price and  isset($product->prices)) {
									echo '<div class="product-price">'.$currency->createPriceDiv ('salesPrice', '', $product->prices, FALSE, FALSE, 1.0, TRUE);
									if ($product->prices['salesPriceWithDiscount'] > 0) {
										echo $currency->createPriceDiv ('salesPriceWithDiscount', '', $product->prices, FALSE, FALSE, 1.0, TRUE);
									}
									echo '</div>';
								}?>
							</span>
							<div class="productdetails">
							<?php							
							
								if ($show_addtocart) {
									echo shopFunctionsF::renderVmSubLayout('addtocart',array('product'=>$product));
								}
							?>
							</div>
							<div class="popout-price">
								<div class="popout-price-buttons-handler">
									<?php 
									if ($product->images) {
										echo '<div class="show-pop-up-image">'.$product->images[0]->displayMediaThumb( 'class="featuredProductImage"',true,'class="modal"' ).'</div>';
									}
									?>
									<?php if ($show_addtocart) { ?>
									<?php if (!empty($product->customfieldsSorted['addtocart'])) { ?>
									<a href="JavaScript:;" class="show-advanced-fields" onclick="toggle_visibility('product<?php echo $GLOBALS['moddd'].$product->virtuemart_product_id; ?>');">advanced</a>
									<?php } } ?>
								</div>
							</div>
							<div class="clear"></div>
							<div class="gr-cover"></div>
						</div>
					</div>
						
				</div>
			</div>
			<?php
		endforeach; ?>
		</div>
		<div class="clear"></div>

		<?php
	} else {
		$last = count ($products) - 1;
		?>
	
		<ul class="sl-products slicksliderhandler<?php echo($module->id); ?> product-details product-container">
			<?php 
			$a = 0;
			foreach ($products as $product) : ?>
			<li class="<?php echo "sl-item-".$a++%$products_per_row; ?>">
				<div class="spacer">
				<div class="pr-img-handler">
				<?php
				if (!empty($product->images[0])) {
					$image = $product->images[0]->displayMediaThumb ('class="featuredProductImage" border="0"', FALSE);
				} else {
					$image = '';
				}
				
				if (!empty($product->images[1])) {
					$image2 = $product->images[1]->displayMediaThumb ('class="featuredProductImage" border="0"', FALSE);
				} else {
					$image2 = '';
				}
				
				echo JHTML::_ ('link', JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id), $image, array('title' => $product->product_name));
				
				if (!empty($product->images[1])) {
				echo '<div class="nd-image">'.JHTML::_ ('link', JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id), $image2, array('title' => $product->product_name)).'</div>';
				}
				
				?>

				<?php $url = JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' .
					$product->virtuemart_category_id); ?>
					
				</div>
					<div class="action-handler">
						<div class="action-handler-inner">
							<h3 class="h-pr-title">
								<a href="<?php echo $url ?>"><?php echo $product->product_name ?></a>
							</h3>
							<?php
							if (!empty($product->product_s_desc)) {
							?>
								<p class="product_s_desc">
									<?php echo shopFunctionsF::limitStringByWord ($product->product_s_desc, 90, '...') ?>
								</p>
							<?php } ?>

							<span class="product-price">
							<?php 
								// $product->prices is not set when show_prices in config is unchecked
								if ($show_price and  isset($product->prices)) {
									echo '<div class="product-price">'.$currency->createPriceDiv ('salesPrice', '', $product->prices, FALSE, FALSE, 1.0, TRUE);
									if ($product->prices['salesPriceWithDiscount'] > 0) {
										echo $currency->createPriceDiv ('salesPriceWithDiscount', '', $product->prices, FALSE, FALSE, 1.0, TRUE);
									}
									echo '</div>';
								}?>
							</span>
							<div class="productdetails">
							<?php							
								if ($show_addtocart) {
									echo shopFunctionsF::renderVmSubLayout('addtocart',array('product'=>$product));
								}
							?>
							</div>
							<div class="popout-price">
								<div class="popout-price-buttons-handler">
									<?php 
									if ($product->images) {
										echo '<div class="show-pop-up-image">'.$product->images[0]->displayMediaThumb( 'class="featuredProductImage"',true,'class="modal"' ).'</div>';
									}
									?>
									<?php if ($show_addtocart) { ?>
									<?php if (!empty($product->customfieldsSorted['addtocart'])) { ?>
									<a href="JavaScript:;" class="show-advanced-fields" onclick="toggle_visibility('product<?php echo $GLOBALS['moddd'].$product->virtuemart_product_id; ?>');">advanced</a>
									<?php } } ?>
								</div>
							</div>
							<div class="clear"></div>
							<div class="gr-cover"></div>
						</div>
					</div>
						
				</div>
			</li>
			<?php
		endforeach; ?>
		</ul>
		<div class="clear"></div>

		<?php
	}
	if ($footerText) : ?>
		<div class="vmfooter<?php echo $params->get ('moduleclass_sfx') ?>">
			<?php echo $footerText ?>
		</div>
		<?php endif; ?>
</div>