<?php
    require_once __DIR__.'/vendor/autoload.php';
    require_once 'ads_api.php';
    require_once 'helpers.php';

    use AdsAdmin\Helpers;

    $newHeadlines = [];
    $newDescriptions = [];

    $path1 = "";
    $path2 = "";
    $finalUrl = "";

    foreach($_GET as $key => $value){
        if(str_contains($key, 'headline') && !empty($value)){
            $newHeadlines[] = $value;
        }
        else if(str_contains($key, 'description') && !empty($value)){
            $newDescriptions[] = $value;
        }
        else if(str_contains($key, 'path1')){
            $path1 = $value;
        }
        else if(str_contains($key, 'path2')){
            $path2 = $value;
        }
        else if(str_contains($key, 'finalUrl')){
            $finalUrl = $value;
        }
    }

    $result = updateAd($_GET["adId"], $newHeadlines, $newDescriptions, $finalUrl, $path1, $path2);


    $redirect_uri =  Helpers\getBaseUrl() . '/ads.php';
    if($result){
        $redirect_uri = $redirect_uri . '?error=' . base64_encode($result);
    }
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
?>