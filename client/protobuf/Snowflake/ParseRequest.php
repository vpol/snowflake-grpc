<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: snowflake.proto

namespace Snowflake;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>snowflake.ParseRequest</code>
 */
class ParseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * snowflake id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    private $id = 0;

    public function __construct() {
        \GPBMetadata\Snowflake::initOnce();
        parent::__construct();
    }

    /**
     * snowflake id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * snowflake id
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

}

