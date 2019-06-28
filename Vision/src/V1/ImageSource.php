<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * External image source (Google Cloud Storage or web URL image location).
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ImageSource</code>
 */
final class ImageSource extends \Google\Protobuf\Internal\Message
{
    /**
     * **Use `image_uri` instead.**
     * The Google Cloud Storage  URI of the form
     * `gs://bucket_name/object_name`. Object versioning is not supported. See
     * [Google Cloud Storage Request
     * URIs](https://cloud.google.com/storage/docs/reference-uris) for more info.
     *
     * Generated from protobuf field <code>string gcs_image_uri = 1;</code>
     */
    private $gcs_image_uri = '';
    /**
     * The URI of the source image. Can be either:
     * 1. A Google Cloud Storage URI of the form
     *    `gs://bucket_name/object_name`. Object versioning is not supported. See
     *    [Google Cloud Storage Request
     *    URIs](https://cloud.google.com/storage/docs/reference-uris) for more
     *    info.
     * 2. A publicly-accessible image HTTP/HTTPS URL. When fetching images from
     *    HTTP/HTTPS URLs, Google cannot guarantee that the request will be
     *    completed. Your request may fail if the specified host denies the
     *    request (e.g. due to request throttling or DOS prevention), or if Google
     *    throttles requests to the site for abuse prevention. You should not
     *    depend on externally-hosted images for production applications.
     * When both `gcs_image_uri` and `image_uri` are specified, `image_uri` takes
     * precedence.
     *
     * Generated from protobuf field <code>string image_uri = 2;</code>
     */
    private $image_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_image_uri
     *           **Use `image_uri` instead.**
     *           The Google Cloud Storage  URI of the form
     *           `gs://bucket_name/object_name`. Object versioning is not supported. See
     *           [Google Cloud Storage Request
     *           URIs](https://cloud.google.com/storage/docs/reference-uris) for more info.
     *     @type string $image_uri
     *           The URI of the source image. Can be either:
     *           1. A Google Cloud Storage URI of the form
     *              `gs://bucket_name/object_name`. Object versioning is not supported. See
     *              [Google Cloud Storage Request
     *              URIs](https://cloud.google.com/storage/docs/reference-uris) for more
     *              info.
     *           2. A publicly-accessible image HTTP/HTTPS URL. When fetching images from
     *              HTTP/HTTPS URLs, Google cannot guarantee that the request will be
     *              completed. Your request may fail if the specified host denies the
     *              request (e.g. due to request throttling or DOS prevention), or if Google
     *              throttles requests to the site for abuse prevention. You should not
     *              depend on externally-hosted images for production applications.
     *           When both `gcs_image_uri` and `image_uri` are specified, `image_uri` takes
     *           precedence.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * **Use `image_uri` instead.**
     * The Google Cloud Storage  URI of the form
     * `gs://bucket_name/object_name`. Object versioning is not supported. See
     * [Google Cloud Storage Request
     * URIs](https://cloud.google.com/storage/docs/reference-uris) for more info.
     *
     * Generated from protobuf field <code>string gcs_image_uri = 1;</code>
     * @return string
     */
    public function getGcsImageUri()
    {
        return $this->gcs_image_uri;
    }

    /**
     * **Use `image_uri` instead.**
     * The Google Cloud Storage  URI of the form
     * `gs://bucket_name/object_name`. Object versioning is not supported. See
     * [Google Cloud Storage Request
     * URIs](https://cloud.google.com/storage/docs/reference-uris) for more info.
     *
     * Generated from protobuf field <code>string gcs_image_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_image_uri = $var;

        return $this;
    }

    /**
     * The URI of the source image. Can be either:
     * 1. A Google Cloud Storage URI of the form
     *    `gs://bucket_name/object_name`. Object versioning is not supported. See
     *    [Google Cloud Storage Request
     *    URIs](https://cloud.google.com/storage/docs/reference-uris) for more
     *    info.
     * 2. A publicly-accessible image HTTP/HTTPS URL. When fetching images from
     *    HTTP/HTTPS URLs, Google cannot guarantee that the request will be
     *    completed. Your request may fail if the specified host denies the
     *    request (e.g. due to request throttling or DOS prevention), or if Google
     *    throttles requests to the site for abuse prevention. You should not
     *    depend on externally-hosted images for production applications.
     * When both `gcs_image_uri` and `image_uri` are specified, `image_uri` takes
     * precedence.
     *
     * Generated from protobuf field <code>string image_uri = 2;</code>
     * @return string
     */
    public function getImageUri()
    {
        return $this->image_uri;
    }

    /**
     * The URI of the source image. Can be either:
     * 1. A Google Cloud Storage URI of the form
     *    `gs://bucket_name/object_name`. Object versioning is not supported. See
     *    [Google Cloud Storage Request
     *    URIs](https://cloud.google.com/storage/docs/reference-uris) for more
     *    info.
     * 2. A publicly-accessible image HTTP/HTTPS URL. When fetching images from
     *    HTTP/HTTPS URLs, Google cannot guarantee that the request will be
     *    completed. Your request may fail if the specified host denies the
     *    request (e.g. due to request throttling or DOS prevention), or if Google
     *    throttles requests to the site for abuse prevention. You should not
     *    depend on externally-hosted images for production applications.
     * When both `gcs_image_uri` and `image_uri` are specified, `image_uri` takes
     * precedence.
     *
     * Generated from protobuf field <code>string image_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_uri = $var;

        return $this;
    }

}

