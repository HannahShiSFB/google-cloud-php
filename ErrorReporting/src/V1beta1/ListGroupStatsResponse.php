<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains a set of requested error group stats.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ListGroupStatsResponse</code>
 */
final class ListGroupStatsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The error group stats which match the given request.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.ErrorGroupStats error_group_stats = 1;</code>
     */
    private $error_group_stats;
    /**
     * If non-empty, more results are available.
     * Pass this token, along with the same query parameters as the first
     * request, to view the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * The timestamp specifies the start time to which the request was restricted.
     * The start time is set based on the requested time range. It may be adjusted
     * to a later time if a project has exceeded the storage quota and older data
     * has been deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_range_begin = 4;</code>
     */
    private $time_range_begin = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ErrorGroupStats[]|\Google\Protobuf\Internal\RepeatedField $error_group_stats
     *           The error group stats which match the given request.
     *     @type string $next_page_token
     *           If non-empty, more results are available.
     *           Pass this token, along with the same query parameters as the first
     *           request, to view the next page of results.
     *     @type \Google\Protobuf\Timestamp $time_range_begin
     *           The timestamp specifies the start time to which the request was restricted.
     *           The start time is set based on the requested time range. It may be adjusted
     *           to a later time if a project has exceeded the storage quota and older data
     *           has been deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The error group stats which match the given request.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.ErrorGroupStats error_group_stats = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorGroupStats()
    {
        return $this->error_group_stats;
    }

    /**
     * The error group stats which match the given request.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.ErrorGroupStats error_group_stats = 1;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ErrorGroupStats[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorGroupStats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ErrorReporting\V1beta1\ErrorGroupStats::class);
        $this->error_group_stats = $arr;

        return $this;
    }

    /**
     * If non-empty, more results are available.
     * Pass this token, along with the same query parameters as the first
     * request, to view the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If non-empty, more results are available.
     * Pass this token, along with the same query parameters as the first
     * request, to view the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * The timestamp specifies the start time to which the request was restricted.
     * The start time is set based on the requested time range. It may be adjusted
     * to a later time if a project has exceeded the storage quota and older data
     * has been deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_range_begin = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimeRangeBegin()
    {
        return $this->time_range_begin;
    }

    /**
     * The timestamp specifies the start time to which the request was restricted.
     * The start time is set based on the requested time range. It may be adjusted
     * to a later time if a project has exceeded the storage quota and older data
     * has been deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time_range_begin = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimeRangeBegin($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time_range_begin = $var;

        return $this;
    }

}

