<?php
/**
 * The Index Of Framework
 * User: kewin.cheng
 * Date: 2018/7/4
 *
 */

defined('__ROOTDIR__') or define('__ROOTDIR__', __DIR__ . '/../');

require_once __ROOTDIR__ . 'vendor/autoload.php';
require_once __ROOTDIR__ . 'Core/KK.php';

Core\Application::run();


