<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/video_thumbnail.proto

namespace Google\Ads\GoogleAds\V18\Enums\VideoThumbnailEnum;

use UnexpectedValueException;

/**
 * Enum listing the possible types of a video thumbnail.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.VideoThumbnailEnum.VideoThumbnail</code>
 */
class VideoThumbnail
{
    /**
     * The type has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The default thumbnail. Can be auto-generated or user-uploaded.
     *
     * Generated from protobuf enum <code>DEFAULT_THUMBNAIL = 2;</code>
     */
    const DEFAULT_THUMBNAIL = 2;
    /**
     * Thumbnail 1, generated from the video.
     *
     * Generated from protobuf enum <code>THUMBNAIL_1 = 3;</code>
     */
    const THUMBNAIL_1 = 3;
    /**
     * Thumbnail 2, generated from the video.
     *
     * Generated from protobuf enum <code>THUMBNAIL_2 = 4;</code>
     */
    const THUMBNAIL_2 = 4;
    /**
     * Thumbnail 3, generated from the video.
     *
     * Generated from protobuf enum <code>THUMBNAIL_3 = 5;</code>
     */
    const THUMBNAIL_3 = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DEFAULT_THUMBNAIL => 'DEFAULT_THUMBNAIL',
        self::THUMBNAIL_1 => 'THUMBNAIL_1',
        self::THUMBNAIL_2 => 'THUMBNAIL_2',
        self::THUMBNAIL_3 => 'THUMBNAIL_3',
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
class_alias(VideoThumbnail::class, \Google\Ads\GoogleAds\V18\Enums\VideoThumbnailEnum_VideoThumbnail::class);

