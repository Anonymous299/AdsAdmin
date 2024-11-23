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
    <title>Adwords - Campaigns</title>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Campaigns</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ad-groups.php"><i class="fas fa-user"></i><span>Ad Groups</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ads.php"><i class="fas fa-table"></i><span>Ads</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4" style="text-align: left;">The Term Guy - Campaigns</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Enabled</p>
                        </div>
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>'
                                    <?php Helpers\generateDateFilter(__FILE__) ?>
                                '</div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                        <div class="btn-group" role="group"></div>'
                                        <?php Helpers\generateDateFilterButtons(__FILE__) ?>
                                    '</div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Conversions</th>
                                            <th>Clicks</th>
                                            <th>Impressions</th>
                                            <th>CTR</th>
                                            <th>Avg CPC</th>
                                            <th>Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        Helpers\displayChosenDateFilter();
                                        
                                        // Iterates over all rows in all messages and prints the requested field values for
                                        // the campaign in each row.
                                        $stream = getCampaignData($_SESSION["start"], $_SESSION["end"], $_SESSION["range"]);
                                        foreach ($stream->iterateAllElements() as $googleAdsRow) {
                                            $urlArray["campaignId"] = $googleAdsRow->getCampaign()->getId();
                                            $urlArray["campaignName"] = $googleAdsRow->getCampaign()->getName();
                                            echo '<tr><td><a href="'. Helpers\generateUrlWithDate('ad-groups.php', $urlArray, $_SESSION["startDate"], $_SESSION["endDate"], $_SESSION["range"]) .'">' . $googleAdsRow->getCampaign()->getName() .'</a></td>'
                                            . '<td>' . $googleAdsRow->getMetrics()->getConversions() . '</td>'
                                            . '<td>' . $googleAdsRow->getMetrics()->getClicks() . '</td>'
                                            . '<td>' . $googleAdsRow->getMetrics()->getImpressions() . '</td>'
                                            . '<td>' . $googleAdsRow->getMetrics()->getCtr(). '%</td>'
                                            . '<td>' . $googleAdsRow->getMetrics()->getCostPerConversion() . '</td>'
                                            . '<td>' . $googleAdsRow->getMetrics()->getAverageCost() . '</td></tr>';
                                        }   
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
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