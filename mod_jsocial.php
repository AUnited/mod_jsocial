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
$tabengine   =   $moduleParams->get('tabengine', 1);
$fbtitle   =   $moduleParams->get('fbtitle', 'Facebook');
$tabsheight=0;
$bodywidth  =   $options['width'];
$bodyheight =   $options['height'] - $tabsheight;
if($tabengine){
 echo '<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
        $( "#tabs" ).tabs();
    } );
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>';
    $count=0;
    if ($vkid) {echo '<li><a href="#tabs-1"><img src="modules/mod_jsocial/assests/vk.svg" width="24" height="24"/></a></li>'; }
    if ($okid) {echo '<li><a href="#tabs-2"><img src="modules/mod_jsocial/assests/ok.svg" width="24" height="24"/></a></li>';}
    if ($fbid) {echo '<li><a href="#tabs-3"><img src="modules/mod_jsocial/assests/fb.svg" width="24" height="24"/></a></li>';}
    if ($tid)  {echo '<li><a href="#tabs-4"><img src="modules/mod_jsocial/assests/twitter.svg" width="24" height="24"/></a></li>';}

    echo'</ul>';
    if ($vkid) {echo '<div id="tabs-1">' . vkinit() . vkid($vkid, $bodywidth, $bodyheight) . '</div>'; }
    if ($okid) {echo '<div id="tabs-2">' . okid($okid, $bodywidth, $bodyheight) . '</div>'; }
    if ($fbid) {echo '<div id="tabs-3">' . fbinit() . fbid($fbid, $fbtitle, $bodywidth, $bodyheight) . '</div>'; }
    if ($tid) {echo '<div id="tabs-4">' . tinit() . tid($fbid, $bodywidth, $bodyheight) . '</div>'; }
echo '</div>';
} else {
    echo '<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.6.0/mootools.min.js"></script>
    <script type="application/javascript" src="modules/mod_jsocial/assests/mootabs.js"></script>
    <ul id = "tabs">';
    if ($vkid) {
        echo '<li id = "VkM"><img src="modules/mod_jsocial/assests/vk.svg" width="24" height="24"/></li>';
    }
    if ($okid) {
        echo '<li id = "OkM"><img src="modules/mod_jsocial/assests/ok.svg" width="24" height="24"/></li>';
    }
    if ($fbid) {
        echo '<li id = "FbM"><img src="modules/mod_jsocial/assests/fb.svg" width="24" height="24"/></li>';
    }
    if ($tid) {
        echo '<li id = "TwM"><img src="modules/mod_jsocial/assests/twitter.svg" width="24" height="24"/></li>';
    }
    echo ' </ul>';

#and here are our content divs
    if ($vkid) {
        echo '<div id = "contentoneM" class = "hiddenM">' . vkinit() . vkid($vkid, $bodywidth, $bodyheight) . '</div>';
    }
    if ($okid) {
        echo '<div id = "contenttwoM" class = "hiddenM">' . okid($okid, $bodywidth, $bodyheight) . '</div>';
    }
    if ($fbid) {
        echo '<div id = "contentthreeM" class = "hiddenM">' . fbinit() . fbid($fbid, $fbtitle, $bodywidth, $bodyheight) . '</div>';
    }
    if ($tid) {
        echo '<div id = "contentfourM" class = "hiddenM">' . tinit() . tid($fbid, $bodywidth, $bodyheight) . '</div>';
    }
}


