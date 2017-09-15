<?php


defined ('_JEXEC') or die('Restricted access');
JHTML::_ ('behavior.modal');

include('productsviewarray.php');

$js = "
jQuery(document).ready(function () {
	jQuery('.orderlistcontainer').hover(
		function() { jQuery(this).find('.orderlist').stop().show()},
		function() { jQuery(this).find('.orderlist').stop().hide()}
	)
});
";

$app = JFactory::getApplication();
$document = JFactory::getDocument ();
$document->addScriptDeclaration ($js);

$getTemplateName  = $app->getTemplate('template')->template;

/* Show child categories */

if (VmConfig::get ('showCategory', 1) and empty($this->keyword)) {
	if (!empty($this->category->haschildren)) {

		// Category and Columns Counter
		$iCol = 1;
		$iCategory = 1;

		// Calculating Categories Per Row
		$categories_per_row = VmConfig::get ('categories_per_row', 3);
		//$category_cellwidth = ' width' . floor (100 / $categories_per_row);

		if ($categories_per_row == 4) { $category_cellwidth = 'span3'; }
		elseif ($categories_per_row == 3) { $category_cellwidth = 'span4'; }
		elseif ($categories_per_row == 2) { $category_cellwidth = 'span6'; }
		elseif ($categories_per_row == 1) { $category_cellwidth = 'span12'; }
		
		// Separator
		$verticalseparator = " vertical-separator";
		?>

		<div class="category-view">

		<?php // Start the Output
		if (!empty($this->category->children)) {
			foreach ($this->category->children as $category) {

				// Show the horizontal seperator
				if ($iCol == 1 && $iCategory > $categories_per_row) {
					?>
					<div class="horizontal-separator"></div>
					<?php
				}

				// this is an indicator wether a row needs to be opened or not
				if ($iCol == 1) {
					?>
			<div class="row-fluid">
			<?php
				}

				// Show the vertical seperator
				if ($iCategory == $categories_per_row or $iCategory % $categories_per_row == 0) {
					$show_vertical_separator = ' ';
				} else {
					$show_vertical_separator = $verticalseparator;
				}

				// Category Link
				$caturl = JRoute::_ ('index.php?option=com_virtuemart&view=category&virtuemart_category_id=' . $category->virtuemart_category_id);

				// Show Category
				?>
				<div class="category floatleft <?php echo $category_cellwidth . $show_vertical_separator ?>">
					<div class="spacer">
						<h2 class="category-view-title">
							<a href="<?php echo $caturl ?>" title="<?php echo $category->category_name ?>">
							
							
								<?php // if ($category->ids) {
								echo $category->images[0]->displayMediaThumb ("", FALSE);
								//} ?>
								
							<br />
							<span class="cat-title"><?php echo $category->category_name ?></span>
								
							</a>
						</h2>
					</div>
				</div>
				<?php
				$iCategory++;

				// Do we need to close the current row now?
				if ($iCol == $categories_per_row) {
					?>
					<div class="clear"></div>
		</div>
			<?php
					$iCol = 1;
				} else {
					$iCol++;
				}
			}
		}
		// Do we need a final closing row tag?
		if ($iCol != 1) {
			?>
			<div class="clear"></div>
		</div>
	<?php } ?>
	</div>

	<?php
	}
}
?>
<div class="browse-view">
<?php

if (!empty($this->keyword)) {
	?>
<h3><?php echo $this->keyword; ?></h3>
	<?php
} ?>
<?php if (!empty($this->keyword)) {

	$category_id  = vRequest::getInt ('virtuemart_category_id', 0); ?>
<form action="<?php echo JRoute::_ ('index.php?option=com_virtuemart&view=category&limitstart=0', FALSE); ?>" method="get">

	<!--BEGIN Search Box -->
	<div class="virtuemart_search">
		<?php echo $this->searchcustom ?>
		<br/>
		<?php echo $this->searchCustomValues ?>
		<input name="keyword" class="inputbox" type="text" size="20" value="<?php echo $this->keyword ?>"/>
		<input type="submit" value="<?php echo vmText::_ ('COM_VIRTUEMART_SEARCH') ?>" class="button" onclick="this.form.keyword.focus();"/>
	</div>
	<input type="hidden" name="search" value="true"/>
	<input type="hidden" name="view" value="category"/>
	<input type="hidden" name="option" value="com_virtuemart"/>
	<input type="hidden" name="virtuemart_category_id" value="<?php echo $category_id; ?>"/>

</form>
<!-- End Search Box -->
	<?php } ?>

<?php // Show child categories
if (!empty($this->products)) {
	?>
	
<div class="row-fluid browse-top">	
	<div class="span3">
		<?php echo $this->category->images[0]->displayMediaThumb("",false); ?>
	</div>
	<div class="span9">	
		<h1><?php echo $this->category->category_name; ?></h1>
		<?php
		if (empty($this->keyword) and !empty($this->category)) {
			?>
		<div class="category_description">
			<?php echo $this->category->category_description; ?>
		</div>
		<?php
		}
		?>
			

	</div>
</div>

		<div class="orderby-displaynumber">
			<div class="row-fluid">
				<div class="span7 floatleft">
					<?php echo $this->orderByList['orderby']; ?>
					<?php echo $this->orderByList['manufacturer']; ?>

					<ul class="view-as">
					<?php
					while(list($key, $val) = each($styleSheets)){
						echo "<li class='".$val["class"]."'><a href='".JURI::base(true)."/templates/". $getTemplateName ."/productsview.php?SETSTYLE=".$key."' title='".$val["title"]."'>".$val["text"]."</a></li>";
					}
					?>
					</ul>
				</div>
				
				<div class="span5 floatright display-number"><span class="display-results-no"><?php echo $this->vmPagination->getResultsCounter ();?></span><?php echo $this->vmPagination->getLimitBox ($this->category->limit_list_step); ?></div>
				<div class="vm-pagination">
					<?php echo $this->vmPagination->getPagesLinks (); ?>
					<span style="float:right"><?php echo $this->vmPagination->getPagesCounter (); ?></span>
				</div>

			</div>
		</div> <!-- end of orderby-displaynumber -->
<div class="even-odd">
	<?php
	// Category and Columns Counter
	$iBrowseCol = 1;
	$iBrowseProduct = 1;

	// Calculating Products Per Row
	$BrowseProducts_per_row = $this->perRow;
	//$Browsecellwidth = ' width' . floor (100 / $BrowseProducts_per_row);
	
		if ($BrowseProducts_per_row == 4) { $Browsecellwidth = 'span3'; }
		elseif ($BrowseProducts_per_row == 3) { $Browsecellwidth = 'span4'; }
		elseif ($BrowseProducts_per_row == 2) { $Browsecellwidth = 'span6'; }
		elseif ($BrowseProducts_per_row == 1) { $Browsecellwidth = 'span12'; }

	// Separator
	$verticalseparator = " vertical-separator";

	$BrowseTotalProducts = count($this->products);

	// Start the Output
	foreach ($this->products as $product) {


		// this is an indicator wether a row needs to be opened or not
		if ($iBrowseCol == 1) {
			?>
	<div class="row-fluid">
	


	
	<?php
		}

		// Show the vertical seperator
		if ($iBrowseProduct == $BrowseProducts_per_row or $iBrowseProduct % $BrowseProducts_per_row == 0) {
			$show_vertical_separator = ' ';
		} else {
			$show_vertical_separator = $verticalseparator;
		}

		// Show Products
		?>
		<div class="product floatleft <?php echo $Browsecellwidth . $show_vertical_separator ?>">
			<div class="spacer">
				<div class="spacer-handler pr-img-handler">
				
					<a href="<?php echo $product->link;?>">
					<?php 
						echo $product->images[0]->displayMediaThumb ('class="browseProductImage" border="0" title="' . $product->product_name . '" ', FALSE, 'class="modal"');
					?>
					</a>
				</div>
				<div class="action-handler">
					<h2 class="h-pr-title"><?php echo JHTML::link ($product->link, $product->product_name); ?></h2>
				
					<?php // Product Short Description
					if (!empty($product->product_s_desc)) {
					?>
						<p class="product_s_desc">
							<?php echo shopFunctionsF::limitStringByWord ($product->product_s_desc, 120, '...') ?>
						</p>
					<?php } ?>
					
						<div class="h-pr-details">
						
							<div class="product-price-1 marginbottom12" id="productPrice<?php echo $product->virtuemart_product_id ?>">
							<?php
							if ($this->show_prices == '1') {
								if ($product->prices['salesPrice']<=0 and VmConfig::get ('askprice', 1) and  !$product->images[0]->file_is_downloadable) {
									echo vmText::_ ('COM_VIRTUEMART_PRODUCT_ASKPRICE');
								}
								//todo add config settings
								if ($this->showBasePrice) {
									echo $this->currency->createPriceDiv ('basePrice', 'COM_VIRTUEMART_PRODUCT_BASEPRICE', $product->prices);
									echo $this->currency->createPriceDiv ('basePriceVariant', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_VARIANT', $product->prices);
								}
								echo $this->currency->createPriceDiv ('variantModification', 'COM_VIRTUEMART_PRODUCT_VARIANT_MOD', $product->prices);
								if (round($product->prices['basePriceWithTax'],$this->currency->_priceConfig['salesPrice'][1]) != $product->prices['salesPrice']) {
									echo '<div class="price-crossed" >' . $this->currency->createPriceDiv ('basePriceWithTax', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_WITHTAX', $product->prices) . "</div>";
								}
								if (round($product->prices['salesPriceWithDiscount'],$this->currency->_priceConfig['salesPrice'][1]) != $product->prices['salesPrice']) {
									echo $this->currency->createPriceDiv ('salesPriceWithDiscount', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITH_DISCOUNT', $product->prices);
								}
								echo $this->currency->createPriceDiv ('salesPrice', 'COM_VIRTUEMART_PRODUCT_SALESPRICE', $product->prices);
								if ($product->prices['discountedPriceWithoutTax'] != $product->prices['priceWithoutTax']) {
									echo $this->currency->createPriceDiv ('discountedPriceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $product->prices);
								} else {
									echo $this->currency->createPriceDiv ('priceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $product->prices);
								}
								echo $this->currency->createPriceDiv ('discountAmount', 'COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT', $product->prices);
								echo $this->currency->createPriceDiv ('taxAmount', 'COM_VIRTUEMART_PRODUCT_TAX_AMOUNT', $product->prices);
								$unitPriceDescription = vmText::sprintf ('COM_VIRTUEMART_PRODUCT_UNITPRICE', $product->product_unit);
								echo $this->currency->createPriceDiv ('unitPrice', $unitPriceDescription, $product->prices);
							} ?>

							</div>
							
							<div class="popout-price">
								<div class="popout-price-buttons-handler">
									<?php 
									if ($product->images) {
										echo '<div class="show-pop-up-image">'.$product->images[0]->displayMediaThumb( 'class="featuredProductImage"',true,'class="modal"' ).'</div>';
									}
									?>
								</div>
							</div>
							
							<?php
							if ( VmConfig::get ('display_stock', 1)) { ?>
							<!-- 						if (!VmConfig::get('use_as_catalog') and !(VmConfig::get('stockhandle','none')=='none')){?> -->
							<div class="paddingtop8">
								<span class="stock-level"><?php echo vmText::_ ('COM_VIRTUEMART_STOCK_LEVEL_DISPLAY_TITLE_TIP') ?></span>
								<span class="vmicon vm2-<?php echo $product->stock->stock_level ?>" title="<?php echo $product->stock->stock_tip ?>"></span>
							</div>
							<?php } ?>

							<div class="vm3pr">
								<?php echo shopFunctionsF::renderVmSubLayout('addtocart',array('product'=>$product, 'position' => array('ontop', 'addtocart'))); ?>
							</div>
						
						
						</div>
				</div>
			</div>
			<!-- end of spacer -->
		</div> <!-- end of product -->
		<?php

		// Do we need to close the current row now?
		if ($iBrowseCol == $BrowseProducts_per_row || $iBrowseProduct == $BrowseTotalProducts) {
			?>
			<div class="clear"></div>
   </div> <!-- end of row -->
			<?php
			$iBrowseCol = 1;
		} else {
			$iBrowseCol++;		
		}

		$iBrowseProduct++;

	} // end of foreach ( $this->products as $product )
	// Do we need a final closing row tag?
	if ($iBrowseCol != 1) {
		?>
	<div class="clear"></div>

		<?php
	}
	?>

</div>
	
<div class="vm-pagination"><?php echo $this->vmPagination->getPagesLinks (); ?><span style="float:right"><?php echo $this->vmPagination->getPagesCounter (); ?></span></div>

	<?php
} elseif ($this->search !== NULL) {
	echo vmText::_ ('COM_VIRTUEMART_NO_RESULT') . ($this->keyword ? ' : (' . $this->keyword . ')' : '');
}
?>
</div><!-- end browse-view -->