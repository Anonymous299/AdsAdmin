<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/local_services_conversation_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Enums;

class LocalServicesConversationType
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
Egoogle/ads/googleads/v18/enums/local_services_conversation_type.protogoogle.ads.googleads.v18.enums"�
%LocalServicesLeadConversationTypeEnum"�
ConversationType
UNSPECIFIED 
UNKNOWN	
EMAIL
MESSAGE

PHONE_CALL
SMS
BOOKING
WHATSAPP
ADS_APIB�
"com.google.ads.googleads.v18.enumsB"LocalServicesConversationTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

