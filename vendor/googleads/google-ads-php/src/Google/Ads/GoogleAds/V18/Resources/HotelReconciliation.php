<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/hotel_reconciliation.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A hotel reconciliation. It contains conversion information from Hotel
 * bookings to reconcile with advertiser records. These rows may be updated
 * or canceled before billing through Bulk Uploads.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.HotelReconciliation</code>
 */
class HotelReconciliation extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the hotel reconciliation.
     * Hotel reconciliation resource names have the form:
     * `customers/{customer_id}/hotelReconciliations/{commission_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Required. Output only. The commission ID is Google's ID for this booking.
     * Every booking event is assigned a Commission ID to help you match it to a
     * guest stay.
     *
     * Generated from protobuf field <code>string commission_id = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $commission_id = '';
    /**
     * Output only. The order ID is the identifier for this booking as provided in
     * the 'transaction_id' parameter of the conversion tracking tag.
     *
     * Generated from protobuf field <code>string order_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $order_id = '';
    /**
     * Output only. The resource name for the Campaign associated with the
     * conversion.
     *
     * Generated from protobuf field <code>string campaign = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = '';
    /**
     * Output only. Identifier for the Hotel Center account which provides the
     * rates for the Hotel campaign.
     *
     * Generated from protobuf field <code>int64 hotel_center_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $hotel_center_id = 0;
    /**
     * Output only. Unique identifier for the booked property, as provided in the
     * Hotel Center feed. The hotel ID comes from the 'ID' parameter of the
     * conversion tracking tag.
     *
     * Generated from protobuf field <code>string hotel_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $hotel_id = '';
    /**
     * Output only. Check-in date recorded when the booking is made. If the
     * check-in date is modified at reconciliation, the revised date will then
     * take the place of the original date in this column. Format is YYYY-MM-DD.
     *
     * Generated from protobuf field <code>string check_in_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $check_in_date = '';
    /**
     * Output only. Check-out date recorded when the booking is made. If the
     * check-in date is modified at reconciliation, the revised date will then
     * take the place of the original date in this column. Format is YYYY-MM-DD.
     *
     * Generated from protobuf field <code>string check_out_date = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $check_out_date = '';
    /**
     * Required. Output only. Reconciled value is the final value of a booking as
     * paid by the guest. If original booking value changes for any reason, such
     * as itinerary changes or room upsells, the reconciled value should be the
     * full final amount collected. If a booking is canceled, the reconciled value
     * should include the value of any cancellation fees or non-refundable nights
     * charged. Value is in millionths of the base unit currency. For example,
     * $12.35 would be represented as 12350000. Currency unit is in the default
     * customer currency.
     *
     * Generated from protobuf field <code>int64 reconciled_value_micros = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $reconciled_value_micros = 0;
    /**
     * Output only. Whether a given booking has been billed. Once billed, a
     * booking can't be modified.
     *
     * Generated from protobuf field <code>bool billed = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billed = false;
    /**
     * Required. Output only. Current status of a booking with regards to
     * reconciliation and billing. Bookings should be reconciled within 45 days
     * after the check-out date. Any booking not reconciled within 45 days will be
     * billed at its original value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.HotelReconciliationStatusEnum.HotelReconciliationStatus status = 10 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the hotel reconciliation.
     *           Hotel reconciliation resource names have the form:
     *           `customers/{customer_id}/hotelReconciliations/{commission_id}`
     *     @type string $commission_id
     *           Required. Output only. The commission ID is Google's ID for this booking.
     *           Every booking event is assigned a Commission ID to help you match it to a
     *           guest stay.
     *     @type string $order_id
     *           Output only. The order ID is the identifier for this booking as provided in
     *           the 'transaction_id' parameter of the conversion tracking tag.
     *     @type string $campaign
     *           Output only. The resource name for the Campaign associated with the
     *           conversion.
     *     @type int|string $hotel_center_id
     *           Output only. Identifier for the Hotel Center account which provides the
     *           rates for the Hotel campaign.
     *     @type string $hotel_id
     *           Output only. Unique identifier for the booked property, as provided in the
     *           Hotel Center feed. The hotel ID comes from the 'ID' parameter of the
     *           conversion tracking tag.
     *     @type string $check_in_date
     *           Output only. Check-in date recorded when the booking is made. If the
     *           check-in date is modified at reconciliation, the revised date will then
     *           take the place of the original date in this column. Format is YYYY-MM-DD.
     *     @type string $check_out_date
     *           Output only. Check-out date recorded when the booking is made. If the
     *           check-in date is modified at reconciliation, the revised date will then
     *           take the place of the original date in this column. Format is YYYY-MM-DD.
     *     @type int|string $reconciled_value_micros
     *           Required. Output only. Reconciled value is the final value of a booking as
     *           paid by the guest. If original booking value changes for any reason, such
     *           as itinerary changes or room upsells, the reconciled value should be the
     *           full final amount collected. If a booking is canceled, the reconciled value
     *           should include the value of any cancellation fees or non-refundable nights
     *           charged. Value is in millionths of the base unit currency. For example,
     *           $12.35 would be represented as 12350000. Currency unit is in the default
     *           customer currency.
     *     @type bool $billed
     *           Output only. Whether a given booking has been billed. Once billed, a
     *           booking can't be modified.
     *     @type int $status
     *           Required. Output only. Current status of a booking with regards to
     *           reconciliation and billing. Bookings should be reconciled within 45 days
     *           after the check-out date. Any booking not reconciled within 45 days will be
     *           billed at its original value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\HotelReconciliation::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the hotel reconciliation.
     * Hotel reconciliation resource names have the form:
     * `customers/{customer_id}/hotelReconciliations/{commission_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the hotel reconciliation.
     * Hotel reconciliation resource names have the form:
     * `customers/{customer_id}/hotelReconciliations/{commission_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Required. Output only. The commission ID is Google's ID for this booking.
     * Every booking event is assigned a Commission ID to help you match it to a
     * guest stay.
     *
     * Generated from protobuf field <code>string commission_id = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCommissionId()
    {
        return $this->commission_id;
    }

    /**
     * Required. Output only. The commission ID is Google's ID for this booking.
     * Every booking event is assigned a Commission ID to help you match it to a
     * guest stay.
     *
     * Generated from protobuf field <code>string commission_id = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCommissionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->commission_id = $var;

        return $this;
    }

    /**
     * Output only. The order ID is the identifier for this booking as provided in
     * the 'transaction_id' parameter of the conversion tracking tag.
     *
     * Generated from protobuf field <code>string order_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Output only. The order ID is the identifier for this booking as provided in
     * the 'transaction_id' parameter of the conversion tracking tag.
     *
     * Generated from protobuf field <code>string order_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;

        return $this;
    }

    /**
     * Output only. The resource name for the Campaign associated with the
     * conversion.
     *
     * Generated from protobuf field <code>string campaign = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Output only. The resource name for the Campaign associated with the
     * conversion.
     *
     * Generated from protobuf field <code>string campaign = 11 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Output only. Identifier for the Hotel Center account which provides the
     * rates for the Hotel campaign.
     *
     * Generated from protobuf field <code>int64 hotel_center_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getHotelCenterId()
    {
        return $this->hotel_center_id;
    }

    /**
     * Output only. Identifier for the Hotel Center account which provides the
     * rates for the Hotel campaign.
     *
     * Generated from protobuf field <code>int64 hotel_center_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setHotelCenterId($var)
    {
        GPBUtil::checkInt64($var);
        $this->hotel_center_id = $var;

        return $this;
    }

    /**
     * Output only. Unique identifier for the booked property, as provided in the
     * Hotel Center feed. The hotel ID comes from the 'ID' parameter of the
     * conversion tracking tag.
     *
     * Generated from protobuf field <code>string hotel_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getHotelId()
    {
        return $this->hotel_id;
    }

    /**
     * Output only. Unique identifier for the booked property, as provided in the
     * Hotel Center feed. The hotel ID comes from the 'ID' parameter of the
     * conversion tracking tag.
     *
     * Generated from protobuf field <code>string hotel_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setHotelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->hotel_id = $var;

        return $this;
    }

    /**
     * Output only. Check-in date recorded when the booking is made. If the
     * check-in date is modified at reconciliation, the revised date will then
     * take the place of the original date in this column. Format is YYYY-MM-DD.
     *
     * Generated from protobuf field <code>string check_in_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCheckInDate()
    {
        return $this->check_in_date;
    }

    /**
     * Output only. Check-in date recorded when the booking is made. If the
     * check-in date is modified at reconciliation, the revised date will then
     * take the place of the original date in this column. Format is YYYY-MM-DD.
     *
     * Generated from protobuf field <code>string check_in_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCheckInDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->check_in_date = $var;

        return $this;
    }

    /**
     * Output only. Check-out date recorded when the booking is made. If the
     * check-in date is modified at reconciliation, the revised date will then
     * take the place of the original date in this column. Format is YYYY-MM-DD.
     *
     * Generated from protobuf field <code>string check_out_date = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCheckOutDate()
    {
        return $this->check_out_date;
    }

    /**
     * Output only. Check-out date recorded when the booking is made. If the
     * check-in date is modified at reconciliation, the revised date will then
     * take the place of the original date in this column. Format is YYYY-MM-DD.
     *
     * Generated from protobuf field <code>string check_out_date = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCheckOutDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->check_out_date = $var;

        return $this;
    }

    /**
     * Required. Output only. Reconciled value is the final value of a booking as
     * paid by the guest. If original booking value changes for any reason, such
     * as itinerary changes or room upsells, the reconciled value should be the
     * full final amount collected. If a booking is canceled, the reconciled value
     * should include the value of any cancellation fees or non-refundable nights
     * charged. Value is in millionths of the base unit currency. For example,
     * $12.35 would be represented as 12350000. Currency unit is in the default
     * customer currency.
     *
     * Generated from protobuf field <code>int64 reconciled_value_micros = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getReconciledValueMicros()
    {
        return $this->reconciled_value_micros;
    }

    /**
     * Required. Output only. Reconciled value is the final value of a booking as
     * paid by the guest. If original booking value changes for any reason, such
     * as itinerary changes or room upsells, the reconciled value should be the
     * full final amount collected. If a booking is canceled, the reconciled value
     * should include the value of any cancellation fees or non-refundable nights
     * charged. Value is in millionths of the base unit currency. For example,
     * $12.35 would be represented as 12350000. Currency unit is in the default
     * customer currency.
     *
     * Generated from protobuf field <code>int64 reconciled_value_micros = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setReconciledValueMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->reconciled_value_micros = $var;

        return $this;
    }

    /**
     * Output only. Whether a given booking has been billed. Once billed, a
     * booking can't be modified.
     *
     * Generated from protobuf field <code>bool billed = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getBilled()
    {
        return $this->billed;
    }

    /**
     * Output only. Whether a given booking has been billed. Once billed, a
     * booking can't be modified.
     *
     * Generated from protobuf field <code>bool billed = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setBilled($var)
    {
        GPBUtil::checkBool($var);
        $this->billed = $var;

        return $this;
    }

    /**
     * Required. Output only. Current status of a booking with regards to
     * reconciliation and billing. Bookings should be reconciled within 45 days
     * after the check-out date. Any booking not reconciled within 45 days will be
     * billed at its original value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.HotelReconciliationStatusEnum.HotelReconciliationStatus status = 10 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Required. Output only. Current status of a booking with regards to
     * reconciliation and billing. Bookings should be reconciled within 45 days
     * after the check-out date. Any booking not reconciled within 45 days will be
     * billed at its original value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.HotelReconciliationStatusEnum.HotelReconciliationStatus status = 10 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\HotelReconciliationStatusEnum\HotelReconciliationStatus::class);
        $this->status = $var;

        return $this;
    }

}

