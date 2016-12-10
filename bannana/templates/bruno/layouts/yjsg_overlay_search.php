<?php
/**
 * @package      YJSG Framework
 * @copyright    Copyright(C) since 2007  Youjoomla.com. All Rights Reserved.
 * @author       YouJoomla
 * @license      http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 * @websites     http://www.youjoomla.com | http://www.yjsimplegrid.com
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if ($this->countModules('search-overlay-pos')): ?>
<div class="search-overlay"> <a href="#" class="search-overlay-close"><span class="fa fa-times"></span></a>
  <div class="yjsg_grid">
    <jdoc:include type="modules" name="search-overlay-pos" style="YJsgxhtml" />
  </div>
</div>
<?php endif; ?>
