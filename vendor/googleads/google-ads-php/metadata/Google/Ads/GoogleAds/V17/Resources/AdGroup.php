<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/ad_group.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class AdGroup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/ads/googleads/v17/enums/asset_set_type.protogoogle.ads.googleads.v17.enums"�
AssetSetTypeEnum"�
AssetSetType
UNSPECIFIED 
UNKNOWN
	PAGE_FEED
DYNAMIC_EDUCATION
MERCHANT_CENTER_FEED
DYNAMIC_REAL_ESTATE
DYNAMIC_CUSTOM
DYNAMIC_HOTELS_AND_RENTALS
DYNAMIC_FLIGHTS
DYNAMIC_TRAVEL	
DYNAMIC_LOCAL

DYNAMIC_JOBS
LOCATION_SYNC+
\'BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP 
CHAIN_DYNAMIC_LOCATION_GROUP
STATIC_LOCATION_GROUP
HOTEL_PROPERTYB�
"com.google.ads.googleads.v17.enumsBAssetSetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
2google/ads/googleads/v17/enums/ad_group_type.protogoogle.ads.googleads.v17.enums"�
AdGroupTypeEnum"�
AdGroupType
UNSPECIFIED 
UNKNOWN
SEARCH_STANDARD
DISPLAY_STANDARD
SHOPPING_PRODUCT_ADS
	HOTEL_ADS
SHOPPING_SMART_ADS
VIDEO_BUMPER
VIDEO_TRUE_VIEW_IN_STREAM	
VIDEO_TRUE_VIEW_IN_DISPLAY
!
VIDEO_NON_SKIPPABLE_IN_STREAM
VIDEO_OUTSTREAM
SEARCH_DYNAMIC_ADS#
SHOPPING_COMPARISON_LISTING_ADS
PROMOTED_HOTEL_ADS
VIDEO_RESPONSIVE
VIDEO_EFFICIENT_REACH
SMART_CAMPAIGN_ADS

TRAVEL_ADSB�
"com.google.ads.googleads.v17.enumsBAdGroupTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
3google/ads/googleads/v17/enums/bidding_source.protogoogle.ads.googleads.v17.enums"�
BiddingSourceEnum"r
BiddingSource
UNSPECIFIED 
UNKNOWN
CAMPAIGN_BIDDING_STRATEGY
AD_GROUP
AD_GROUP_CRITERIONB�
"com.google.ads.googleads.v17.enumsBBiddingSourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Cgoogle/ads/googleads/v17/enums/ad_group_primary_status_reason.protogoogle.ads.googleads.v17.enums"�
AdGroupPrimaryStatusReasonEnum"�
AdGroupPrimaryStatusReason
UNSPECIFIED 
UNKNOWN
CAMPAIGN_REMOVED
CAMPAIGN_PAUSED
CAMPAIGN_PENDING
CAMPAIGN_ENDED
AD_GROUP_PAUSED
AD_GROUP_REMOVED
AD_GROUP_INCOMPLETE
KEYWORDS_PAUSED	
NO_KEYWORDS

AD_GROUP_ADS_PAUSED
NO_AD_GROUP_ADS
HAS_ADS_DISAPPROVED
HAS_ADS_LIMITED_BY_POLICY
MOST_ADS_UNDER_REVIEW
CAMPAIGN_DRAFT\'
#AD_GROUP_PAUSED_DUE_TO_LOW_ACTIVITYB�
"com.google.ads.googleads.v17.enumsBAdGroupPrimaryStatusReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
>google/ads/googleads/v17/enums/ad_group_ad_rotation_mode.protogoogle.ads.googleads.v17.enums"t
AdGroupAdRotationModeEnum"W
AdGroupAdRotationMode
UNSPECIFIED 
UNKNOWN
OPTIMIZE
ROTATE_FOREVERB�
"com.google.ads.googleads.v17.enumsBAdGroupAdRotationModeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
<google/ads/googleads/v17/enums/ad_group_primary_status.protogoogle.ads.googleads.v17.enums"�
AdGroupPrimaryStatusEnum"�
AdGroupPrimaryStatus
UNSPECIFIED 
UNKNOWN
ELIGIBLE

PAUSED
REMOVED
PENDING
NOT_ELIGIBLE
LIMITEDB�
"com.google.ads.googleads.v17.enumsBAdGroupPrimaryStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
4google/ads/googleads/v17/enums/ad_group_status.protogoogle.ads.googleads.v17.enums"h
AdGroupStatusEnum"S
AdGroupStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSED
REMOVEDB�
"com.google.ads.googleads.v17.enumsBAdGroupStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
5google/ads/googleads/v17/enums/asset_field_type.protogoogle.ads.googleads.v17.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTION
AD_IMAGE
BUSINESS_LOGO
HOTEL_PROPERTY
DEMAND_GEN_CAROUSEL_CARDB�
"com.google.ads.googleads.v17.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
8google/ads/googleads/v17/enums/targeting_dimension.protogoogle.ads.googleads.v17.enums"�
TargetingDimensionEnum"�
TargetingDimension
UNSPECIFIED 
UNKNOWN
KEYWORD
AUDIENCE	
TOPIC

GENDER
	AGE_RANGE
	PLACEMENT
PARENTAL_STATUS
INCOME_RANGE	B�
"com.google.ads.googleads.v17.enumsBTargetingDimensionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
7google/ads/googleads/v17/common/targeting_setting.protogoogle.ads.googleads.v17.common"�
TargetingSettingO
target_restrictions (22.google.ads.googleads.v17.common.TargetRestrictionb
target_restriction_operations (2;.google.ads.googleads.v17.common.TargetRestrictionOperation"�
TargetRestrictionf
targeting_dimension (2I.google.ads.googleads.v17.enums.TargetingDimensionEnum.TargetingDimension
bid_only (H �B
	_bid_only"�
TargetRestrictionOperationV
operator (2D.google.ads.googleads.v17.common.TargetRestrictionOperation.OperatorA
value (22.google.ads.googleads.v17.common.TargetRestriction"=
Operator
UNSPECIFIED 
UNKNOWN
ADD

REMOVEB�
#com.google.ads.googleads.v17.commonBTargetingSettingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
6google/ads/googleads/v17/common/custom_parameter.protogoogle.ads.googleads.v17.common"I
CustomParameter
key (	H �
value (	H�B
_keyB
_valueB�
#com.google.ads.googleads.v17.commonBCustomParameterProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
1google/ads/googleads/v17/resources/ad_group.proto"google.ads.googleads.v17.resources7google/ads/googleads/v17/common/targeting_setting.proto>google/ads/googleads/v17/enums/ad_group_ad_rotation_mode.proto<google/ads/googleads/v17/enums/ad_group_primary_status.protoCgoogle/ads/googleads/v17/enums/ad_group_primary_status_reason.proto4google/ads/googleads/v17/enums/ad_group_status.proto2google/ads/googleads/v17/enums/ad_group_type.proto5google/ads/googleads/v17/enums/asset_field_type.proto3google/ads/googleads/v17/enums/asset_set_type.proto3google/ads/googleads/v17/enums/bidding_source.proto8google/ads/googleads/v17/enums/targeting_dimension.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AdGroup?
resource_name (	B(�A�A"
 googleads.googleapis.com/AdGroup
id" (B�AH �
name# (	H�O
status (2?.google.ads.googleads.v17.enums.AdGroupStatusEnum.AdGroupStatusN
type (2;.google.ads.googleads.v17.enums.AdGroupTypeEnum.AdGroupTypeB�Ai
ad_rotation_mode (2O.google.ads.googleads.v17.enums.AdGroupAdRotationModeEnum.AdGroupAdRotationModeD
base_ad_group$ (	B(�A�A"
 googleads.googleapis.com/AdGroupH�"
tracking_url_template% (	H�O
url_custom_parameters (20.google.ads.googleads.v17.common.CustomParameter@
campaign& (	B)�A�A#
!googleads.googleapis.com/CampaignH�
cpc_bid_micros\' (H�*
effective_cpc_bid_micros9 (B�AH�
cpm_bid_micros( (H�
target_cpa_micros) (H�
cpv_bid_micros* (H	�
target_cpm_micros+ (H
�
target_roas, (H�#
percent_cpc_bid_micros- (H�
fixed_cpm_micros@ (H�
target_cpv_microsA (H�#
optimized_targeting_enabled; (o
display_custom_bid_dimension (2I.google.ads.googleads.v17.enums.TargetingDimensionEnum.TargetingDimension
final_url_suffix. (	H�L
targeting_setting (21.google.ads.googleads.v17.common.TargetingSettingZ
audience_setting8 (2;.google.ads.googleads.v17.resources.AdGroup.AudienceSettingB�A-
effective_target_cpa_micros/ (B�AH�i
effective_target_cpa_source (2?.google.ads.googleads.v17.enums.BiddingSourceEnum.BiddingSourceB�A\'
effective_target_roas0 (B�AH�j
effective_target_roas_source  (2?.google.ads.googleads.v17.enums.BiddingSourceEnum.BiddingSourceB�A=
labels1 (	B-�A�A\'
%googleads.googleapis.com/AdGroupLabell
!excluded_parent_asset_field_types6 (2A.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldTypef
excluded_parent_asset_set_types: (2=.google.ads.googleads.v17.enums.AssetSetTypeEnum.AssetSetTypej
primary_status> (2M.google.ads.googleads.v17.enums.AdGroupPrimaryStatusEnum.AdGroupPrimaryStatusB�A~
primary_status_reasons? (2Y.google.ads.googleads.v17.enums.AdGroupPrimaryStatusReasonEnum.AdGroupPrimaryStatusReasonB�A4
AudienceSetting!
use_audience_grouped (B�A:U�AR
 googleads.googleapis.com/AdGroup.customers/{customer_id}/adGroups/{ad_group_id}B
_idB
_nameB
_base_ad_groupB
_tracking_url_templateB
	_campaignB
_cpc_bid_microsB
_effective_cpc_bid_microsB
_cpm_bid_microsB
_target_cpa_microsB
_cpv_bid_microsB
_target_cpm_microsB
_target_roasB
_percent_cpc_bid_microsB
_fixed_cpm_microsB
_target_cpv_microsB
_final_url_suffixB
_effective_target_cpa_microsB
_effective_target_roasB�
&com.google.ads.googleads.v17.resourcesBAdGroupProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

