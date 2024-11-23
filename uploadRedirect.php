<?php
    require_once __DIR__.'/vendor/autoload.php';
    require_once 'ads_api.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $newHeadlines = [];
    $newDescriptions = [];

    foreach($_GET as $key => $value){
        if(str_contains($key, 'headline') && !empty($value)){
            $newHeadlines[] = $value;
        }
        else if(str_contains($key, 'description') && !empty($value)){
            $newDescriptions[] = $value;
        }
    }
    echo count($newDescriptions);

    updateAd($_GET["adId"], $newHeadlines, $newDescriptions);


    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] .'/AdsAdmin'. '/ads.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
?>