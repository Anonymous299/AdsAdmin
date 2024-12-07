<?php 
require_once 'helpers.php';
use AdsAdmin\Helpers;

session_start();

if($_GET["adGroupId"]!=null){
    $_SESSION["adGroupId"] = base64_decode($_GET["adGroupId"]);
}

if($_GET["adGroupName"]!=null){
    $_SESSION["adGroupName"] = base64_decode($_GET["adGroupName"]);
}

if($_GET["keywords"]!=null){
    $_SESSION["keywords"] = base64_decode($_GET["keywords"]);
}

if($_GET["campaignId"]!=null){
    $_SESSION["campaignId"] = base64_decode($_GET["campaignId"]);
}

if($_GET["campaignName"]!=null){
    $_SESSION["campaignName"] = base64_decode($_GET["campaignName"]);
}

if($_GET["start"]!=null){
    $_SESSION["start"] = $_GET["start"];
    $_SESSION["range"] = null;
}

if($_GET["end"]!=null){
    $_SESSION["end"] = $_GET["end"];
    $_SESSION["range"] = null;
}

if($_GET["range"]!=null){
    $dates = Helpers\getStartAndEndDate(null, null, $_GET["range"], False);
    $_SESSION["range"] = $_GET["range"];
    $_SESSION["start"] = $dates["startDate"];
    $_SESSION["end"] = $dates["endDate"];
}
?>