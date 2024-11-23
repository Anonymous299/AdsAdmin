<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/legacy_app_install_ad_app_store.proto

namespace Google\Ads\GoogleAds\V18\Enums\LegacyAppInstallAdAppStoreEnum;

use UnexpectedValueException;

/**
 * App store type in a legacy app install ad.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore</code>
 */
class LegacyAppInstallAdAppStore
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
     * Apple iTunes.
     *
     * Generated from protobuf enum <code>APPLE_APP_STORE = 2;</code>
     */
    const APPLE_APP_STORE = 2;
    /**
     * Google Play.
     *
     * Generated from protobuf enum <code>GOOGLE_PLAY = 3;</code>
     */
    const GOOGLE_PLAY = 3;
    /**
     * Windows Store.
     *
     * Generated from protobuf enum <code>WINDOWS_STORE = 4;</code>
     */
    const WINDOWS_STORE = 4;
    /**
     * Windows Phone Store.
     *
     * Generated from protobuf enum <code>WINDOWS_PHONE_STORE = 5;</code>
     */
    const WINDOWS_PHONE_STORE = 5;
    /**
     * The app is hosted in a Chinese app store.
     *
     * Generated from protobuf enum <code>CN_APP_STORE = 6;</code>
     */
    const CN_APP_STORE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::APPLE_APP_STORE => 'APPLE_APP_STORE',
        self::GOOGLE_PLAY => 'GOOGLE_PLAY',
        self::WINDOWS_STORE => 'WINDOWS_STORE',
        self::WINDOWS_PHONE_STORE => 'WINDOWS_PHONE_STORE',
        self::CN_APP_STORE => 'CN_APP_STORE',
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
class_alias(LegacyAppInstallAdAppStore::class, \Google\Ads\GoogleAds\V18\Enums\LegacyAppInstallAdAppStoreEnum_LegacyAppInstallAdAppStore::class);

