<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateClusterRequest creates a cluster.
 *
 * Generated from protobuf message <code>google.container.v1.CreateClusterRequest</code>
 */
final class CreateClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
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
     * A [cluster
     * resource](/container-engine/reference/rest/v1/projects.zones.clusters)
     *
     * Generated from protobuf field <code>.google.container.v1.Cluster cluster = 3;</code>
     */
    private $cluster = null;
    /**
     * The parent (project and location) where the cluster will be created.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
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
     *           number](https://support.google.com/cloud/answer/6158840).
     *           This field has been deprecated and replaced by the parent field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](/compute/docs/zones#available) in which the cluster
     *           resides.
     *           This field has been deprecated and replaced by the parent field.
     *     @type \Google\Cloud\Container\V1\Cluster $cluster
     *           A [cluster
     *           resource](/container-engine/reference/rest/v1/projects.zones.clusters)
     *     @type string $parent
     *           The parent (project and location) where the cluster will be created.
     *           Specified in the format 'projects/&#42;&#47;locations/&#42;'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
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
     * number](https://support.google.com/cloud/answer/6158840).
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
     * A [cluster
     * resource](/container-engine/reference/rest/v1/projects.zones.clusters)
     *
     * Generated from protobuf field <code>.google.container.v1.Cluster cluster = 3;</code>
     * @return \Google\Cloud\Container\V1\Cluster
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * A [cluster
     * resource](/container-engine/reference/rest/v1/projects.zones.clusters)
     *
     * Generated from protobuf field <code>.google.container.v1.Cluster cluster = 3;</code>
     * @param \Google\Cloud\Container\V1\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

    /**
     * The parent (project and location) where the cluster will be created.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent (project and location) where the cluster will be created.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
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

