<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/common.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A precondition on a document, used for conditional operations.
 *
 * Generated from protobuf message <code>google.firestore.v1.Precondition</code>
 */
final class Precondition extends \Google\Protobuf\Internal\Message
{
    protected $condition_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $exists
     *           When set to `true`, the target document must exist.
     *           When set to `false`, the target document must not exist.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           When set, the target document must exist and have been last updated at
     *           that time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * When set to `true`, the target document must exist.
     * When set to `false`, the target document must not exist.
     *
     * Generated from protobuf field <code>bool exists = 1;</code>
     * @return bool
     */
    public function getExists()
    {
        return $this->readOneof(1);
    }

    /**
     * When set to `true`, the target document must exist.
     * When set to `false`, the target document must not exist.
     *
     * Generated from protobuf field <code>bool exists = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExists($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * When set, the target document must exist and have been last updated at
     * that time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return $this->readOneof(2);
    }

    /**
     * When set, the target document must exist and have been last updated at
     * that time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConditionType()
    {
        return $this->whichOneof("condition_type");
    }

}

