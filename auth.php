<?php 


require_once __DIR__.'/vendor/autoload.php';
require 'database_test.php';

use AdsAdmin\DatabaseHelpers;

session_start();

$client = new Google\Client();
$client->setAuthConfig('web_creds.json');

// User granted permission as an access token is in the session.
if (isset($_SESSION['access_token']) && $_SESSION['access_token'])
{
    $refresh_token = '1//04HXYkuiKuW2QCgYIARAAGAQSNwF-L9IrAIFsOpK_NouwrMaqGqwP9iFFFT5UPYW673LnkTiUPwGzNYHdlQ8Dz9fdZgYiuWj7S3c';
    // DatabaseHelpers\insertOrUpdateRefreshToken($refresh_token, $servername, $username, $password, $dbname);
DatabaseHelpers\updateIniFile('google_ads_php.ini', 'OAUTH2', 'refreshToken', $refresh_token);

    // $expiresIn = $_SESSION['access_token']['expires_in']; // Seconds until expiry
    // $issueTime = $_SESSION['access_token']['created']; // Token creation time

    // // Calculate the expiry time as a Unix timestamp
    // $expiryTimestamp = $issueTime + $expiresIn - 30;

    //     //Check if access token has expired, and refresh if so
    //     if(time() >= $expiryTimestamp){
    //         DatabaseHelpers\getRefreshToken($servername, $username, $password, $dbname);

 

    //         //Check if database has refresh token. If not, go call oauth2callback.php
    //         if($refresh_token == ""){
    //             $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] .'/AdsAdmin'. '/oauth2callback.php';
    //             header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
    //         }
    //         else{
    //             // Manually set the refresh token
    //             $client->refreshToken($refresh_token);

    //             // Get the new access token
    //             $newToken = $client->getAccessToken();

    //             $_SESSION['access_token'] = $newToken;
    //         }
    //     }

        
    //     session_destroy();
}
else{
//     // echo 'https://' . $_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF'];

    // Redirect users to outh2call.php which redirects users to Google OAuth 2.0
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] .'/AdsAdmin'. '/oauth2callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
// // echo 'http://' . $_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF'];
}
?>
