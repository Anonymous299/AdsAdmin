<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/local_services_business_registration_check_rejection_reason.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Enums;

class LocalServicesBusinessRegistrationCheckRejectionReason
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
`google/ads/googleads/v18/enums/local_services_business_registration_check_rejection_reason.protogoogle.ads.googleads.v18.enums"�
9LocalServicesBusinessRegistrationCheckRejectionReasonEnum"�
5LocalServicesBusinessRegistrationCheckRejectionReason
UNSPECIFIED 
UNKNOWN
BUSINESS_NAME_MISMATCH
BUSINESS_DETAILS_MISMATCH
ID_NOT_FOUND
POOR_DOCUMENT_IMAGE_QUALITY
DOCUMENT_EXPIRED
DOCUMENT_INVALID
DOCUMENT_TYPE_MISMATCH
DOCUMENT_UNVERIFIABLE		
OTHER
B�
"com.google.ads.googleads.v18.enumsB:LocalServicesBusinessRegistrationCheckRejectionReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

