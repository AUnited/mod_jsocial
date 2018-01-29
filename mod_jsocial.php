<?php
# @version		$version 0.1 Amvis United Company Limited  $
# @copyright	Copyright (C) 2018 AUnited Co Ltd. All rights reserved.
# @license		MIT, see LICENSE.php
# Updated		29th January 2018
#
# Site: http://aunited.ru
# Email: info@aunited.ru

// no direct access
defined('_JEXEC') or die ('Restricted Access');
require_once ('assests/functions.php');

$module = JModuleHelper::getModule('mod_jsocial');
$moduleParams = new JRegistry($module->params);
$options['width']   =   $moduleParams->get('width', '100%');
$options['height']   =   $moduleParams->get('height', '100%');
$vkid   =   $moduleParams->get('vkid', '');
$okid   =   $moduleParams->get('okid', '');
$fbid   =   $moduleParams->get('fbid', '');
$tid   =   $moduleParams->get('tid', '');
$fbtext   =   $moduleParams->get('fbtext', 'Facebook');
$tabsheight=0;
$bodywidth  =   $options['width'];
$bodyheight =   $options['height'] - $tabsheight;

echo '
    <script type="application/javascript">'.'assests/mootabs.js'.'</script>
    <ul id = "tabs">';
if($vkid)   { echo '<li id = "VkM">VK.com</li>';}
if($okid)   { echo '<li id = "OkM">OK.ru</li>';}
if($fbid)   { echo '<li id = "FbM">Facebook</li>';}
if($tid)    { echo '<li id = "TwM">Twitter</li>';}
echo' </ul>';

#and here are our content divs
if($vkid)   { echo '<div id = "contentoneM" class = "hiddenM">'.vkinit().vkid($vkid, $bodywidth, $bodyheight).'</div>';}
if($okid)   { echo '<div id = "contenttwoM" class = "hiddenM">'.okid($okid, $bodywidth, $bodyheight).'</div>';}
if($fbid)   { echo '<div id = "contentthreeM" class = "hiddenM">'.fbinit().fbid($fbid,$fbtext, $bodywidth, $bodyheight).'</div>';}
if($tid)    { echo '<div id = "contentfourM" class = "hiddenM">'.tinit().tid($fbid, $bodywidth, $bodyheight).'</div>';}

