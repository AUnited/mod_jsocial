<?php
function ColorNormalise($color, $mode, $hash)
{

switch ($mode) {
    case 'up'    :
        mb_strtoupper($color);
        break;
    case 'down'  :
        mb_strtolower($color);
        break;
    default: break;
}

#color must contain #
if (!$hash) {str_replace('#','',$color);}

return $color;
}

function vkinit()
{
    return '<script type="text/javascript" src="//vk.com/js/api/openapi.js?152"></script>';
}

function fbinit()
{
    return'<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11\';
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>';
}

function tinit()
{

}

function vkid($vkid, $width, $height)
{
    $module = JModuleHelper::getModule('mod_jsocial');
    $moduleParams = new JRegistry($module->params);
    $mode   =   $moduleParams->get('vkmode', 3);
    $wide   =   $moduleParams->get('vkwide', 0);
    $nocover   =   $moduleParams->get('vknocover', 1);
    $bgcolor    =   $moduleParams->get('bgcolor', '#ffffff');
    $bgcolor    =   colorNormalise ($bgcolor,'up', 0);
    $textcolor  =   $moduleParams->get('textcolor', '#000000');
    $textcolor  =   colorNormalise ($textcolor,'up', 0);
    $btncolor   =   $moduleParams->get('btncolor', '#6181b8');
    $btncolor   =   colorNormalise ($btncolor,'up', 0);
    return '<div id="vk_groups"></div>
    <script type="text/javascript">
    VK.Widgets.Group("vk_groups", {mode: '.$mode.', wide: '.$wide.', no_cover: '.$nocover.', width: "'.$width.'", height: "'.$height.'", color1: \''.$bgcolor.'\', color2: \''.$textcolor.'\', color3: \''.$btncolor.'\'}, '.$vkid.');
    </script>';

}

function fbid($fbid, $width)
{
    return '<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="200" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>';
}

function tid($tid, $width)
{

}