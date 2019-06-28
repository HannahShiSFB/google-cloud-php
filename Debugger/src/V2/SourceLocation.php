<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a location in the source code.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.SourceLocation</code>
 */
final class SourceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Path to the source file within the source context of the target binary.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    private $path = '';
    /**
     * Line inside the file. The first line in the file has the value `1`.
     *
     * Generated from protobuf field <code>int32 line = 2;</code>
     */
    private $line = 0;
    /**
     * Column within a line. The first column in a line as the value `1`.
     * Agents that do not support setting breakpoints on specific columns ignore
     * this field.
     *
     * Generated from protobuf field <code>int32 column = 3;</code>
     */
    private $column = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           Path to the source file within the source context of the target binary.
     *     @type int $line
     *           Line inside the file. The first line in the file has the value `1`.
     *     @type int $column
     *           Column within a line. The first column in a line as the value `1`.
     *           Agents that do not support setting breakpoints on specific columns ignore
     *           this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Path to the source file within the source context of the target binary.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Path to the source file within the source context of the target binary.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Line inside the file. The first line in the file has the value `1`.
     *
     * Generated from protobuf field <code>int32 line = 2;</code>
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Line inside the file. The first line in the file has the value `1`.
     *
     * Generated from protobuf field <code>int32 line = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt32($var);
        $this->line = $var;

        return $this;
    }

    /**
     * Column within a line. The first column in a line as the value `1`.
     * Agents that do not support setting breakpoints on specific columns ignore
     * this field.
     *
     * Generated from protobuf field <code>int32 column = 3;</code>
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Column within a line. The first column in a line as the value `1`.
     * Agents that do not support setting breakpoints on specific columns ignore
     * this field.
     *
     * Generated from protobuf field <code>int32 column = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkInt32($var);
        $this->column = $var;

        return $this;
    }

}

