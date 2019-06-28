<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Firestore.Commit][google.firestore.v1.Firestore.Commit].
 *
 * Generated from protobuf message <code>google.firestore.v1.CommitResponse</code>
 */
final class CommitResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The result of applying the writes.
     * This i-th write result corresponds to the i-th write in the
     * request.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.WriteResult write_results = 1;</code>
     */
    private $write_results;
    /**
     * The time at which the commit occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 2;</code>
     */
    private $commit_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1\WriteResult[]|\Google\Protobuf\Internal\RepeatedField $write_results
     *           The result of applying the writes.
     *           This i-th write result corresponds to the i-th write in the
     *           request.
     *     @type \Google\Protobuf\Timestamp $commit_time
     *           The time at which the commit occurred.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * The result of applying the writes.
     * This i-th write result corresponds to the i-th write in the
     * request.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.WriteResult write_results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWriteResults()
    {
        return $this->write_results;
    }

    /**
     * The result of applying the writes.
     * This i-th write result corresponds to the i-th write in the
     * request.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.WriteResult write_results = 1;</code>
     * @param \Google\Cloud\Firestore\V1\WriteResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWriteResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1\WriteResult::class);
        $this->write_results = $arr;

        return $this;
    }

    /**
     * The time at which the commit occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCommitTime()
    {
        return $this->commit_time;
    }

    /**
     * The time at which the commit occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCommitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->commit_time = $var;

        return $this;
    }

}

