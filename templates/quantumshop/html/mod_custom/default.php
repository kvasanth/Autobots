<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_custom
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>

<?php 
$style1 = '_style5';
$style2 = '_style6';
$style3 = '_style7';

if( strpos($params->get('moduleclass_sfx'), $style1) !== false  )  : ?>
<div class="custom<?php echo $moduleclass_sfx ?>">
	<div class="con_style1<?php if($params->get('backgroundimage') == false ) : ?> full-fill<?php endif; ?>"><div class="con_style_handler"><?php echo $module->content;?></div></div>
	<?php if($params->get('backgroundimage') ) : ?><div class="has-image1"><img src="<?php echo $params->get('backgroundimage');?>"></div><?php endif; ?>
</div>
<?php elseif( strpos($params->get('moduleclass_sfx'), $style2) !== false  )  : ?>
<div class="tes-content">
	<?php echo $module->content;?>
</div>
<?php elseif( strpos($params->get('moduleclass_sfx'), $style3) !== false  )  : ?>
	<?php echo $module->content;?>
<?php else: ?>
<div class="custom<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')): ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
	<?php echo $module->content;?>
</div>
<?php endif; ?>