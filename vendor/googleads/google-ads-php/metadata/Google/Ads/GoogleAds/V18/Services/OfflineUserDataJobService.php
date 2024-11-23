<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/offline_user_data_job_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Services;

class OfflineUserDataJobService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Igoogle/ads/googleads/v18/enums/offline_user_data_job_failure_reason.protogoogle.ads.googleads.v18.enums"�
#OfflineUserDataJobFailureReasonEnum"�
OfflineUserDataJobFailureReason
UNSPECIFIED 
UNKNOWN%
!INSUFFICIENT_MATCHED_TRANSACTIONS
INSUFFICIENT_TRANSACTIONS"
HIGH_AVERAGE_TRANSACTION_VALUE!
LOW_AVERAGE_TRANSACTION_VALUE 
NEWLY_OBSERVED_CURRENCY_CODEB�
"com.google.ads.googleads.v18.enumsB$OfflineUserDataJobFailureReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
;google/ads/googleads/v18/enums/user_identifier_source.protogoogle.ads.googleads.v18.enums"r
UserIdentifierSourceEnum"V
UserIdentifierSource
UNSPECIFIED 
UNKNOWN
FIRST_PARTY
THIRD_PARTYB�
"com.google.ads.googleads.v18.enumsBUserIdentifierSourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
?google/ads/googleads/v18/enums/offline_user_data_job_type.protogoogle.ads.googleads.v18.enums"�
OfflineUserDataJobTypeEnum"�
OfflineUserDataJobType
UNSPECIFIED 
UNKNOWN"
STORE_SALES_UPLOAD_FIRST_PARTY"
STORE_SALES_UPLOAD_THIRD_PARTY
CUSTOMER_MATCH_USER_LIST"
CUSTOMER_MATCH_WITH_ATTRIBUTESB�
"com.google.ads.googleads.v18.enumsBOfflineUserDataJobTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
3google/ads/googleads/v18/enums/consent_status.protogoogle.ads.googleads.v18.enums"[
ConsentStatusEnum"F
ConsentStatus
UNSPECIFIED 
UNKNOWN
GRANTED

DENIEDB�
"com.google.ads.googleads.v18.enumsBConsentStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
-google/ads/googleads/v18/common/consent.protogoogle.ads.googleads.v18.common"�
ConsentU
ad_user_data (2?.google.ads.googleads.v18.enums.ConsentStatusEnum.ConsentStatus[
ad_personalization (2?.google.ads.googleads.v18.enums.ConsentStatusEnum.ConsentStatusB�
#com.google.ads.googleads.v18.commonBConsentProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/common;common�GAA�Google.Ads.GoogleAds.V18.Common�Google\\Ads\\GoogleAds\\V18\\Common�#Google::Ads::GoogleAds::V18::Commonbproto3
�
7google/ads/googleads/v18/common/offline_user_data.protogoogle.ads.googleads.v18.common;google/ads/googleads/v18/enums/user_identifier_source.protogoogle/api/field_behavior.proto"�
OfflineUserAddressInfo
hashed_first_name (	H �
hashed_last_name (	H�
city	 (	H�
state
 (	H�
country_code (	H�
postal_code (	H�"
hashed_street_address (	H�B
_hashed_first_nameB
_hashed_last_nameB
_cityB
_stateB
_country_codeB
_postal_codeB
_hashed_street_address"�
UserIdentifierm
user_identifier_source (2M.google.ads.googleads.v18.enums.UserIdentifierSourceEnum.UserIdentifierSource
hashed_email (	H 
hashed_phone_number (	H 
	mobile_id	 (	H 
third_party_user_id
 (	H O
address_info (27.google.ads.googleads.v18.common.OfflineUserAddressInfoH B

identifier"�
TransactionAttribute"
transaction_date_time (	H �&
transaction_amount_micros	 (H�
currency_code
 (	H�
conversion_action (	H�
order_id (	H�H
store_attribute (2/.google.ads.googleads.v18.common.StoreAttribute
custom_value (	H�F
item_attribute (2..google.ads.googleads.v18.common.ItemAttributeB
_transaction_date_timeB
_transaction_amount_microsB
_currency_codeB
_conversion_actionB
	_order_idB
_custom_value"8
StoreAttribute

store_code (	H �B
_store_code"�
ItemAttribute
item_id (	
merchant_id (H �
country_code (	
language_code (	
quantity (B
_merchant_id"�
UserDataI
user_identifiers (2/.google.ads.googleads.v18.common.UserIdentifierT
transaction_attribute (25.google.ads.googleads.v18.common.TransactionAttributeF
user_attribute (2..google.ads.googleads.v18.common.UserAttribute>
consent (2(.google.ads.googleads.v18.common.ConsentH �B

_consent"�
UserAttribute"
lifetime_value_micros (H �"
lifetime_value_bucket (H�
last_purchase_date_time (	
average_purchase_count (%
average_purchase_value_micros (
acquisition_date_time (	O
shopping_loyalty (20.google.ads.googleads.v18.common.ShoppingLoyaltyH�
lifecycle_stage (	B�A%
first_purchase_date_time	 (	B�AM
event_attribute
 (2/.google.ads.googleads.v18.common.EventAttributeB�AB
_lifetime_value_microsB
_lifetime_value_bucketB
_shopping_loyalty"�
EventAttribute
event (	B�A
event_date_time (	B�AP
item_attribute (23.google.ads.googleads.v18.common.EventItemAttributeB�A"*
EventItemAttribute
item_id (	B�A"=
ShoppingLoyalty
loyalty_tier (	H �B
_loyalty_tier"�
CustomerMatchUserListMetadata
	user_list (	H �>
consent (2(.google.ads.googleads.v18.common.ConsentH�B

_user_listB

_consent"�
StoreSalesMetadata
loyalty_fraction (H �(
transaction_upload_fraction (H�

custom_key (	H�[
third_party_metadata (2=.google.ads.googleads.v18.common.StoreSalesThirdPartyMetadataB
_loyalty_fractionB
_transaction_upload_fractionB
_custom_key"�
StoreSalesThirdPartyMetadata(
advertiser_upload_date_time (	H �\'
valid_transaction_fraction (H�#
partner_match_fraction	 (H�$
partner_upload_fraction
 (H�"
bridge_map_version_id (	H�

partner_id (H�B
_advertiser_upload_date_timeB
_valid_transaction_fractionB
_partner_match_fractionB
_partner_upload_fractionB
_bridge_map_version_idB
_partner_idB�
#com.google.ads.googleads.v18.commonBOfflineUserDataProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/common;common�GAA�Google.Ads.GoogleAds.V18.Common�Google\\Ads\\GoogleAds\\V18\\Common�#Google::Ads::GoogleAds::V18::Commonbproto3
�
Agoogle/ads/googleads/v18/enums/offline_user_data_job_status.protogoogle.ads.googleads.v18.enums"�
OfflineUserDataJobStatusEnum"k
OfflineUserDataJobStatus
UNSPECIFIED 
UNKNOWN
PENDING
RUNNING
SUCCESS

FAILEDB�
"com.google.ads.googleads.v18.enumsBOfflineUserDataJobStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
Kgoogle/ads/googleads/v18/enums/offline_user_data_job_match_rate_range.protogoogle.ads.googleads.v18.enums"�
$OfflineUserDataJobMatchRateRangeEnum"�
 OfflineUserDataJobMatchRateRange
UNSPECIFIED 
UNKNOWN
MATCH_RANGE_LESS_THAN_20
MATCH_RANGE_20_TO_30
MATCH_RANGE_31_TO_40
MATCH_RANGE_41_TO_50
MATCH_RANGE_51_TO_60
MATCH_RANGE_61_TO_70
MATCH_RANGE_71_TO_80
MATCH_RANGE_81_TO_90	
MATCH_RANGE_91_TO_100
B�
"com.google.ads.googleads.v18.enumsB%OfflineUserDataJobMatchRateRangeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
>google/ads/googleads/v18/resources/offline_user_data_job.proto"google.ads.googleads.v18.resourcesIgoogle/ads/googleads/v18/enums/offline_user_data_job_failure_reason.protoKgoogle/ads/googleads/v18/enums/offline_user_data_job_match_rate_range.protoAgoogle/ads/googleads/v18/enums/offline_user_data_job_status.proto?google/ads/googleads/v18/enums/offline_user_data_job_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
OfflineUserDataJobJ
resource_name (	B3�A�A-
+googleads.googleapis.com/OfflineUserDataJob
id	 (B�AH�
external_id
 (B�AH�d
type (2Q.google.ads.googleads.v18.enums.OfflineUserDataJobTypeEnum.OfflineUserDataJobTypeB�Aj
status (2U.google.ads.googleads.v18.enums.OfflineUserDataJobStatusEnum.OfflineUserDataJobStatusB�A�
failure_reason (2c.google.ads.googleads.v18.enums.OfflineUserDataJobFailureReasonEnum.OfflineUserDataJobFailureReasonB�A_
operation_metadata (2>.google.ads.googleads.v18.resources.OfflineUserDataJobMetadataB�Ap
!customer_match_user_list_metadata (2>.google.ads.googleads.v18.common.CustomerMatchUserListMetadataB�AH X
store_sales_metadata (23.google.ads.googleads.v18.common.StoreSalesMetadataB�AH :{�Ax
+googleads.googleapis.com/OfflineUserDataJobIcustomers/{customer_id}/offlineUserDataJobs/{offline_user_data_update_id}B

metadataB
_idB
_external_id"�
OfflineUserDataJobMetadata�
match_rate_range (2e.google.ads.googleads.v18.enums.OfflineUserDataJobMatchRateRangeEnum.OfflineUserDataJobMatchRateRangeB�AB�
&com.google.ads.googleads.v18.resourcesBOfflineUserDataJobProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3
�
Egoogle/ads/googleads/v18/services/offline_user_data_job_service.proto!google.ads.googleads.v18.services>google/ads/googleads/v18/resources/offline_user_data_job.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/rpc/status.proto"�
CreateOfflineUserDataJobRequest
customer_id (	B�AH
job (26.google.ads.googleads.v18.resources.OfflineUserDataJobB�A
validate_only (\'
enable_match_rate_range_preview ("k
 CreateOfflineUserDataJobResponseG
resource_name (	B0�A-
+googleads.googleapis.com/OfflineUserDataJob"�
RunOfflineUserDataJobRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/OfflineUserDataJob
validate_only ("�
&AddOfflineUserDataJobOperationsRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/OfflineUserDataJob#
enable_partial_failure (H �
enable_warnings (H�W

operations (2>.google.ads.googleads.v18.services.OfflineUserDataJobOperationB�A
validate_only (B
_enable_partial_failureB
_enable_warnings"�
OfflineUserDataJobOperation;
create (2).google.ads.googleads.v18.common.UserDataH ;
remove (2).google.ads.googleads.v18.common.UserDataH 

remove_all (H B
	operation"�
\'AddOfflineUserDataJobOperationsResponse1
partial_failure_error (2.google.rpc.Status#
warning (2.google.rpc.Status2�
OfflineUserDataJobService�
CreateOfflineUserDataJobB.google.ads.googleads.v18.services.CreateOfflineUserDataJobRequestC.google.ads.googleads.v18.services.CreateOfflineUserDataJobResponse"V�Acustomer_id,job���>"9/v18/customers/{customer_id=*}/offlineUserDataJobs:create:*�
AddOfflineUserDataJobOperationsI.google.ads.googleads.v18.services.AddOfflineUserDataJobOperationsRequestJ.google.ads.googleads.v18.services.AddOfflineUserDataJobOperationsResponse"j�Aresource_name,operations���I"D/v18/{resource_name=customers/*/offlineUserDataJobs/*}:addOperations:*�
RunOfflineUserDataJob?.google.ads.googleads.v18.services.RunOfflineUserDataJobRequest.google.longrunning.Operation"��AV
google.protobuf.Empty=google.ads.googleads.v18.resources.OfflineUserDataJobMetadata�Aresource_name���?":/v18/{resource_name=customers/*/offlineUserDataJobs/*}:run:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v18.servicesBOfflineUserDataJobServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v18/services;services�GAA�!Google.Ads.GoogleAds.V18.Services�!Google\\Ads\\GoogleAds\\V18\\Services�%Google::Ads::GoogleAds::V18::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

