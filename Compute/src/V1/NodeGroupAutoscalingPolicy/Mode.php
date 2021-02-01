<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NodeGroupAutoscalingPolicy;

use UnexpectedValueException;

/**
 * The autoscaling mode. Set to one of: ON, OFF, or ONLY_SCALE_OUT. For more information, see  Autoscaler modes.
 *
 * Protobuf type <code>google.cloud.compute.v1.NodeGroupAutoscalingPolicy.Mode</code>
 */
class Mode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MODE = 0;</code>
     */
    const UNDEFINED_MODE = 0;
    /**
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 102912635;</code>
     */
    const MODE_UNSPECIFIED = 102912635;
    /**
     * Generated from protobuf enum <code>OFF = 78159;</code>
     */
    const OFF = 78159;
    /**
     * Generated from protobuf enum <code>ON = 2527;</code>
     */
    const ON = 2527;
    /**
     * Generated from protobuf enum <code>ONLY_SCALE_OUT = 152713670;</code>
     */
    const ONLY_SCALE_OUT = 152713670;

    private static $valueToName = [
        self::UNDEFINED_MODE => 'UNDEFINED_MODE',
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::OFF => 'OFF',
        self::ON => 'ON',
        self::ONLY_SCALE_OUT => 'ONLY_SCALE_OUT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

