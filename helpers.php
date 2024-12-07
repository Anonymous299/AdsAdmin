<?php 
namespace AdsAdmin\Helpers;

function displayChosenDateFilter(){
    session_start();

    if($_SESSION["range"] != null){
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
    elseif($_SESSION["start"] != null && $_SESSION["end"] != null){
        echo $_SESSION["start"] . ' to ' . $_SESSION["end"];
    }
    elseif($_SESSION["start"] != null){
        echo 'start date: ' . $_SESSION["start"];
    }
    elseif($_SESSION["end"] != null){
        echo 'end date: ' . $_SESSION["end"];
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
    echo '<form action="' .basename($fileName).'" method="GET"><span><span>Date Range</span><input class="form-control" name="start" type="date" value='. $_SESSION['start'] .' style="width: 200px;">to<input class="form-control" name="end" type="date" value='. $_SESSION['end'] .' style="width: 200px;"></span><input class="btn btn-primary" type="submit" value="Apply" style="text-align: right;"></form>';
}

function getProtocol(){
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
}

function getBaseUrl(){
    
    $baseUrl = sprintf(
        "%s://%s%s",
        getProtocol(),
        $_SERVER['HTTP_HOST'],
        rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\')
    );
    return $baseUrl;
}

function getWeekAgoStartDate($previous){
    $subtraction_factor = $previous ? 2*7*86400 : 7*86400;
    $week_ago= time() - $subtraction_factor;
    return gmdate("Y-m-d", $week_ago);
}

function getStartOfMonthDate($previous){
    $firstOfMonth = date('Y-m-01');
    if(!$previous){
        return $firstOfMonth;
    }
    $firstOfLastMonth = new DateTime("first day of last month");
    return $firstOfLastMonth->format('Y-m-d');
}

function getLast30StartDate($previous){
    $subtraction_factor = $previous ? 2*30*86400 : 30*86400;
    $last30 = time() - $subtraction_factor;
    return gmdate("Y-m-d", $last30);
}

function getStartAndEndDate($startDate, $endDate, $range, $previous){
    
    if($startDate == null && $endDate == null){
        if($range == null || $range == 0){
            $out["startDate"] = getWeekAgoStartDate($previous);
            if($previous){
                $out["endDate"] = getWeekAgoStartDate(False);
            }
        }
        else if($range == 1){
            $out["startDate"] = getStartOfMonthDate($previous);
            if($previous){
                $out["endDate"] = getStartOfMonthDate(False);
            }
        }
        else{
            $out["startDate"] = getLast30StartDate($previous);
            if($previous){
                $out["endDate"] = getLast30StartDate(False);
            }
        }
        
        if(!$previous){
        $out["endDate"] = gmdate("Y-m-d", time());
        }
    }
    else{
        if($startDate != null && $previous == True){
            $startTime = strtotime($startDate);
            $endTime = $endDate != null ? strtotime($endDate) : time();
            $diff = $endTime - $startTime;
            $prevStartTime = $startTime - $diff;
            $endDate = $startDate;
            $startDate = gmdate("Y-m-d", $prevStartTime);
        }

        $out["startDate"] = $startDate;
        $out["endDate"] = $endDate;
    }
    return $out;
}

?>