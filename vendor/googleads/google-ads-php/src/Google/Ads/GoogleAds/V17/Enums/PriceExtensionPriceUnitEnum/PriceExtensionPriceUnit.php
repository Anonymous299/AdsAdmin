<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/price_extension_price_unit.proto

namespace Google\Ads\GoogleAds\V17\Enums\PriceExtensionPriceUnitEnum;

use UnexpectedValueException;

/**
 * Price extension price unit.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit</code>
 */
class PriceExtensionPriceUnit
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
     * Per hour.
     *
     * Generated from protobuf enum <code>PER_HOUR = 2;</code>
     */
    const PER_HOUR = 2;
    /**
     * Per day.
     *
     * Generated from protobuf enum <code>PER_DAY = 3;</code>
     */
    const PER_DAY = 3;
    /**
     * Per week.
     *
     * Generated from protobuf enum <code>PER_WEEK = 4;</code>
     */
    const PER_WEEK = 4;
    /**
     * Per month.
     *
     * Generated from protobuf enum <code>PER_MONTH = 5;</code>
     */
    const PER_MONTH = 5;
    /**
     * Per year.
     *
     * Generated from protobuf enum <code>PER_YEAR = 6;</code>
     */
    const PER_YEAR = 6;
    /**
     * Per night.
     *
     * Generated from protobuf enum <code>PER_NIGHT = 7;</code>
     */
    const PER_NIGHT = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PER_HOUR => 'PER_HOUR',
        self::PER_DAY => 'PER_DAY',
        self::PER_WEEK => 'PER_WEEK',
        self::PER_MONTH => 'PER_MONTH',
        self::PER_YEAR => 'PER_YEAR',
        self::PER_NIGHT => 'PER_NIGHT',
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
class_alias(PriceExtensionPriceUnit::class, \Google\Ads\GoogleAds\V17\Enums\PriceExtensionPriceUnitEnum_PriceExtensionPriceUnit::class);

