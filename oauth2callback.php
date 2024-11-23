<?php 
require_once __DIR__.'/vendor/autoload.php';
require_once 'database_test.php';

use AdsAdmin\DatabaseHelpers;

session_start();

$client = new Google\Client();

// Required, call the setAuthConfig function to load authorization credentials from
// client_secret.json file.
$client->setAuthConfigFile('web_creds.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF']);

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

  
  // // Space-separated string of granted scopes if it exists, otherwise null.
  // $granted_scopes = $client->getOAuth2Service()->getGrantedScope();

  // // Determine which scopes user granted and build a dictionary
  // $granted_scopes_dict = [
  //   'Ads' => str_contains($granted_scopes, $google_ads_scope)
  // ];
  // $_SESSION['granted_scopes_dict'] = $granted_scopes_dict;
  if($result == True){
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST']. '/AdsAdmin' . '/';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  }
}

// An error response e.g. error=access_denied
if (isset($_GET['error']))
{
  echo "Error: ". $_GET['error'];
}

?>