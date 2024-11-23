<?php
require_once 'ads_api.php';
require_once 'session_manager.php';
require_once 'helpers.php';

use AdsAdmin\Helpers;
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Adwords Ad Groups</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <picture><img src="assets/img/128x128.png" width="50"></picture>
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 14px;">Adwords Admin</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Campaigns</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ad-groups.php"><i class="fas fa-user"></i><span>Ad Groups</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="ads.php"><i class="fas fa-table"></i><span>Ads</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4"><?php echo $_SESSION["adGroupName"]?> - Ads</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Enabled</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                                    <?php Helpers\generateDateFilter(__FILE__) ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                        <div class="btn-group" role="group"></div>
                                        <?php Helpers\generateDateFilterButtons(__FILE__) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>Keywords:&nbsp; <?php echo $_SESSION['keywords']?></p>
                                <br>
                                <?php
                                  Helpers\displayChosenDateFilter()
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-4 py-xl-5">
                    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                        <?php 
                        session_start();

                        if($_GET['error']){
                            echo base64_decode($_GET['error']);
                        }

                        $adCount = 0;
                        //Get a list of ads to iterate over
                        $stream = getAdsData($_SESSION["start"], $_SESSION["end"], $_SESSION["range"], $_SESSION["adGroupId"]);
                        foreach ($stream->iterateAllElements() as $googleAdsRow) {
                            echo '<div class="col">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Clicks</td>
                                                    <td>' . $googleAdsRow->getMetrics()->getClicks() . '</td>
                                                </tr>
                                                <tr>
                                                    <td>CTR</td>
                                                    <td>' . $googleAdsRow->getMetrics()->getCtr() * 100 . '%</td>
                                                </tr>
                                                <tr>
                                                    <td>Cost/Click</td>
                                                    <td>'. $googleAdsRow->getMetrics()->getAverageCpc() . '</td>
                                                </tr>
                                                <tr>
                                                    <td>Conversions</td>
                                                    <td>' . $googleAdsRow->getMetrics()->getConversions()  . '</td>
                                                </tr>
                                                <tr>
                                                    <td>Conversion Rate</td>
                                                    <td>' . $googleAdsRow->getMetrics()->getConversionsFromInteractionsRate() * 100 . '%</td>
                                                </tr>
                                                <tr>
                                                    <td>Cost/Conversion</td>
                                                    <td>$' . $googleAdsRow->getMetrics()->getCostPerConversion() . '</td>
                                                </tr>
                                                <tr>
                                                    <td>Impressions</td>
                                                    <td>' . $googleAdsRow->getMetrics()->getImpressions() . '</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <form action="uploadRedirect.php?test=12345" method=GET id=' . $adCount .'>
                                    <input type="hidden" id="adId" name="adId" value='. $googleAdsRow->getAdGroupAd()->getAd()->getId() . '>
                                    <h1>Headings</h1>';
                                     
                                    $headlines = $googleAdsRow->getAdGroupAd()->getAd()->getResponsiveSearchAd()->getHeadlines();
                                    $headlineCount = 0;
                                    $headlineMax = 15;
                                    foreach($headlines as $headline){
                                        echo  '<input type="text" id="headline' . $adCount . $headlineCount . '" name="headline' . $adCount . $headlineCount . '" style="margin: 4px;border-radius: 3px;border-width: 1px;border-style: solid;padding: 0px;" autocomplete=off value="' . $headline->getText() . '">';
                                        $headlineCount = $headlineCount + 1;
                                    }
                                    // Create empty fields in case we want to add more headlines to the ad
                                    while($headlineCount < $headlineMax){
                                        echo  '<input type="text" id="headline' . $adCount . $headlineCount . '" name="headline' . $adCount . $headlineCount . '" style="margin: 4px;border-radius: 3px;border-width: 1px;border-style: solid;padding: 0px;" autocomplete=off>';
                                        $headlineCount = $headlineCount + 1;
                                    }
                                    
                                    echo '<h1>Descriptions</h1>';

                                    $descriptionCount = 0;
                                    $descriptions = $googleAdsRow->getAdGroupAd()->getAd()->getResponsiveSearchAd()->getDescriptions();
                                    $descriptionMax = 4;
                                    foreach($descriptions as $description){
                                        echo '<textarea autocomplete=off id="description' . $adCount . $descriptionCount . '" name="description' . $adCount . $descriptionCount . '">' . $description->getText() . '</textarea>';
                                        $descriptionCount = $descriptionCount + 1;
                                    }
                                    // Create empty fields in case we want to add more descriptions to the ad
                                    while($descriptionCount < $descriptionMax){
                                        echo '<textarea autocomplete=off></textarea>';
                                        $descriptionCount = $descriptionCount + 1;
                                    }
                                    
                                    echo '
                                    <h1>Landing Page</h1>';
                                    
                                    $finalUrls = $googleAdsRow->getAdGroupAd()->getAd()->getFinalUrls();
                                    $finalUrl = $finalUrls[0];
                                        echo '<input type="text" id="finalUrl' . $adCount . '" name="finalUrl" style="margin: 4px;border-radius: 3px;border-width: 1px;border-style: solid;padding: 0px;" autocomplete=off value="' . $finalUrl . '">';
                                    
                                

                                    echo '<h1>Display Path</h1>';

                                    $path1 = $googleAdsRow->getAdGroupAd()->getAd()->getResponsiveSearchAd()->getPath1();
                                    $path2 = $googleAdsRow->getAdGroupAd()->getAd()->getResponsiveSearchAd()->getPath2();
                                   
                                   
                                       echo '<p style="font-size: 14px;">' . $finalUrl ;
                                       echo '<input type="text" id="path1' . base64_encode($adCount) . '" name="path1' . base64_encode($adCount) . '" style="margin: 4px;border-radius: 3px;border-width: 1px;border-style: solid;padding: 0px;" autocomplete=off value="' . $path1 . '">';
                                       echo '/';
                                       echo '<input type="text" id="path2' . base64_encode($adCount) . '" name="path2' . base64_encode($adCount) . '" style="margin: 4px;border-radius: 3px;border-width: 1px;border-style: solid;padding: 0px;" autocomplete=off value="' . $path2 . '">';
                                       echo '</p>'; 
                           
                                    
                                    
                                     echo '<button class="btn btn-primary" type="submit">Save</button>
                                </form>
                                    </div>
                            </div>
                        </div>';
                        $adCount = $adCount + 1;
                        }                 
                         ?>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © The Term Guy 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>