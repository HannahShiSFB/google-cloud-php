<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to an async batch file annotation request.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.AsyncBatchAnnotateFilesResponse</code>
 */
final class AsyncBatchAnnotateFilesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of file annotation responses, one for each request in
     * AsyncBatchAnnotateFilesRequest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AsyncAnnotateFileResponse responses = 1;</code>
     */
    private $responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\AsyncAnnotateFileResponse[]|\Google\Protobuf\Internal\RepeatedField $responses
     *           The list of file annotation responses, one for each request in
     *           AsyncBatchAnnotateFilesRequest.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of file annotation responses, one for each request in
     * AsyncBatchAnnotateFilesRequest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AsyncAnnotateFileResponse responses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * The list of file annotation responses, one for each request in
     * AsyncBatchAnnotateFilesRequest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AsyncAnnotateFileResponse responses = 1;</code>
     * @param \Google\Cloud\Vision\V1\AsyncAnnotateFileResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\AsyncAnnotateFileResponse::class);
        $this->responses = $arr;

        return $this;
    }

}

