<?php 
require_once __DIR__.'/vendor/autoload.php';
require_once 'database_test.php';
require_once 'helpers.php';

use AdsAdmin\DatabaseHelpers;
use AdsAdmin\Helpers;

session_start();

$client = new Google\Client();

// Required, call the setAuthConfig function to load authorization credentials from
// client_secret.json file.
$client->setAuthConfigFile('web_creds.json');
$client->setRedirectUri(Helpers\getProtocol() . '://' . $_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF']);

$google_ads_scope = 'https://www.googleapis.com/auth/adwords'; // Full access scope for Google Ads API

// Required, to set the scope value, call the addScope function.
$client->addScope([
     $google_ads_scope 
]);

// Enable incremental authorization. Recommended as a best practice.
$client->setIncludeGrantedScopes(true);

// Recommended, offline access will give you both an access and refresh token so that
// your app can refresh the access token without user interaction.
$client->setAccessType("offline");

// Generate a URL for authorization as it doesn't contain code and error
if (!isset($_GET['code']) && !isset($_GET['error']))
{
  // Generate and set state value
  $state = bin2hex(random_bytes(16));
  $client->setState($state);
  $_SESSION['state'] = $state;

  // Generate a url that asks permissions.
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
}

// User authorized the request and authorization code is returned to exchange access and
// refresh tokens.
if (isset($_GET['code']))
{
  // Check the state value
  if (!isset($_GET['state']) || $_GET['state'] !== $_SESSION['state']) {
    die('State mismatch. Possible CSRF attack.');
  }

  // Get access and refresh tokens (if access_type is offline)
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

  /** Save refresh token to the ini file. */
  if(empty($client->getRefreshToken())){
    die("Error: Could not fetch refresh token. Input it manually, or create new credentials");
  }
  $result = DatabaseHelpers\updateIniFile('google_ads_php.ini', 'OAUTH2', 'refreshToken', $client->getRefreshToken());

  if($result == True){
  $redirect_uri = Helpers\getBaseUrl();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  }
  else{
    printf(
      'Refresh token could not be saved. Please set the refreshToken attribute in google_ads_php.ini to the following: "%s".%s
      Warning: Once this window is closed, you will not be able to get another refresh token. Please save this refresh token securely.%s',
      $client->getRefreshToken(),
      PHP_EOL,
      PHP_EOL
  );
  }
}

// An error response e.g. error=access_denied
if (isset($_GET['error']))
{
  echo "Error: ". $_GET['error'];
}

?>