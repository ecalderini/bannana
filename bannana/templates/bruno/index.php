<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) since 2007  Youjoomla.com . All Rights Reserved.     ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
/* 
	Joomla! Template Based on YJSG Framework @since 2.0.0
*/
defined( '_JEXEC' ) or die( 'Restricted index access' );

if (!defined( 'YJSGRUN' )) {
	echo JText::_('YJSG_PLUGIN_NOT_FOUND');
	exit;
}
require( YJSGCORE_PATH );/* YJSGFramework main functions*/
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>"  dir="<?php echo $this->direction; ?>" class="<jdoc:include type="htmlclass" />">
<head>
<?php require( YJSG_HEAD );/* <head> files containing css , js and conditions */?>
</head>
<body id="stylef<?php echo $default_font_family ?>" class="yjsgbody style_<?php echo $css_file.$browserClassName.$rtlClass ?> <?php echo $backgroundClass.$isbgType.$pagePrefix?>">
<div id="layout_type" class="<?php echo $layoutClass ?>">
	<?php require( YJSG_OVERLAY_SEARCH );/* search */?>
    <div class="centertop-out">
        <div id="centertop" class="centered yjsgsitew">
            <?php require( YJSG_HEADERBLOCK_CUSTOM );/* header - header grid */?>
        </div>
    </div>
	<?php 
        if($topMenuLocation == 0 ){ /* if topmenu location is inside the header we dont need it here */
            require( YJSG_TOPMENU );/* top menu */
        }
    ?>
    <?php yjsg_print_grid_area('yjsg1',true,$yjsg1_before,$yjsg1_after);/* grid 1 top1=top5 */ ?>
	<?php if ($this->countModules('extrapos1')): ?>
    <!--Extrapos1-->
    <div class="extrapos1-out">
      <div class="extrapos1 yjsgsitew">
        <jdoc:include type="modules" name="extrapos1" style="YJsgxhtml" />
      </div>
    </div>
    <?php endif; ?>
	<?php yjsg_print_grid_area('yjsg2',true);/* grid 2 adv1-adv5*/ ?>
	<?php if ($this->countModules('extrapos2')): ?>
    <!--Extrapos1-->
    <div class="extrapos2-out">
      <div class="extrapos2 yjsgsitew">
        <jdoc:include type="modules" name="extrapos2" style="YJsgxhtml" />
      </div>
    </div>
    <?php endif; ?>
	<?php if ($this->countModules('extrapos3')): ?>
    <!--Extrapos2-->
    <div class="extrapos3 yjsgsitew">
      <jdoc:include type="modules" name="extrapos3" style="YJsgxhtml" />
    </div>
    <?php endif; ?>
    <?php yjsg_print_grid_area('yjsg3',true);/*grid 3 user1-user5*/ ?>
    <?php yjsg_print_grid_area('yjsg4',true);/* grid4 user6-user10*/ ?>
	<!-- end centartop-->
	<div id="centerbottom" class="centered yjsgsitew">
		<?php require( $yjsg_loadlayout );/* mid grid - mainbody grids*/?>
		<?php require( YJSG_PATHWAY );/* pathway including breadcrumb module position */ ?>
	</div>
	<!-- end centerbottom-->
	<?php yjsg_print_grid_area('yjsg5',true,$yjsg5_before,$yjsg5_after);/* grid 5 user11-user15*/ ?>
	<?php if ($this->countModules('extrapos4')): ?>
    <!--Extrapos3-->
    <div class="extrapos4 yjsgsitew">
      <jdoc:include type="modules" name="extrapos4" style="YJsgxhtml" />
    </div>
    <?php endif; ?>
	<?php if ($this->countModules('extrapos5')): ?>
    <!--Extrapos3-->
    <div class="extrapos5-out">
        <div class="extrapos5 yjsgsitew">
          <jdoc:include type="modules" name="extrapos5" style="YJsgxhtml" />
        </div>
    </div>
    <?php endif; ?>
	<?php yjsg_print_grid_area('yjsg6',true);/* grid 6 user16-user20*/ ?>
    <div class="bottom-holder">
		<?php yjsg_print_grid_area('yjsg7',true);/* grid 7 user21-user25*/ ?>
        <div class="footer_out yjsgouts">
			<?php require( YJSG_FOOTER );/* footer -  footer menu , copyright , YJSG logo , validation links*/ ?>
        </div>
    </div>
</div>    
	<?php require( YJSG_NOTICES );/* IE6 and nonscript notices*/?>
	<?php 
		if($responsive_on == 1 && ($topmenu_off == 2 || $itemid == 0 )) {
			require( YJSG_MOBILEMENU );/* responsive menu select list loaded at the end . better for seo */
		}
    ?>
	<?php 
		if ($this->countModules('sidepanel') || $yjsgBotPanel_loaded || $yjsgTopPanel_loaded) { 
			require( YJSG_PANELS );/* Sliding panels */
		}
    ?>
	<?php 
		if ($this->countModules('offcanvas')) { 
			require( YJSG_OFFCANVAS );/* Off canvas panel */
		}
    ?>
</body>
</html>