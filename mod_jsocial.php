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

$module = JModuleHelper::getModule('mod_jsocial');
$moduleParams = new JRegistry($module->params);
$options['width']   =   $moduleParams->get('width', '100%');


echo 'It works!';
