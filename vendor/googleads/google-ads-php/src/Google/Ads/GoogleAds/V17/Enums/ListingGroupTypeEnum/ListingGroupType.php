<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/listing_group_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\ListingGroupTypeEnum;

use UnexpectedValueException;

/**
 * The type of the listing group.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.ListingGroupTypeEnum.ListingGroupType</code>
 */
class ListingGroupType
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
     * Subdivision of products along some listing dimension. These nodes
     * are not used by serving to target listing entries, but is purely
     * to define the structure of the tree.
     *
     * Generated from protobuf enum <code>SUBDIVISION = 2;</code>
     */
    const SUBDIVISION = 2;
    /**
     * Listing group unit that defines a bid.
     *
     * Generated from protobuf enum <code>UNIT = 3;</code>
     */
    const UNIT = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SUBDIVISION => 'SUBDIVISION',
        self::UNIT => 'UNIT',
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
class_alias(ListingGroupType::class, \Google\Ads\GoogleAds\V17\Enums\ListingGroupTypeEnum_ListingGroupType::class);

