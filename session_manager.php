<?php 
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
}

if($_GET["end"]!=null){
    $_SESSION["end"] = $_GET["end"];
}

if($_GET["range"]!=null){
    $_SESSION["range"] = $_GET["range"];
}
?>