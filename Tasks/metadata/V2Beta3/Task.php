<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/task.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta3;

class Task
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Target::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adf070a25676f6f676c652f636c6f75642f7461736b732f763262657461" .
            "332f7461736b2e70726f746f121a676f6f676c652e636c6f75642e746173" .
            "6b732e763262657461331a27676f6f676c652f636c6f75642f7461736b73" .
            "2f763262657461332f7461726765742e70726f746f1a1f676f6f676c652f" .
            "70726f746f6275662f74696d657374616d702e70726f746f1a17676f6f67" .
            "6c652f7270632f7374617475732e70726f746f22ec030a045461736b120c" .
            "0a046e616d6518012001280912530a176170705f656e67696e655f687474" .
            "705f7265717565737418032001280b32302e676f6f676c652e636c6f7564" .
            "2e7461736b732e763262657461332e417070456e67696e65487474705265" .
            "7175657374480012310a0d7363686564756c655f74696d6518042001280b" .
            "321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122f" .
            "0a0b6372656174655f74696d6518052001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d7012160a0e64697370617463685f" .
            "636f756e7418062001280512160a0e726573706f6e73655f636f756e7418" .
            "0720012805123a0a0d66697273745f617474656d707418082001280b3223" .
            "2e676f6f676c652e636c6f75642e7461736b732e763262657461332e4174" .
            "74656d707412390a0c6c6173745f617474656d707418092001280b32232e" .
            "676f6f676c652e636c6f75642e7461736b732e763262657461332e417474" .
            "656d707412330a0476696577180a2001280e32252e676f6f676c652e636c" .
            "6f75642e7461736b732e763262657461332e5461736b2e5669657722310a" .
            "045669657712140a10564945575f554e535045434946494544100012090a" .
            "054241534943100112080a0446554c4c1002420e0a0c7061796c6f61645f" .
            "7479706522cf010a07417474656d707412310a0d7363686564756c655f74" .
            "696d6518012001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d7012310a0d64697370617463685f74696d6518022001280b" .
            "321a2e676f6f676c652e70726f746f6275662e54696d657374616d701231" .
            "0a0d726573706f6e73655f74696d6518032001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e54696d657374616d70122b0a0f726573706f6e73" .
            "655f73746174757318042001280b32122e676f6f676c652e7270632e5374" .
            "61747573426e0a1e636f6d2e676f6f676c652e636c6f75642e7461736b73" .
            "2e7632626574613342095461736b50726f746f50015a3f676f6f676c652e" .
            "676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561706973" .
            "2f636c6f75642f7461736b732f763262657461333b7461736b7362067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}
