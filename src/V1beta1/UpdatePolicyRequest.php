<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/service.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [BinauthzManagementService.UpdatePolicy][].
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.UpdatePolicyRequest</code>
 */
class UpdatePolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A new or updated
     * [policy][google.cloud.binaryauthorization.v1beta1.Policy] value. The
     * service will overwrite the [policy
     * name][google.cloud.binaryauthorization.v1beta1.Policy.name] field with the
     * resource name in the request URL, in the format `projects/&#42;&#47;policy`.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.Policy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BinaryAuthorization\V1beta1\Policy $policy
     *           Required. A new or updated
     *           [policy][google.cloud.binaryauthorization.v1beta1.Policy] value. The
     *           service will overwrite the [policy
     *           name][google.cloud.binaryauthorization.v1beta1.Policy.name] field with the
     *           resource name in the request URL, in the format `projects/&#42;&#47;policy`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A new or updated
     * [policy][google.cloud.binaryauthorization.v1beta1.Policy] value. The
     * service will overwrite the [policy
     * name][google.cloud.binaryauthorization.v1beta1.Policy.name] field with the
     * resource name in the request URL, in the format `projects/&#42;&#47;policy`.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.Policy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BinaryAuthorization\V1beta1\Policy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * Required. A new or updated
     * [policy][google.cloud.binaryauthorization.v1beta1.Policy] value. The
     * service will overwrite the [policy
     * name][google.cloud.binaryauthorization.v1beta1.Policy.name] field with the
     * resource name in the request URL, in the format `projects/&#42;&#47;policy`.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.Policy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BinaryAuthorization\V1beta1\Policy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BinaryAuthorization\V1beta1\Policy::class);
        $this->policy = $var;

        return $this;
    }

}

