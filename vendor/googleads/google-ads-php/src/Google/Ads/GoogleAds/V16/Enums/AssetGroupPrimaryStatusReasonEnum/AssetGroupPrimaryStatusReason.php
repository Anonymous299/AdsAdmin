<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/enums/asset_group_primary_status_reason.proto

namespace Google\Ads\GoogleAds\V16\Enums\AssetGroupPrimaryStatusReasonEnum;

use UnexpectedValueException;

/**
 * Enum describing the possible asset group primary status reasons. Provides
 * reasons into why an asset group is not serving or not serving optimally.
 * It will be empty when the asset group is serving without issues.
 *
 * Protobuf type <code>google.ads.googleads.v16.enums.AssetGroupPrimaryStatusReasonEnum.AssetGroupPrimaryStatusReason</code>
 */
class AssetGroupPrimaryStatusReason
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The user-specified asset group status is paused.
     *
     * Generated from protobuf enum <code>ASSET_GROUP_PAUSED = 2;</code>
     */
    const ASSET_GROUP_PAUSED = 2;
    /**
     * The user-specified asset group status is removed.
     *
     * Generated from protobuf enum <code>ASSET_GROUP_REMOVED = 3;</code>
     */
    const ASSET_GROUP_REMOVED = 3;
    /**
     * The user-specified campaign status is removed.
     *
     * Generated from protobuf enum <code>CAMPAIGN_REMOVED = 4;</code>
     */
    const CAMPAIGN_REMOVED = 4;
    /**
     * The user-specified campaign status is paused.
     *
     * Generated from protobuf enum <code>CAMPAIGN_PAUSED = 5;</code>
     */
    const CAMPAIGN_PAUSED = 5;
    /**
     * The user-specified time for this campaign to start is in the future.
     *
     * Generated from protobuf enum <code>CAMPAIGN_PENDING = 6;</code>
     */
    const CAMPAIGN_PENDING = 6;
    /**
     * The user-specified time for this campaign to end has passed.
     *
     * Generated from protobuf enum <code>CAMPAIGN_ENDED = 7;</code>
     */
    const CAMPAIGN_ENDED = 7;
    /**
     * The asset group is approved but only serves in limited capacity due to
     * policies.
     *
     * Generated from protobuf enum <code>ASSET_GROUP_LIMITED = 8;</code>
     */
    const ASSET_GROUP_LIMITED = 8;
    /**
     * The asset group has been marked as disapproved.
     *
     * Generated from protobuf enum <code>ASSET_GROUP_DISAPPROVED = 9;</code>
     */
    const ASSET_GROUP_DISAPPROVED = 9;
    /**
     * The asset group has not completed policy review.
     *
     * Generated from protobuf enum <code>ASSET_GROUP_UNDER_REVIEW = 10;</code>
     */
    const ASSET_GROUP_UNDER_REVIEW = 10;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ASSET_GROUP_PAUSED => 'ASSET_GROUP_PAUSED',
        self::ASSET_GROUP_REMOVED => 'ASSET_GROUP_REMOVED',
        self::CAMPAIGN_REMOVED => 'CAMPAIGN_REMOVED',
        self::CAMPAIGN_PAUSED => 'CAMPAIGN_PAUSED',
        self::CAMPAIGN_PENDING => 'CAMPAIGN_PENDING',
        self::CAMPAIGN_ENDED => 'CAMPAIGN_ENDED',
        self::ASSET_GROUP_LIMITED => 'ASSET_GROUP_LIMITED',
        self::ASSET_GROUP_DISAPPROVED => 'ASSET_GROUP_DISAPPROVED',
        self::ASSET_GROUP_UNDER_REVIEW => 'ASSET_GROUP_UNDER_REVIEW',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetGroupPrimaryStatusReason::class, \Google\Ads\GoogleAds\V16\Enums\AssetGroupPrimaryStatusReasonEnum_AssetGroupPrimaryStatusReason::class);

