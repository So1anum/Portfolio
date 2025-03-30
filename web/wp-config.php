<?php

/**
 * Do not edit this file. Edit the config files found in the config/ dir instead.
 * This file is required in the root directory so WordPress can find it.
 * WP is hardcoded to look in its own directory or one directory up for wp-config.php.
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/config/application.php';
require_once ABSPATH . 'wp-settings.php';

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
@ini_set('display_errors', 0);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', false);
