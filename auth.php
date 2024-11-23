<?php 


require_once __DIR__.'/vendor/autoload.php';
require 'database_test.php';

use AdsAdmin\DatabaseHelpers;

// Check if refresh token present
if (!DatabaseHelpers\isKeyValueSet('google_ads_php.ini', 'OAUTH2', 'refreshToken'))
{
    // Redirect users to outh2call.php which redirects users to Google OAuth 2.0
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] .'/AdsAdmin'. '/oauth2callback.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
?>
