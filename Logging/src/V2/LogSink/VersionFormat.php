<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2\LogSink;

/**
 * Available log entry formats. Log entries can be written to
 * Logging in either format and can be exported in either format.
 * Version 2 is the preferred format.
 *
 * Protobuf type <code>google.logging.v2.LogSink.VersionFormat</code>
 */
class VersionFormat
{
    /**
     * An unspecified format version that will default to V2.
     *
     * Generated from protobuf enum <code>VERSION_FORMAT_UNSPECIFIED = 0;</code>
     */
    const VERSION_FORMAT_UNSPECIFIED = 0;
    /**
     * `LogEntry` version 2 format.
     *
     * Generated from protobuf enum <code>V2 = 1;</code>
     */
    const V2 = 1;
    /**
     * `LogEntry` version 1 format.
     *
     * Generated from protobuf enum <code>V1 = 2;</code>
     */
    const V1 = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VersionFormat::class, \Google\Cloud\Logging\V2\LogSink_VersionFormat::class);

