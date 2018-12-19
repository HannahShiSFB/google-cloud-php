<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An option to the DocumentRef.Set call.
 *
 * Generated from protobuf message <code>tests.SetOption</code>
 */
class SetOption extends \Google\Protobuf\Internal\Message
{
    /**
     * if true, merge all fields ("fields" is ignored).
     *
     * Generated from protobuf field <code>bool all = 1;</code>
     */
    private $all = false;
    /**
     * field paths for a Merge option
     *
     * Generated from protobuf field <code>repeated .tests.FieldPath fields = 2;</code>
     */
    private $fields;

    public function __construct() {
        \Google\Cloud\Firestore\Tests\Conformance\FirestoreTestGpb::initOnce();
        parent::__construct();
    }

    /**
     * if true, merge all fields ("fields" is ignored).
     *
     * Generated from protobuf field <code>bool all = 1;</code>
     * @return bool
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * if true, merge all fields ("fields" is ignored).
     *
     * Generated from protobuf field <code>bool all = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkBool($var);
        $this->all = $var;

        return $this;
    }

    /**
     * field paths for a Merge option
     *
     * Generated from protobuf field <code>repeated .tests.FieldPath fields = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * field paths for a Merge option
     *
     * Generated from protobuf field <code>repeated .tests.FieldPath fields = 2;</code>
     * @param \Google\Cloud\Firestore\Tests\Conformance\FieldPath[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\Tests\Conformance\FieldPath::class);
        $this->fields = $arr;

        return $this;
    }

}
