<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeconnect/v1/connection.proto

namespace GPBMetadata\Google\Cloud\Apigeeconnect\V1;

class Connection
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
.google/cloud/apigeeconnect/v1/connection.protogoogle.cloud.apigeeconnect.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"~
ListConnectionsRequest=
parent (	B-�A�A\'
%apigeeconnect.googleapis.com/Endpoint
	page_size (

page_token (	"r
ListConnectionsResponse>
connections (2).google.cloud.apigeeconnect.v1.Connection
next_page_token (	"m

Connection
endpoint (	7
cluster (2&.google.cloud.apigeeconnect.v1.Cluster
stream_count ("\'
Cluster
name (	
region (	2�
ConnectionService�
ListConnections5.google.cloud.apigeeconnect.v1.ListConnectionsRequest6.google.cloud.apigeeconnect.v1.ListConnectionsResponse"@���1//v1/{parent=projects/*/endpoints/*}/connections�AparentP�Aapigeeconnect.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.apigeeconnect.v1BConnectionProtoPZJgoogle.golang.org/genproto/googleapis/cloud/apigeeconnect/v1;apigeeconnect�Google.Cloud.ApigeeConnect.V1�Google\\Cloud\\ApigeeConnect\\V1� Google::Cloud::ApigeeConnect::V1�AP
%apigeeconnect.googleapis.com/Endpoint\'projects/{project}/endpoints/{endpoint}bproto3'
        , true);

        static::$is_initialized = true;
    }
}
