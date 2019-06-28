<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/document.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message that can hold any of the supported value types.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.Value</code>
 */
final class Value extends \Google\Protobuf\Internal\Message
{
    protected $value_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $null_value
     *           A null value.
     *     @type bool $boolean_value
     *           A boolean value.
     *     @type int|string $integer_value
     *           An integer value.
     *     @type float $double_value
     *           A double value.
     *     @type \Google\Protobuf\Timestamp $timestamp_value
     *           A timestamp value.
     *           Precise only to microseconds. When stored, any additional precision is
     *           rounded down.
     *     @type string $string_value
     *           A string value.
     *           The string, represented as UTF-8, must not exceed 1 MiB - 89 bytes.
     *           Only the first 1,500 bytes of the UTF-8 representation are considered by
     *           queries.
     *     @type string $bytes_value
     *           A bytes value.
     *           Must not exceed 1 MiB - 89 bytes.
     *           Only the first 1,500 bytes are considered by queries.
     *     @type string $reference_value
     *           A reference to a document. For example:
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *     @type \Google\Type\LatLng $geo_point_value
     *           A geo point value representing a point on the surface of Earth.
     *     @type \Google\Cloud\Firestore\V1beta1\ArrayValue $array_value
     *           An array value.
     *           Cannot directly contain another array value, though can contain an
     *           map which contains another array.
     *     @type \Google\Cloud\Firestore\V1beta1\MapValue $map_value
     *           A map value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * A null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 11;</code>
     * @return int
     */
    public function getNullValue()
    {
        return $this->readOneof(11);
    }

    /**
     * A null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setNullValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\NullValue::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A boolean value.
     *
     * Generated from protobuf field <code>bool boolean_value = 1;</code>
     * @return bool
     */
    public function getBooleanValue()
    {
        return $this->readOneof(1);
    }

    /**
     * A boolean value.
     *
     * Generated from protobuf field <code>bool boolean_value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setBooleanValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An integer value.
     *
     * Generated from protobuf field <code>int64 integer_value = 2;</code>
     * @return int|string
     */
    public function getIntegerValue()
    {
        return $this->readOneof(2);
    }

    /**
     * An integer value.
     *
     * Generated from protobuf field <code>int64 integer_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntegerValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A double value.
     *
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(3);
    }

    /**
     * A double value.
     *
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A timestamp value.
     * Precise only to microseconds. When stored, any additional precision is
     * rounded down.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimestampValue()
    {
        return $this->readOneof(10);
    }

    /**
     * A timestamp value.
     * Precise only to microseconds. When stored, any additional precision is
     * rounded down.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestampValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * A string value.
     * The string, represented as UTF-8, must not exceed 1 MiB - 89 bytes.
     * Only the first 1,500 bytes of the UTF-8 representation are considered by
     * queries.
     *
     * Generated from protobuf field <code>string string_value = 17;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(17);
    }

    /**
     * A string value.
     * The string, represented as UTF-8, must not exceed 1 MiB - 89 bytes.
     * Only the first 1,500 bytes of the UTF-8 representation are considered by
     * queries.
     *
     * Generated from protobuf field <code>string string_value = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * A bytes value.
     * Must not exceed 1 MiB - 89 bytes.
     * Only the first 1,500 bytes are considered by queries.
     *
     * Generated from protobuf field <code>bytes bytes_value = 18;</code>
     * @return string
     */
    public function getBytesValue()
    {
        return $this->readOneof(18);
    }

    /**
     * A bytes value.
     * Must not exceed 1 MiB - 89 bytes.
     * Only the first 1,500 bytes are considered by queries.
     *
     * Generated from protobuf field <code>bytes bytes_value = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setBytesValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * A reference to a document. For example:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string reference_value = 5;</code>
     * @return string
     */
    public function getReferenceValue()
    {
        return $this->readOneof(5);
    }

    /**
     * A reference to a document. For example:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string reference_value = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A geo point value representing a point on the surface of Earth.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_point_value = 8;</code>
     * @return \Google\Type\LatLng
     */
    public function getGeoPointValue()
    {
        return $this->readOneof(8);
    }

    /**
     * A geo point value representing a point on the surface of Earth.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_point_value = 8;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setGeoPointValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * An array value.
     * Cannot directly contain another array value, though can contain an
     * map which contains another array.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.ArrayValue array_value = 9;</code>
     * @return \Google\Cloud\Firestore\V1beta1\ArrayValue
     */
    public function getArrayValue()
    {
        return $this->readOneof(9);
    }

    /**
     * An array value.
     * Cannot directly contain another array value, though can contain an
     * map which contains another array.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.ArrayValue array_value = 9;</code>
     * @param \Google\Cloud\Firestore\V1beta1\ArrayValue $var
     * @return $this
     */
    public function setArrayValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\ArrayValue::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * A map value.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.MapValue map_value = 6;</code>
     * @return \Google\Cloud\Firestore\V1beta1\MapValue
     */
    public function getMapValue()
    {
        return $this->readOneof(6);
    }

    /**
     * A map value.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.MapValue map_value = 6;</code>
     * @param \Google\Cloud\Firestore\V1beta1\MapValue $var
     * @return $this
     */
    public function setMapValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\MapValue::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->whichOneof("value_type");
    }

}

