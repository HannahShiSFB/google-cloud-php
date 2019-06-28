<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateNodePoolRequest creates a node pool for a cluster.
 *
 * Generated from protobuf message <code>google.container.v1.CreateNodePoolRequest</code>
 */
final class CreateNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     */
    private $project_id = '';
    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     */
    private $zone = '';
    /**
     * Deprecated. The name of the cluster.
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     */
    private $cluster_id = '';
    /**
     * The node pool to create.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool node_pool = 4;</code>
     */
    private $node_pool = null;
    /**
     * The parent (project, location, cluster id) where the node pool will be
     * created. Specified in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 6;</code>
     */
    private $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Deprecated. The Google Developers Console [project ID or project
     *           number](https://developers.google.com/console/help/new/#projectnumber).
     *           This field has been deprecated and replaced by the parent field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](/compute/docs/zones#available) in which the cluster
     *           resides.
     *           This field has been deprecated and replaced by the parent field.
     *     @type string $cluster_id
     *           Deprecated. The name of the cluster.
     *           This field has been deprecated and replaced by the parent field.
     *     @type \Google\Cloud\Container\V1\NodePool $node_pool
     *           The node pool to create.
     *     @type string $parent
     *           The parent (project, location, cluster id) where the node pool will be
     *           created. Specified in the format
     *           'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the cluster.
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Deprecated. The name of the cluster.
     * This field has been deprecated and replaced by the parent field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * The node pool to create.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool node_pool = 4;</code>
     * @return \Google\Cloud\Container\V1\NodePool
     */
    public function getNodePool()
    {
        return $this->node_pool;
    }

    /**
     * The node pool to create.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool node_pool = 4;</code>
     * @param \Google\Cloud\Container\V1\NodePool $var
     * @return $this
     */
    public function setNodePool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePool::class);
        $this->node_pool = $var;

        return $this;
    }

    /**
     * The parent (project, location, cluster id) where the node pool will be
     * created. Specified in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 6;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent (project, location, cluster id) where the node pool will be
     * created. Specified in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

