<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/target.proto

namespace GPBMetadata\Google\Cloud\Scheduler\V1;

class Target
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/scheduler/v1/target.protogoogle.cloud.scheduler.v1google/api/annotations.proto"�

HttpTarget
uri (	:
http_method (2%.google.cloud.scheduler.v1.HttpMethodC
headers (22.google.cloud.scheduler.v1.HttpTarget.HeadersEntry
body (<
oauth_token (2%.google.cloud.scheduler.v1.OAuthTokenH :

oidc_token (2$.google.cloud.scheduler.v1.OidcTokenH .
HeadersEntry
key (	
value (	:8B
authorization_header"�
AppEngineHttpTarget:
http_method (2%.google.cloud.scheduler.v1.HttpMethodG
app_engine_routing (2+.google.cloud.scheduler.v1.AppEngineRouting
relative_uri (	L
headers (2;.google.cloud.scheduler.v1.AppEngineHttpTarget.HeadersEntry
body (.
HeadersEntry
key (	
value (	:8"�
PubsubTarget4

topic_name (	B �A
pubsub.googleapis.com/Topic
data (K

attributes (27.google.cloud.scheduler.v1.PubsubTarget.AttributesEntry1
AttributesEntry
key (	
value (	:8"T
AppEngineRouting
service (	
version (	
instance (	
host (	":

OAuthToken
service_account_email (	
scope (	"<
	OidcToken
service_account_email (	
audience (	*s

HttpMethod
HTTP_METHOD_UNSPECIFIED 
POST
GET
HEAD
PUT

DELETE	
PATCH
OPTIONSB�
com.google.cloud.scheduler.v1BTargetProtoPZBgoogle.golang.org/genproto/googleapis/cloud/scheduler/v1;scheduler�A@
pubsub.googleapis.com/Topic!projects/{project}/topics/{topic}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

