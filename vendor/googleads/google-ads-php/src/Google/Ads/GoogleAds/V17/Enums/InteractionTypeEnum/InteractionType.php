<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/interaction_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\InteractionTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible interaction types.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.InteractionTypeEnum.InteractionType</code>
 */
class InteractionType
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
     * Calls.
     *
     * Generated from protobuf enum <code>CALLS = 8000;</code>
     */
    const CALLS = 8000;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CALLS => 'CALLS',
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
class_alias(InteractionType::class, \Google\Ads\GoogleAds\V17\Enums\InteractionTypeEnum_InteractionType::class);

