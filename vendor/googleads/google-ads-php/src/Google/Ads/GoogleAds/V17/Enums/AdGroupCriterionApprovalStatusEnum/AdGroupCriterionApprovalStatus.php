<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/ad_group_criterion_approval_status.proto

namespace Google\Ads\GoogleAds\V17\Enums\AdGroupCriterionApprovalStatusEnum;

use UnexpectedValueException;

/**
 * Enumerates AdGroupCriterion approval statuses.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.AdGroupCriterionApprovalStatusEnum.AdGroupCriterionApprovalStatus</code>
 */
class AdGroupCriterionApprovalStatus
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
     * Approved.
     *
     * Generated from protobuf enum <code>APPROVED = 2;</code>
     */
    const APPROVED = 2;
    /**
     * Disapproved.
     *
     * Generated from protobuf enum <code>DISAPPROVED = 3;</code>
     */
    const DISAPPROVED = 3;
    /**
     * Pending Review.
     *
     * Generated from protobuf enum <code>PENDING_REVIEW = 4;</code>
     */
    const PENDING_REVIEW = 4;
    /**
     * Under review.
     *
     * Generated from protobuf enum <code>UNDER_REVIEW = 5;</code>
     */
    const UNDER_REVIEW = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::APPROVED => 'APPROVED',
        self::DISAPPROVED => 'DISAPPROVED',
        self::PENDING_REVIEW => 'PENDING_REVIEW',
        self::UNDER_REVIEW => 'UNDER_REVIEW',
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
class_alias(AdGroupCriterionApprovalStatus::class, \Google\Ads\GoogleAds\V17\Enums\AdGroupCriterionApprovalStatusEnum_AdGroupCriterionApprovalStatus::class);

