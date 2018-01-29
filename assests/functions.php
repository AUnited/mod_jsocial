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

function NumToTF($num)
{
if ($num == 1){return "true";} else {return "false";}
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

function fbid($fbid, $fbtext, $width, $height)
{
    $module = JModuleHelper::getModule('mod_jsocial');
    $moduleParams = new JRegistry($module->params);
    $tabs   =   $moduleParams->get('tabs', 'timeline');
    $hide_cover   =   $moduleParams->get('hide_cover', 0);
    $show_facepile   =   $moduleParams->get('show_facepile', 1);
    $hide_cta    =   $moduleParams->get('hide_cta', 0);
    $small_header   =   $moduleParams->get('small_header', 0);
    $adapt_container_width  =   $moduleParams->get('adapt_container_width', 0);
    return '<div class="fb-page" data-href="'.$fbid.'" data-tabs="'.$tabs.'" data-width="'.$width.'" data-height="'.$height.'" data-hide-cta="'.numToTF($hide_cta).'" data-small-header="'.NumToTF($small_header).'" data-adapt-container-width="'.NumToTF($adapt_container_width).'" data-hide-cover="'.NumToTF($hide_cover).'" data-show-facepile="'.NumToTF($show_facepile).'"><blockquote cite="'.$fbid.'" class="fb-xfbml-parse-ignore"><a href="'.$fbid.'">'.$fbtext.'</a></blockquote></div>';
}

function okid($okid, $width, $height)
{
return '<div id="ok_group_widget"></div>
<script>
!function (d, id, did, st) {
  var js = d.createElement("script");
  js.src = "https://connect.ok.ru/connect.js";
  js.onload = js.onreadystatechange = function () {
  if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete") {
    if (!this.executed) {
      this.executed = true;
      setTimeout(function () {
        OK.CONNECT.insertGroupWidget(id,did,st);
      }, 0);
    }
  }};
  d.documentElement.appendChild(js);
}(document,"ok_group_widget","'.$okid.'",\'{"width":'.$width.',"height":'.$height.'}\');
</script>';


}

function tid($tid, $width, $height)
{
    $module = JModuleHelper::getModule('mod_jsocial');
    $moduleParams = new JRegistry($module->params);
}