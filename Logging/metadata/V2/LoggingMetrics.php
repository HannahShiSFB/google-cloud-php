<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace GPBMetadata\Google\Logging\V2;

class LoggingMetrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Distribution::initOnce();
        \GPBMetadata\Google\Api\Metric::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acb0f0a27676f6f676c652f6c6f6767696e672f76322f6c6f6767696e67" .
            "5f6d6574726963732e70726f746f1211676f6f676c652e6c6f6767696e67" .
            "2e76321a1d676f6f676c652f6170692f646973747269627574696f6e2e70" .
            "726f746f1a17676f6f676c652f6170692f6d65747269632e70726f746f1a" .
            "1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20" .
            "676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f" .
            "746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e" .
            "70726f746f22b1030a094c6f674d6574726963120c0a046e616d65180120" .
            "01280912130a0b6465736372697074696f6e180220012809120e0a066669" .
            "6c74657218032001280912370a116d65747269635f64657363726970746f" .
            "7218052001280b321c2e676f6f676c652e6170692e4d6574726963446573" .
            "63726970746f7212170a0f76616c75655f657874726163746f7218062001" .
            "2809124b0a106c6162656c5f657874726163746f727318072003280b3231" .
            "2e676f6f676c652e6c6f6767696e672e76322e4c6f674d65747269632e4c" .
            "6162656c457874726163746f7273456e747279123e0a0e6275636b65745f" .
            "6f7074696f6e7318082001280b32262e676f6f676c652e6170692e446973" .
            "747269627574696f6e2e4275636b65744f7074696f6e73123c0a07766572" .
            "73696f6e18042001280e32272e676f6f676c652e6c6f6767696e672e7632" .
            "2e4c6f674d65747269632e41706956657273696f6e420218011a360a144c" .
            "6162656c457874726163746f7273456e747279120b0a036b657918012001" .
            "2809120d0a0576616c75651802200128093a023801221c0a0a4170695665" .
            "7273696f6e12060a025632100012060a0256311001224e0a154c6973744c" .
            "6f674d65747269637352657175657374120e0a06706172656e7418012001" .
            "280912120a0a706167655f746f6b656e18022001280912110a0970616765" .
            "5f73697a6518032001280522600a164c6973744c6f674d65747269637352" .
            "6573706f6e7365122d0a076d65747269637318012003280b321c2e676f6f" .
            "676c652e6c6f6767696e672e76322e4c6f674d657472696312170a0f6e65" .
            "78745f706167655f746f6b656e180220012809222a0a134765744c6f674d" .
            "65747269635265717565737412130a0b6d65747269635f6e616d65180120" .
            "01280922560a164372656174654c6f674d65747269635265717565737412" .
            "0e0a06706172656e74180120012809122c0a066d65747269631802200128" .
            "0b321c2e676f6f676c652e6c6f6767696e672e76322e4c6f674d65747269" .
            "63225b0a165570646174654c6f674d65747269635265717565737412130a" .
            "0b6d65747269635f6e616d65180120012809122c0a066d65747269631802" .
            "2001280b321c2e676f6f676c652e6c6f6767696e672e76322e4c6f674d65" .
            "74726963222d0a1644656c6574654c6f674d657472696352657175657374" .
            "12130a0b6d65747269635f6e616d6518012001280932d4050a104d657472" .
            "696373536572766963655632128e010a0e4c6973744c6f674d6574726963" .
            "7312282e676f6f676c652e6c6f6767696e672e76322e4c6973744c6f674d" .
            "657472696373526571756573741a292e676f6f676c652e6c6f6767696e67" .
            "2e76322e4c6973744c6f674d657472696373526573706f6e7365222782d3" .
            "e4930221121f2f76322f7b706172656e743d70726f6a656374732f2a7d2f" .
            "6d6574726963731284010a0c4765744c6f674d657472696312262e676f6f" .
            "676c652e6c6f6767696e672e76322e4765744c6f674d6574726963526571" .
            "756573741a1c2e676f6f676c652e6c6f6767696e672e76322e4c6f674d65" .
            "74726963222e82d3e493022812262f76322f7b6d65747269635f6e616d65" .
            "3d70726f6a656374732f2a2f6d6574726963732f2a7d128b010a0f437265" .
            "6174654c6f674d657472696312292e676f6f676c652e6c6f6767696e672e" .
            "76322e4372656174654c6f674d6574726963526571756573741a1c2e676f" .
            "6f676c652e6c6f6767696e672e76322e4c6f674d6574726963222f82d3e4" .
            "930229221f2f76322f7b706172656e743d70726f6a656374732f2a7d2f6d" .
            "6574726963733a066d65747269631292010a0f5570646174654c6f674d65" .
            "7472696312292e676f6f676c652e6c6f6767696e672e76322e5570646174" .
            "654c6f674d6574726963526571756573741a1c2e676f6f676c652e6c6f67" .
            "67696e672e76322e4c6f674d6574726963223682d3e49302301a262f7632" .
            "2f7b6d65747269635f6e616d653d70726f6a656374732f2a2f6d65747269" .
            "63732f2a7d3a066d65747269631284010a0f44656c6574654c6f674d6574" .
            "72696312292e676f6f676c652e6c6f6767696e672e76322e44656c657465" .
            "4c6f674d6574726963526571756573741a162e676f6f676c652e70726f74" .
            "6f6275662e456d707479222e82d3e49302282a262f76322f7b6d65747269" .
            "635f6e616d653d70726f6a656374732f2a2f6d6574726963732f2a7d429f" .
            "010a15636f6d2e676f6f676c652e6c6f6767696e672e763242134c6f6767" .
            "696e674d65747269637350726f746f50015a38676f6f676c652e676f6c61" .
            "6e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6c6f67" .
            "67696e672f76323b6c6f6767696e67f80101aa0217476f6f676c652e436c" .
            "6f75642e4c6f6767696e672e5632ca0217476f6f676c655c436c6f75645c" .
            "4c6f6767696e675c5632620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

