/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) 2010  Youjoomla.com. All Rights Reserved.            ||
|| # Authors - Dragan Todorovic and Stefan Stojanovic                   ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
jQuery.noConflict();
(function($) {
    $(function() {
        $(document).ready(function() {
            /* Extrapos1 */
            $('.header-extrapos1').css({
                'display': 'block'
            }).prependTo('#yjsgheadergrid');
			
            /* Search */
            $('.search-trigger').on('click', function() {
                $('.search-overlay').addClass('open');
            });
            $('.search-overlay-close').on('click', function() {
                $('.search-overlay').removeClass('open');
            });
			
        });
    });
})
(jQuery);
