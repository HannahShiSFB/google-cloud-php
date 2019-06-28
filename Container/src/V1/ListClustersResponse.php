<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListClustersResponse is the result of ListClustersRequest.
 *
 * Generated from protobuf message <code>google.container.v1.ListClustersResponse</code>
 */
final class ListClustersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.Cluster clusters = 1;</code>
     */
    private $clusters;
    /**
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     *
     * Generated from protobuf field <code>repeated string missing_zones = 2;</code>
     */
    private $missing_zones;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\Cluster[]|\Google\Protobuf\Internal\RepeatedField $clusters
     *           A list of clusters in the project in the specified zone, or
     *           across all ones.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $missing_zones
     *           If any zones are listed here, the list of clusters returned
     *           may be missing those zones.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.Cluster clusters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.Cluster clusters = 1;</code>
     * @param \Google\Cloud\Container\V1\Cluster[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClusters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\Cluster::class);
        $this->clusters = $arr;

        return $this;
    }

    /**
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     *
     * Generated from protobuf field <code>repeated string missing_zones = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMissingZones()
    {
        return $this->missing_zones;
    }

    /**
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     *
     * Generated from protobuf field <code>repeated string missing_zones = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMissingZones($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->missing_zones = $arr;

        return $this;
    }

}

