<?php

//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

//include model file
require_once (dirname(__FILE__).DS.'model/authModel.php');

//include application file
require_once (dirname(__FILE__).DS.'app/bootstrap.php');

//include template
require JModuleHelper::getLayoutPath('gijbook', $params->get('layout', 'default'));

