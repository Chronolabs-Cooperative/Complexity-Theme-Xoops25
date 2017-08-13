<?php
/**
 * Sexting Theme for XOOPS 2.5
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   	Chronolabs Cooperative (http://sourceforge.net/projects/chronolabs/
 * @license     	General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @author      	Simon Roberts (wishcraft) <wishcraft@users.sourceforge.net>
 * @subpackage  	theme
 * @description 	Sexting Theme for XOOPS 2.5
 * @version			1.0.3
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Themes/sexting
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Themes/sexting
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsThemes/sexting
 * @link			http://internetfounder.wordpress.com
 */


/**
 * Background Image Changer
 * 
 * @var integer milliseconds
*/
define("_COMPLEXITY_BCKGND_INTERVAL_MIN", 3900);
define("_COMPLEXITY_BCKGND_INTERVAL_MAX", 11700);
define("_COMPLEXITY_BCKGND_DURATION_MIN", 999);
define("_COMPLEXITY_BCKGND_DURATION_MAX", 2345);
define("_COMPLEXITY_BCKGND_IMAGES_MAX", 11);
/**
 * 
 * @var string url
 */
define("_COMPLEXITY_URL_FACEBOOK", "http://facebook.com/Chronolabs");
define("_COMPLEXITY_URL_TWITTER", "http://facebook.com/Cipherhouse");
define("_COMPLEXITY_URL_YOUTUBE", "https://www.youtube.com/channel/UCEwGdNRZVkCsunU-hobg98A");
define("_COMPLEXITY_URL_RSS", XOOPS_URL . '/backend.php');

/**
 * Gradient Alpha
 * 
 * CSS Default: html, table, #content table .odd
*/
define('_COMPLEXITY_GRADIENT_ALPHA_ELEMENTS', 'html, table, #content table .odd');
define('_COMPLEXITY_GRADIENT_ALPHA_RED_LOW', 87);
define('_COMPLEXITY_GRADIENT_ALPHA_RED_HIGH', 120);
define('_COMPLEXITY_GRADIENT_ALPHA_GREEN_LOW', 10);
define('_COMPLEXITY_GRADIENT_ALPHA_GREEN_HIGH', 167);
define('_COMPLEXITY_GRADIENT_ALPHA_BLUE_LOW', 56);
define('_COMPLEXITY_GRADIENT_ALPHA_BLUE_HIGH', 198);
define('_COMPLEXITY_GRADIENT_ALPHA_HEATONE_LOW', 10);
define('_COMPLEXITY_GRADIENT_ALPHA_HEATONE_HIGH', 78);
define('_COMPLEXITY_GRADIENT_ALPHA_HEATOTHER_LOW', 45);
define('_COMPLEXITY_GRADIENT_ALPHA_HEATOTHER_HIGH', 89);
define('_COMPLEXITY_GRADIENT_ALPHA_OPACITY_LOW', 1);
define('_COMPLEXITY_GRADIENT_ALPHA_OPACITY_HIGH', 100);


/**
 * Gradient Foxtrot
 * 
 * CSS Default: #box, #headmenu, #boxed, .odd
 */
define('_COMPLEXITY_GRADIENT_FOXTROT_ELEMENTS', '#box, #headmenu, #boxed, .odd, #preboxed');
define('_COMPLEXITY_GRADIENT_FOXTROT_RED_LOW', 87);
define('_COMPLEXITY_GRADIENT_FOXTROT_RED_HIGH', 230);
define('_COMPLEXITY_GRADIENT_FOXTROT_GREEN_LOW', 89);
define('_COMPLEXITY_GRADIENT_FOXTROT_GREEN_HIGH', 237);
define('_COMPLEXITY_GRADIENT_FOXTROT_BLUE_LOW', 156);
define('_COMPLEXITY_GRADIENT_FOXTROT_BLUE_HIGH', 145);
define('_COMPLEXITY_GRADIENT_FOXTROT_HEATONE_LOW', 10);
define('_COMPLEXITY_GRADIENT_FOXTROT_HEATONE_HIGH', 78);
define('_COMPLEXITY_GRADIENT_FOXTROT_HEATOTHER_LOW', 45);
define('_COMPLEXITY_GRADIENT_FOXTROT_HEATOTHER_HIGH', 89);
define('_COMPLEXITY_GRADIENT_FOXTROT_OPACITY_LOW', 1);
define('_COMPLEXITY_GRADIENT_FOXTROT_OPACITY_HIGH', 100);


/**
 * Gradient Delta
 * 
 * CSS Default: #mainbody, #content table .foot
 */
define('_COMPLEXITY_GRADIENT_DELTA_ELEMENTS', '#mainbody, #content table .foot');
define('_COMPLEXITY_GRADIENT_DELTA_RED_LOW', 87);
define('_COMPLEXITY_GRADIENT_DELTA_RED_HIGH', 230);
define('_COMPLEXITY_GRADIENT_DELTA_GREEN_LOW', 10);
define('_COMPLEXITY_GRADIENT_DELTA_GREEN_HIGH', 67);
define('_COMPLEXITY_GRADIENT_DELTA_BLUE_LOW', 56);
define('_COMPLEXITY_GRADIENT_DELTA_BLUE_HIGH', 166);
define('_COMPLEXITY_GRADIENT_DELTA_HEATONE_LOW', 10);
define('_COMPLEXITY_GRADIENT_DELTA_HEATONE_HIGH', 78);
define('_COMPLEXITY_GRADIENT_DELTA_HEATOTHER_LOW', 45);
define('_COMPLEXITY_GRADIENT_DELTA_HEATOTHER_HIGH', 89);
define('_COMPLEXITY_GRADIENT_DELTA_OPACITY_LOW', 1);
define('_COMPLEXITY_GRADIENT_DELTA_OPACITY_HIGH', 100);


/**
 * Gradient Gamma
 * 
 * CSS Default: body, #content table .even
 */
define('_COMPLEXITY_GRADIENT_GAMMA_ELEMENTS', 'html, #preshade, .preshade, #content table .even');
define('_COMPLEXITY_GRADIENT_GAMMA_RED_LOW', 87);
define('_COMPLEXITY_GRADIENT_GAMMA_RED_HIGH', 98);
define('_COMPLEXITY_GRADIENT_GAMMA_GREEN_LOW', 10);
define('_COMPLEXITY_GRADIENT_GAMMA_GREEN_HIGH', 67);
define('_COMPLEXITY_GRADIENT_GAMMA_BLUE_LOW', 56);
define('_COMPLEXITY_GRADIENT_GAMMA_BLUE_HIGH', 166);
define('_COMPLEXITY_GRADIENT_GAMMA_HEATONE_LOW', 10);
define('_COMPLEXITY_GRADIENT_GAMMA_HEATONE_HIGH', 78);
define('_COMPLEXITY_GRADIENT_GAMMA_HEATOTHER_LOW', 45);
define('_COMPLEXITY_GRADIENT_GAMMA_HEATOTHER_HIGH', 89);
define('_COMPLEXITY_GRADIENT_GAMMA_OPACITY_LOW', 1);
define('_COMPLEXITY_GRADIENT_GAMMA_OPACITY_HIGH', 100);



/**
 * Gradient Omega
 * 
 * CSS Default: #footer, .footer, #content table .head
 */
define('_COMPLEXITY_GRADIENT_OMEGA_ELEMENTS', '#footer, .footer, #content table .head');
define('_COMPLEXITY_GRADIENT_OMEGA_RED_LOW', 17);
define('_COMPLEXITY_GRADIENT_OMEGA_RED_HIGH', 30);
define('_COMPLEXITY_GRADIENT_OMEGA_GREEN_LOW', 10);
define('_COMPLEXITY_GRADIENT_OMEGA_GREEN_HIGH', 47);
define('_COMPLEXITY_GRADIENT_OMEGA_BLUE_LOW', 16);
define('_COMPLEXITY_GRADIENT_OMEGA_BLUE_HIGH', 66);
define('_COMPLEXITY_GRADIENT_OMEGA_HEATONE_LOW', 10);
define('_COMPLEXITY_GRADIENT_OMEGA_HEATONE_HIGH', 78);
define('_COMPLEXITY_GRADIENT_OMEGA_HEATOTHER_LOW', 45);
define('_COMPLEXITY_GRADIENT_OMEGA_HEATOTHER_HIGH', 89);
define('_COMPLEXITY_GRADIENT_OMEGA_OPACITY_LOW', 1);
define('_COMPLEXITY_GRADIENT_OMEGA_OPACITY_HIGH', 100);
