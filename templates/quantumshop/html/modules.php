<?php defined('_JEXEC') or die('Restricted access');

function modChrome_vmdefault($module, &$params, &$attribs)
{

$bootstrapSize = (int) $params->get('bootstrap_size', 0);
$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';	
$animData = "";

$style1 = 'moveup';
if( strpos($params->get('moduleclass_sfx'), $style1) !== false )   : 
	$animData = 'data-sr="enter bottom hustle 50px over 1.5s"';
endif;

$style2 = 'movedown';
if( strpos($params->get('moduleclass_sfx'), $style2) !== false )   : 
	$animData = 'data-sr="enter top hustle 50px over 1.5s"';
endif;

$style3 = 'moveright';
if( strpos($params->get('moduleclass_sfx'), $style3) !== false )   : 
	$animData = 'data-sr="enter right, hustle 60px over 1.5s"';
endif;

$style4 = 'moveleft';
if( strpos($params->get('moduleclass_sfx'), $style4) !== false )   : 
	$animData = 'data-sr="enter left, hustle 60px over 1.5s"';
endif;

$headerClass   = htmlspecialchars($params->get('header_class', 'page-header'), ENT_COMPAT, 'UTF-8');
	
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?><?php echo $moduleClass; ?>" <?php echo $animData; ?>>
			<?php if( strpos($params->get('moduleclass_sfx'), "_style4") !== false ) : ?><div class="sk1"></div><?php endif; ?>
			<div class="module-content-handler">
			<?php $data = $params->get('moduleclass_sfx');
				if (strpos($data, 'special-ribbon') !== false) : ?>
					<div class="ribbon-special">SPECIAL</div>
				<?php elseif (strpos($data, 'hot-ribbon') !== false) : ?>
					<div class="ribbon-hot">HOT</div>
				<?php elseif (strpos($data, 'new-ribbon') !== false) : ?>
					<div class="ribbon-new">NEW</div>
			<?php endif; ?>
				<?php if ($module->showtitle) : ?>
				<h<?php echo $headerLevel; ?>><span class="h-cl"><?php if($headerClass !== "page-header") : ?><span class="ifa-icon"><i class="fa <?php echo $headerClass; ?>" aria-hidden="true"></i></span><?php endif; ?><?php echo $module->title; ?></span>
				</h<?php echo $headerLevel; ?>>
				<?php endif; ?>
			<div class="module-content"><?php echo $module->content; ?></div>
			</div>
			<?php if( strpos($params->get('moduleclass_sfx'), "_style4") !== false ) : ?><div class="sk2"></div><?php endif; ?>
			<?php if( strpos($params->get('moduleclass_sfx'), "_style4") !== false ) : ?><div class="sk3"></div><?php endif; ?>
		</div>
	<?php endif;
}

function modChrome_vmdefaultlogin($module, &$params, &$attribs)
{

$bootstrapSize = (int) $params->get('bootstrap_size', 0);
$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';

	if (!empty ($module->content)) : ?>
		<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?><?php echo $moduleClass; ?>">

			<div class="module-content"><?php echo $module->content; ?></div>
		</div>
	<?php endif;
}

function modChrome_vmtab($module, &$params, &$attribs)
{
	
$bootstrapSize = (int) $params->get('bootstrap_size', 0);
$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';	
	
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="tab-pane tf-module" id="tabid<?php echo $module->id; ?>">
			<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?><?php echo $moduleClass; ?>">
				<?php if ($module->showtitle) : ?>
				<h<?php echo $headerLevel; ?>><span class="h-cl"><?php echo $module->title; ?></span>
				</h<?php echo $headerLevel; ?>>
				<?php endif; ?>
				<div class="module-content"><?php echo $module->content; ?></div>	
			</div>
		</div>
	<?php endif;
}

function modChrome_testimonial($module, &$params, &$attribs)
{
	
	$headerClass = htmlspecialchars($params->get('header_class', 'page-header'), ENT_COMPAT, 'UTF-8');
	
	if (!empty ($module->content)) : ?>
		<div class="tab-pane moduletable<?php echo $params->get('moduleclass_sfx'); ?>">
			
			<?php if( strpos($params->get('moduleclass_sfx'), "tes-up") !== false || strpos($params->get('moduleclass_sfx'), "tes-left") !== false ) : ?>
			<div class="tes-identify">
			<?php if($params->get('backgroundimage')) : ?>
			<div class="tes-photo">
				<img class="person" src="<?php echo $params->get('backgroundimage');?>">
			</div>
			<?php endif; ?>
			<div class="tes-name"><?php echo $module->title; ?><br><span class="custom-color3 feedback-<?php echo $headerClass; ?>"></span></div>
			</div>
			<?php endif; ?>
		
			<div class="module-content"><?php echo $module->content; ?></div>
			
			<?php if( strpos($params->get('moduleclass_sfx'), "tes-down") !== false || strpos($params->get('moduleclass_sfx'), "tes-right") !== false ) : ?>
			<div class="tes-identify">
			<?php if($params->get('backgroundimage')) : ?>
			<div class="tes-photo">
				<img class="person" src="<?php echo $params->get('backgroundimage');?>">
			</div>
			<?php endif; ?>
			<div class="tes-name"><?php echo $module->title; ?><br><span class="custom-color3 feedback-<?php echo $headerClass; ?>"></span></div>
			</div>
			<?php endif; ?>
			
		</div>
	<?php endif;
}

function modChrome_megamenu($module, &$params, &$attribs)
{
	
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	
	if (!empty ($module->content)) : ?>
		<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?><?php echo $moduleClass; ?>">
			<div class="moduletable_handler">
				<?php if ($module->showtitle) : ?>
				<h<?php echo $headerLevel; ?>><span class="h-cl"><?php echo $module->title; ?></span>
				</h<?php echo $headerLevel; ?>>
				<?php endif; ?>
				<div class="module-content"><?php echo $module->content; ?></div>
			</div>
		</div>
	<?php endif;
}

function modChrome_parallax($module, &$params, &$attribs)
{

$bootstrapSize = (int) $params->get('bootstrap_size', 0);
$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';	
$animData = "";

$style1 = 'moveup';
if( strpos($params->get('moduleclass_sfx'), $style1) !== false )   : 
	$animData = 'data-sr="enter bottom hustle 50px over 1.5s"';
endif;

$style2 = 'movedown';
if( strpos($params->get('moduleclass_sfx'), $style2) !== false )   : 
	$animData = 'data-sr="enter top hustle 50px over 1.5s"';
endif;

$style3 = 'moveright';
if( strpos($params->get('moduleclass_sfx'), $style3) !== false )   : 
	$animData = 'data-sr="enter right, hustle 60px over 1.5s"';
endif;

$style4 = 'moveleft';
if( strpos($params->get('moduleclass_sfx'), $style4) !== false )   : 
	$animData = 'data-sr="enter left, hustle 60px over 1.5s"';
endif;

list($width, $height, $type, $attr) = getimagesize($params->get('backgroundimage'));

	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
		<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?><?php echo $moduleClass; ?>" <?php echo $animData; ?> style="position: relative; overflow: hidden;">
			
			<div class="moduletable-parallax" data-stellar-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url('<?php echo $params->get('backgroundimage'); ?>');min-width:<?php echo $width;?>px;min-height:<?php echo $height;?>px;" ></div>
			
			<div class="module-content-handler">
				<?php if ($module->showtitle) : ?>
				<h<?php echo $headerLevel; ?>><?php echo $module->title; ?>
				</h<?php echo $headerLevel; ?>>
				<?php endif; ?>
				<div class="module-content"><?php echo $module->content; ?></div>
			</div>

		</div>
	<?php endif;
}


function modChrome_slides($module, &$params, &$attribs)
{
$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
if (!empty ($module->content)) : ?>
<div>
<?php if ($module->showtitle) : ?><h<?php echo $headerLevel; ?> class="slide-header"><?php echo $module->title; ?></h<?php echo $headerLevel; ?>><?php endif; ?>
<?php echo $module->content; ?>
</div>
<?php endif;
}


