<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\PubSub\Tests\System;

use Google\Cloud\PubSub\PubSubClient;
use Google\Cloud\Core\Testing\System\SystemTestCase;

class PubSubTestCase extends SystemTestCase
{
    const TESTING_PREFIX = 'gcloud_testing_';

    protected static $grpcClient;
    protected static $restClient;
    protected static $topic;
    private static $hasSetUp = false;

    public function clientProvider()
    {
        self::setUpBeforeClass();

        return [
            'grpc' => [self::$restClient],
            'rest' => [self::$grpcClient]
        ];
    }

    public static function setUpBeforeClass()
    {
        if (self::$hasSetUp) {
            return;
        }

        $keyFilePath = getenv('GOOGLE_CLOUD_PHP_TESTS_KEY_PATH');
        self::$restClient = new PubSubClient([
            'keyFilePath' => $keyFilePath,
            'transport' => 'rest'
        ]);
        self::$grpcClient = new PubSubClient([
            'keyFilePath' => $keyFilePath,
            'transport' => 'grpc'
        ]);
        self::$hasSetUp = true;
    }
}
