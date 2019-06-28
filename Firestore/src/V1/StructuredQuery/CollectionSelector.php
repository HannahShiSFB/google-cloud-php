<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A selection of a collection, such as `messages as m1`.
 *
 * Generated from protobuf message <code>google.firestore.v1.StructuredQuery.CollectionSelector</code>
 */
final class CollectionSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * The collection ID.
     * When set, selects only collections with this ID.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     */
    private $collection_id = '';
    /**
     * When false, selects only collections that are immediate children of
     * the `parent` specified in the containing `RunQueryRequest`.
     * When true, selects all descendant collections.
     *
     * Generated from protobuf field <code>bool all_descendants = 3;</code>
     */
    private $all_descendants = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $collection_id
     *           The collection ID.
     *           When set, selects only collections with this ID.
     *     @type bool $all_descendants
     *           When false, selects only collections that are immediate children of
     *           the `parent` specified in the containing `RunQueryRequest`.
     *           When true, selects all descendant collections.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The collection ID.
     * When set, selects only collections with this ID.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     * @return string
     */
    public function getCollectionId()
    {
        return $this->collection_id;
    }

    /**
     * The collection ID.
     * When set, selects only collections with this ID.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->collection_id = $var;

        return $this;
    }

    /**
     * When false, selects only collections that are immediate children of
     * the `parent` specified in the containing `RunQueryRequest`.
     * When true, selects all descendant collections.
     *
     * Generated from protobuf field <code>bool all_descendants = 3;</code>
     * @return bool
     */
    public function getAllDescendants()
    {
        return $this->all_descendants;
    }

    /**
     * When false, selects only collections that are immediate children of
     * the `parent` specified in the containing `RunQueryRequest`.
     * When true, selects all descendant collections.
     *
     * Generated from protobuf field <code>bool all_descendants = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllDescendants($var)
    {
        GPBUtil::checkBool($var);
        $this->all_descendants = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CollectionSelector::class, \Google\Cloud\Firestore\V1\StructuredQuery_CollectionSelector::class);

