<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/change_client_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Enums;

class ChangeClientType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v18/enums/change_client_type.protogoogle.ads.googleads.v18.enums"�
ChangeClientTypeEnum"�
ChangeClientType
UNSPECIFIED 
UNKNOWN
GOOGLE_ADS_WEB_CLIENT
GOOGLE_ADS_AUTOMATED_RULE
GOOGLE_ADS_SCRIPTS
GOOGLE_ADS_BULK_UPLOAD
GOOGLE_ADS_API
GOOGLE_ADS_EDITOR
GOOGLE_ADS_MOBILE_APP
GOOGLE_ADS_RECOMMENDATIONS	
SEARCH_ADS_360_SYNC

SEARCH_ADS_360_POST
INTERNAL_TOOL	
OTHER+
\'GOOGLE_ADS_RECOMMENDATIONS_SUBSCRIPTIONB�
"com.google.ads.googleads.v18.enumsBChangeClientTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

