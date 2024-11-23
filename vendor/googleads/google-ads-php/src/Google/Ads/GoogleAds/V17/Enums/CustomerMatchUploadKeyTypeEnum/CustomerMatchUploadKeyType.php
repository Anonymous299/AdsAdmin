<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/customer_match_upload_key_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\CustomerMatchUploadKeyTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible customer match upload key types.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.CustomerMatchUploadKeyTypeEnum.CustomerMatchUploadKeyType</code>
 */
class CustomerMatchUploadKeyType
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
     * Members are matched from customer info such as email address, phone
     * number or physical address.
     *
     * Generated from protobuf enum <code>CONTACT_INFO = 2;</code>
     */
    const CONTACT_INFO = 2;
    /**
     * Members are matched from a user id generated and assigned by the
     * advertiser.
     *
     * Generated from protobuf enum <code>CRM_ID = 3;</code>
     */
    const CRM_ID = 3;
    /**
     * Members are matched from mobile advertising ids.
     *
     * Generated from protobuf enum <code>MOBILE_ADVERTISING_ID = 4;</code>
     */
    const MOBILE_ADVERTISING_ID = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CONTACT_INFO => 'CONTACT_INFO',
        self::CRM_ID => 'CRM_ID',
        self::MOBILE_ADVERTISING_ID => 'MOBILE_ADVERTISING_ID',
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
class_alias(CustomerMatchUploadKeyType::class, \Google\Ads\GoogleAds\V17\Enums\CustomerMatchUploadKeyTypeEnum_CustomerMatchUploadKeyType::class);

