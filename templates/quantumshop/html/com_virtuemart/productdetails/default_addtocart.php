<?php
/**
 *
 * Show the product details page
 *
 * @package    VirtueMart
 * @subpackage
 * @author Max Milbers, Valerie Isaksen
 * @todo handle child products
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default_addtocart.php 7833 2014-04-09 15:04:59Z Milbo $
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
if (isset($this->product->step_order_level))
	$step=$this->product->step_order_level;
else
	$step=1;
if($step==0)
	$step=1;
$alert=vmText::sprintf ('COM_VIRTUEMART_WRONG_AMOUNT_ADDED', $step);
?>

<div class="addtocart-area">

	<form method="post" class="product js-recalculate" action="<?php echo JRoute::_ ('index.php',false); ?>">
		<?php /*         <input name="quantity[]" type="hidden" value="<?php echo $step ?>" />
		<?php // Product custom_fields
		/*if (!empty($this->product->customfieldsSorted['addtocart'])) {
			$this->position = 'addtocart';
			echo $this->loadTemplate('customfields');
		} // Product Custom ontop end */

		$this->position = 'addtocart';

		if (!empty($this->product->customfieldsSorted[$this->position])) {
			?>
			<div class="product-fields">
				<?php //foreach ($this->product->customfields as $field) {
				$this->product->row = $this->row;

				foreach ($this->product->customfieldsSorted[$this->position] as $field) {
					//vmdebug('addtocart',$field);
					//Dont mix the systems, why we should not allow that someone is using this position just for information
				//if($field->is_cart_attribute==1){
					//The fields must have now a row, also the products
					//$field->row = $this->row;
					?>
				<div class="product-field product-field-type-<?php echo $field->field_type ?>">
					<?php if ($field->show_title) { ?>
						<span class="product-fields-title-wrapper"><span class="product-fields-title"><strong><?php echo vmText::_ ($field->custom_title) ?></strong></span>
						<?php if ($field->custom_tip) {
							echo JHtml::tooltip ($field->custom_tip, vmText::_ ($field->custom_title), 'tooltip.png');
						} ?></span>
					<?php } ?>
					<span class="product-field-display"><?php echo $field->display ?></span>

					<span class="product-field-desc"><?php echo $field->custom_desc ?></span>
				</div><br/>
					<?php
				//}
			}
				?>
			</div>
			<?php
		}

		if (!VmConfig::get('use_as_catalog', 0)  ) {
		?>

		<div class="addtocart-bar">

<script type="text/javascript">
		function check(obj) {
 		// use the modulus operator '%' to see if there is a remainder
		remainder=obj.value % <?php echo $step?>;
		quantity=obj.value;
 		if (remainder  != 0) {
 			alert('<?php echo $alert?>!');
 			obj.value = quantity-remainder;
 			return false;
 			}
 		return true;
 		}
</script> 

			<?php // Display the quantity box

			$stockhandle = VmConfig::get ('stockhandle', 'none');
			if (($stockhandle == 'disableit' or $stockhandle == 'disableadd') and ($this->product->product_in_stock - $this->product->product_ordered) < 1) {
				?>
				<a href="<?php echo JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&layout=notify&virtuemart_product_id=' . $this->product->virtuemart_product_id); ?>" class="notify"><?php echo vmText::_ ('COM_VIRTUEMART_CART_NOTIFY') ?></a>

				<?php } else {
					$tmpPrice = (float) $this->product->prices['costPrice'];
					if (!( VmConfig::get('askprice', true) and empty($tmpPrice) ) ) {
				?>
				

				<?php // Display the quantity box END
       

					// Display the add to cart button ?>
          			<span class="addtocart-button">
          			<?php echo shopFunctionsF::getAddToCartButton ($this->product->orderable);

						// Display the add to cart button END  ?>
         			</span>
					
					<span class="quantity-box">
						<input type="text" class="quantity-input js-recalculate" name="quantity[]" onblur="check(this);" value="<?php if (isset($this->product->step_order_level) && (int)$this->product->step_order_level > 0) {
							echo $this->product->step_order_level;
						} else if(!empty($this->product->min_order_level)){
							echo $this->product->min_order_level;
						}else {
							echo '1';
						} ?>"/>
					</span>
					<span class="quantity-controls js-recalculate">
						<input type="button" class="quantity-controls quantity-plus" />
						<input type="button" class="quantity-controls quantity-minus" />
					</span>	
					
						<noscript><input type="hidden" name="task" value="add"/></noscript>
					<?php }
				?>
				
				<?php } ?>

			<div class="clear"></div>
		</div>
		<?php } ?>
		<input type="hidden" name="option" value="com_virtuemart"/>
		<input type="hidden" name="view" value="cart"/>

		<input type="hidden" name="virtuemart_product_id[]" value="<?php echo $this->product->virtuemart_product_id ?>"/>
		<input type="hidden" class="pname" value="<?php echo htmlentities($this->product->product_name, ENT_QUOTES, 'utf-8') ?>"/>
	</form>

	<div class="clear"></div>
</div>
