<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/offline_user_data_job_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Enums;

class OfflineUserDataJobType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v17/enums/offline_user_data_job_type.protogoogle.ads.googleads.v17.enums"�
OfflineUserDataJobTypeEnum"�
OfflineUserDataJobType
UNSPECIFIED 
UNKNOWN"
STORE_SALES_UPLOAD_FIRST_PARTY"
STORE_SALES_UPLOAD_THIRD_PARTY
CUSTOMER_MATCH_USER_LIST"
CUSTOMER_MATCH_WITH_ATTRIBUTESB�
"com.google.ads.googleads.v17.enumsBOfflineUserDataJobTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

