<?php 
namespace AdsAdmin\Helpers;

function displayChosenDateFilter(){
    session_start();

    if($_SESSION["start"] != null && $_SESSION["end"] != null){
        echo $_SESSION["start"] . ' to ' . $_SESSION["end"];
    }
    elseif($_SESSION["start"] != null){
        echo 'start date: ' . $_SESSION["start"];
    }
    elseif($_SESSION["end"] != null){
        echo 'end date: ' . $_SESSION["end"];
    }
    else{
        if($_SESSION["range"] == null || $_SESSION["range"] == 0){
            echo "Filter: Week";
            }
            else if($_SESSION["range"] == 1){
                echo "Filter: Month to Date";
            }
            else{
                echo "Filter: Last 30";
            }
    }
}

function generateUrlWithDate($baseUrl, $items, $startDate, $endDate, $range){
    $generatedUrl = $baseUrl;
    $count = 0;
    foreach($items as $key => $value){
        if($count == 0){
            $generatedUrl = $generatedUrl . '?' . $key . '=' . base64_encode($value);
        }
        else{
            $generatedUrl = $generatedUrl . '&' . $key . '=' . base64_encode($value);
        }
        $count = $count + 1;
    }
    if($startDate != null){
        $generatedUrl = $generatedUrl . '&start=' . $startDate;
        
    }
    if($endDate != null){
        $generatedUrl = $generatedUrl . '&end=' . $endDate;
        
    }
    if($range != null){
        $generatedUrl = $generatedUrl . '&range=' . $range;
        
    }
    return $generatedUrl;
}

function generateDateFilterButtons($fileName){
    echo ' <form action="' . basename($fileName) . '" method="GET"><div class="btn-group" role="group"><button class="btn btn-primary" name="range" value="0" type="submit">Week</button><button class="btn btn-primary" name="range" value="1" type="submit">Month to date</button><button class="btn btn-primary" name="range" value="2" type="submit">Last 30</button></div><label class="form-label"></label></form>';
}

function generateDateFilter($fileName){
    echo '<form action="' .basename($fileName).'" method="GET"><span><span>Date Range</span><input class="form-control" name="start" type="date" style="width: 200px;">to<input class="form-control" name="end" type="date" style="width: 200px;"></span><input class="btn btn-primary" type="submit" value="Apply" style="text-align: right;"></form>';
}

?>