<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/customer_manager_link_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CustomerManagerLinkService.MutateCustomerManagerLink][google.ads.googleads.v17.services.CustomerManagerLinkService.MutateCustomerManagerLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateCustomerManagerLinkRequest</code>
 */
class MutateCustomerManagerLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer whose customer manager links are being
     * modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The list of operations to perform on individual customer manager
     * links.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.CustomerManagerLinkOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $operations;
    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                                            $customerId Required. The ID of the customer whose customer manager links are being
     *                                                                                      modified.
     * @param \Google\Ads\GoogleAds\V17\Services\CustomerManagerLinkOperation[] $operations Required. The list of operations to perform on individual customer manager
     *                                                                                      links.
     *
     * @return \Google\Ads\GoogleAds\V17\Services\MutateCustomerManagerLinkRequest
     *
     * @experimental
     */
    public static function build(string $customerId, array $operations): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setOperations($operations);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer whose customer manager links are being
     *           modified.
     *     @type array<\Google\Ads\GoogleAds\V17\Services\CustomerManagerLinkOperation>|\Google\Protobuf\Internal\RepeatedField $operations
     *           Required. The list of operations to perform on individual customer manager
     *           links.
     *     @type bool $validate_only
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\CustomerManagerLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer whose customer manager links are being
     * modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer whose customer manager links are being
     * modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The list of operations to perform on individual customer manager
     * links.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.CustomerManagerLinkOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Required. The list of operations to perform on individual customer manager
     * links.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.CustomerManagerLinkOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V17\Services\CustomerManagerLinkOperation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\CustomerManagerLinkOperation::class);
        $this->operations = $arr;

        return $this;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

