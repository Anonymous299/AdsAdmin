<?php 
require_once __DIR__.'/vendor/autoload.php';

use Google\Ads\GoogleAds\Lib\V18\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V18\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\V18\GoogleAdsException;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\Lib\V18\GoogleAdsServerStreamDecorator;
use Google\Ads\GoogleAds\V18\Errors\GoogleAdsError;
use Google\Ads\GoogleAds\V18\Services\GoogleAdsRow;
use Google\Ads\GoogleAds\V18\Services\SearchGoogleAdsStreamRequest;
use Google\ApiCore\ApiException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Ads\GoogleAds\Util\V18\ResourceNames;
use Google\Ads\GoogleAds\Util\FieldMasks;
use Google\Ads\GoogleAds\V18\Common\AdTextAsset;
use Google\Ads\GoogleAds\V18\Common\ResponsiveSearchAdInfo;
use Google\Ads\GoogleAds\V18\Services\AdOperation;
use Google\Ads\GoogleAds\V18\Services\MutateAdsRequest;
use Google\Ads\GoogleAds\V18\Resources\Ad;


function getWeekAgoStartDate(){
    $week_ago= time() - 7*86400;
    return gmdate("Y-m-d", $week_ago);
}

function getStartOfMonthDate(){
    return date('Y-m-01');
}

function getLast30StartDate(){
    
    $last30 = time() - 30*86400;
    return gmdate("Y-m-d", $last30);
}

function getStartAndEndDate($startDate, $endDate, $range){
    
    if($startDate == null && $endDate == null){
        if($range == null || $range == 0){
            $out["startDate"] = getWeekAgoStartDate();
        }
        else if($range == 1){
            $out["startDate"] = getStartOfMonthDate();
        }
        else{
            $out["startDate"] = getLast30StartDate();
       
        }
        
        $out["endDate"] = gmdate("Y-m-d", time());

    }
    else{
        $out["startDate"] = $startDate;
        $out["endDate"] = $endDate;
    }
    return $out;
}

function getStreamFromQuery($query){
    $customerId = '6079650413';
    
    $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();
    $googleAdsClient = (new GoogleAdsClientBuilder())
    ->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->build();

    try {
        $googleAdsServiceClient = $googleAdsClient->getGoogleAdsServiceClient();
    
        // Issues a search stream request.
        /** @var GoogleAdsServerStreamDecorator $stream */
        $stream = $googleAdsServiceClient->searchStream(
            SearchGoogleAdsStreamRequest::build($customerId, $query)
        );
    
       return $stream;
    
    } catch (GoogleAdsException $googleAdsException) {
        printf(
            "Request with ID '%s' has failed.%sGoogle Ads failure details:%s",
            $googleAdsException->getRequestId(),
            PHP_EOL,
            PHP_EOL
        );
        foreach ($googleAdsException->getGoogleAdsFailure()->getErrors() as $error) {
            /** @var GoogleAdsError $error */
            printf(
                "\t%s: %s%s",
                $error->getErrorCode()->getErrorCode(),
                $error->getMessage(),
                PHP_EOL
            );
        }
        return null;
    } catch (ApiException $apiException) {
        printf(
            "ApiException was thrown with message '%s'.%s",
            $apiException->getMessage(),
            PHP_EOL
        );
        return null;
    }
}

function getKeywordData($adGroupId){
    
    
    $query = "SELECT ad_group_criterion.keyword.text FROM ad_group_criterion WHERE ad_group_criterion.type = 'KEYWORD' AND ad_group.id = " . $adGroupId;
     
    return getStreamFromQuery($query);
}

function getAdsData($startDate, $endDate, $range, $adGroupId){

    $dates = getStartAndEndDate($startDate, $endDate, $range);
    $startDate = $dates["startDate"];
    $endDate = $dates["endDate"];

   
    $query = "SELECT ad_group_ad.ad.id, metrics.clicks, metrics.ctr, metrics.average_cpc, metrics.conversions, metrics.conversions_from_interactions_rate, metrics.cost_per_conversion, metrics.impressions, ad_group_ad.ad.responsive_search_ad.headlines, ad_group_ad.ad.responsive_search_ad.descriptions, ad_group_ad.ad.final_urls, ad_group_ad.ad.responsive_search_ad.path1, ad_group_ad.ad.responsive_search_ad.path2 FROM ad_group_ad WHERE ad_group.id = " . $adGroupId . " AND segments.date BETWEEN " . ($startDate == null ? '\'1900-01-01\'' : '\'' . $startDate . '\'') . " AND " . ($endDate == null ? '\'2100-01-01\'' : '\'' . $endDate . '\'') . " AND ad_group_ad.status = 'ENABLED'";
   
    return getStreamFromQuery($query);
}

function getAdGroupData($startDate, $endDate, $range, $campaignId){
  
    $customerId = '6079650413';

    $dates = getStartAndEndDate($startDate, $endDate, $range);
    $startDate = $dates["startDate"];
    $endDate = $dates["endDate"];

    // Creates a query that retrieves all campaigns.
    $query = "SELECT ad_group.id, ad_group.name, metrics.ctr, metrics.clicks, metrics.conversions, metrics.impressions, metrics.cost_per_conversion, metrics.average_cpc FROM ad_group WHERE ad_group.campaign = 'customers/" . $customerId . "/campaigns/" . $campaignId . "' AND ad_group.status = 'ENABLED' AND segments.date BETWEEN " . ($startDate == null ? '\'1900-01-01\'' : '\'' . $startDate . '\'') . " AND " . ($endDate == null ? '\'2100-01-01\'' : '\'' . $endDate . '\'');
    
    return getStreamFromQuery($query);
}

function getCampaignData($startDate, $endDate, $range){
    

    $dates = getStartAndEndDate($startDate, $endDate, $range);
    $startDate = $dates["startDate"];
    $endDate = $dates["endDate"];

    // Creates a query that retrieves all campaigns.
    $query = "SELECT campaign.id, metrics.conversions, campaign.name, metrics.clicks, metrics.impressions, metrics.cost_per_conversion, metrics.average_cost, metrics.ctr FROM campaign WHERE segments.date BETWEEN " . ($startDate == null ? '\'1900-01-01\'' : '\'' . $startDate . '\'') . " AND " . ($endDate == null ? '\'2100-01-01\'' : '\'' . $endDate . '\'') . " AND campaign.status = 'ENABLED' ORDER BY campaign.start_date DESC";
    
    return getStreamFromQuery($query);
}

function updateAd($adId, $headlines, $descriptions){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //TODO replace with variable from configuration file
    $customerId = '6079650413';

    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();
    $googleAdsClient = (new GoogleAdsClientBuilder())
    ->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->build();

    try {

    // Create the new headlines
    $newHeadlines = [];

    foreach($headlines as $headline){
        $newHeadlines[] = (new AdTextAsset())->setText($headline);
    }

    $newDescriptions = [];
    foreach($descriptions as $description){
        $newDescriptions[] = (new AdTextAsset())->setText($description);
    }

    
    // Create the Responsive Search Ad info with the new headlines
    $responsiveSearchAdInfo = new ResponsiveSearchAdInfo([
        'headlines' => $newHeadlines,
        'descriptions' => $newDescriptions
    ]);

    // Create the Ad object with the updated Responsive Search Ad info
    $ad = new Ad([
        'resource_name' => ResourceNames::forAd($customerId, $adId), // Ad resource name
        'responsive_search_ad' => $responsiveSearchAdInfo,
    ]);

    // Create the AdOperation for the update
    $adOperation = new AdOperation();
    $adOperation->setUpdate($ad);
    $adOperation->setUpdateMask(FieldMasks::allSetFieldsOf($ad));

    // Execute the update request
    $adServiceClient = $googleAdsClient->getAdServiceClient();
    $response = $adServiceClient->mutateAds(MutateAdsRequest::build($customerId, [$adOperation]));

    printf("Updated ad with resource name: %s\n", $response->getResults()[0]->getResourceName());
}
catch (GoogleAdsException $googleAdsException) {
    printf(
        "Request with ID '%s' has failed.%sGoogle Ads failure details:%s",
        $googleAdsException->getRequestId(),
        PHP_EOL,
        PHP_EOL
    );
    foreach ($googleAdsException->getGoogleAdsFailure()->getErrors() as $error) {
        /** @var GoogleAdsError $error */
        printf(
            "\t%s: %s%s",
            $error->getErrorCode()->getErrorCode(),
            $error->getMessage(),
            PHP_EOL
        );
    }
    exit(1);
} catch (ApiException $apiException) {
    printf(
        "ApiException was thrown with message '%s'.%s",
        $apiException->getMessage(),
        PHP_EOL
    );
    exit(1);
}

}
?>