<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/ad_group_criterion_primary_status.proto

namespace Google\Ads\GoogleAds\V18\Enums\AdGroupCriterionPrimaryStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing the possible ad group criterion primary status. Provides
 * insight into why an ad group criterion is not serving or not serving
 * optimally.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.AdGroupCriterionPrimaryStatusEnum.AdGroupCriterionPrimaryStatus</code>
 */
class AdGroupCriterionPrimaryStatus
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
     * The ad group criterion is eligible to serve.
     *
     * Generated from protobuf enum <code>ELIGIBLE = 2;</code>
     */
    const ELIGIBLE = 2;
    /**
     * The ad group criterion is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 3;</code>
     */
    const PAUSED = 3;
    /**
     * The ad group criterion is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    const REMOVED = 4;
    /**
     * The ad group criterion is pending.
     *
     * Generated from protobuf enum <code>PENDING = 5;</code>
     */
    const PENDING = 5;
    /**
     * The ad group criterion is not eligible to serve.
     *
     * Generated from protobuf enum <code>NOT_ELIGIBLE = 6;</code>
     */
    const NOT_ELIGIBLE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ELIGIBLE => 'ELIGIBLE',
        self::PAUSED => 'PAUSED',
        self::REMOVED => 'REMOVED',
        self::PENDING => 'PENDING',
        self::NOT_ELIGIBLE => 'NOT_ELIGIBLE',
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
class_alias(AdGroupCriterionPrimaryStatus::class, \Google\Ads\GoogleAds\V18\Enums\AdGroupCriterionPrimaryStatusEnum_AdGroupCriterionPrimaryStatus::class);

