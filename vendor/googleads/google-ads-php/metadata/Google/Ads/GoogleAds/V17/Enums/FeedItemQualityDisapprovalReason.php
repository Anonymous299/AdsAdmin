<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/feed_item_quality_disapproval_reason.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Enums;

class FeedItemQualityDisapprovalReason
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�	
Igoogle/ads/googleads/v17/enums/feed_item_quality_disapproval_reason.protogoogle.ads.googleads.v17.enums"�
$FeedItemQualityDisapprovalReasonEnum"�
 FeedItemQualityDisapprovalReason
UNSPECIFIED 
UNKNOWN"
PRICE_TABLE_REPETITIVE_HEADERS&
"PRICE_TABLE_REPETITIVE_DESCRIPTION!
PRICE_TABLE_INCONSISTENT_ROWS*
&PRICE_DESCRIPTION_HAS_PRICE_QUALIFIERS
PRICE_UNSUPPORTED_LANGUAGE.
*PRICE_TABLE_ROW_HEADER_TABLE_TYPE_MISMATCH/
+PRICE_TABLE_ROW_HEADER_HAS_PROMOTIONAL_TEXT,
(PRICE_TABLE_ROW_DESCRIPTION_NOT_RELEVANT	4
0PRICE_TABLE_ROW_DESCRIPTION_HAS_PROMOTIONAL_TEXT
1
-PRICE_TABLE_ROW_HEADER_DESCRIPTION_REPETITIVE
PRICE_TABLE_ROW_UNRATEABLE!
PRICE_TABLE_ROW_PRICE_INVALID
PRICE_TABLE_ROW_URL_INVALID)
%PRICE_HEADER_OR_DESCRIPTION_HAS_PRICE.
*STRUCTURED_SNIPPETS_HEADER_POLICY_VIOLATED\'
#STRUCTURED_SNIPPETS_REPEATED_VALUES,
(STRUCTURED_SNIPPETS_EDITORIAL_GUIDELINES,
(STRUCTURED_SNIPPETS_HAS_PROMOTIONAL_TEXTB�
"com.google.ads.googleads.v17.enumsB%FeedItemQualityDisapprovalReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

