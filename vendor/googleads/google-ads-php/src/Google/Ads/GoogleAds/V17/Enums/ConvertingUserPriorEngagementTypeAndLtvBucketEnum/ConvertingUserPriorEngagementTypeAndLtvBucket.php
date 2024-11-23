<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/converting_user_prior_engagement_type_and_ltv_bucket.proto

namespace Google\Ads\GoogleAds\V17\Enums\ConvertingUserPriorEngagementTypeAndLtvBucketEnum;

use UnexpectedValueException;

/**
 * Enumerates converting user prior engagement types and lifetime-value bucket
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.ConvertingUserPriorEngagementTypeAndLtvBucketEnum.ConvertingUserPriorEngagementTypeAndLtvBucket</code>
 */
class ConvertingUserPriorEngagementTypeAndLtvBucket
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Converting user is new to the advertiser.
     *
     * Generated from protobuf enum <code>NEW = 2;</code>
     */
    const PBNEW = 2;
    /**
     * Converting user is returning to the advertiser. Definition of returning
     * differs among conversion types, such as a second store visit versus a
     * second online purchase.
     *
     * Generated from protobuf enum <code>RETURNING = 3;</code>
     */
    const RETURNING = 3;
    /**
     * Converting user is new to the advertiser and has high lifetime value.
     *
     * Generated from protobuf enum <code>NEW_AND_HIGH_LTV = 4;</code>
     */
    const NEW_AND_HIGH_LTV = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PBNEW => 'NEW',
        self::RETURNING => 'RETURNING',
        self::NEW_AND_HIGH_LTV => 'NEW_AND_HIGH_LTV',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConvertingUserPriorEngagementTypeAndLtvBucket::class, \Google\Ads\GoogleAds\V17\Enums\ConvertingUserPriorEngagementTypeAndLtvBucketEnum_ConvertingUserPriorEngagementTypeAndLtvBucket::class);

