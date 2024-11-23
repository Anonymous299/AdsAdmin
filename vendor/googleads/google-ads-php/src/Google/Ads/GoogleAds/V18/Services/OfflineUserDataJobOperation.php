<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/offline_user_data_job_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operation to be made for the AddOfflineUserDataJobOperationsRequest.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.OfflineUserDataJobOperation</code>
 */
class OfflineUserDataJobOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V18\Common\UserData $create
     *           Add the provided data to the transaction. Data cannot be retrieved after
     *           being uploaded.
     *     @type \Google\Ads\GoogleAds\V18\Common\UserData $remove
     *           Remove the provided data from the transaction. Data cannot be retrieved
     *           after being uploaded.
     *     @type bool $remove_all
     *           Remove all previously provided data. This is only supported for Customer
     *           Match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\OfflineUserDataJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Add the provided data to the transaction. Data cannot be retrieved after
     * being uploaded.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.UserData create = 1;</code>
     * @return \Google\Ads\GoogleAds\V18\Common\UserData|null
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Add the provided data to the transaction. Data cannot be retrieved after
     * being uploaded.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.UserData create = 1;</code>
     * @param \Google\Ads\GoogleAds\V18\Common\UserData $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Common\UserData::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove the provided data from the transaction. Data cannot be retrieved
     * after being uploaded.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.UserData remove = 2;</code>
     * @return \Google\Ads\GoogleAds\V18\Common\UserData|null
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    public function hasRemove()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remove the provided data from the transaction. Data cannot be retrieved
     * after being uploaded.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.UserData remove = 2;</code>
     * @param \Google\Ads\GoogleAds\V18\Common\UserData $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Common\UserData::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Remove all previously provided data. This is only supported for Customer
     * Match.
     *
     * Generated from protobuf field <code>bool remove_all = 3;</code>
     * @return bool
     */
    public function getRemoveAll()
    {
        return $this->readOneof(3);
    }

    public function hasRemoveAll()
    {
        return $this->hasOneof(3);
    }

    /**
     * Remove all previously provided data. This is only supported for Customer
     * Match.
     *
     * Generated from protobuf field <code>bool remove_all = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRemoveAll($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

