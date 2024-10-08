<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/target.proto

namespace Google\Cloud\Scheduler\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pub/Sub target. The job will be delivered by publishing a message to
 * the given Pub/Sub topic.
 *
 * Generated from protobuf message <code>google.cloud.scheduler.v1.PubsubTarget</code>
 */
class PubsubTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Cloud Pub/Sub topic to which messages will
     * be published when a job is delivered. The topic name must be in the
     * same format as required by Pub/Sub's
     * [PublishRequest.name](https://cloud.google.com/pubsub/docs/reference/rpc/google.pubsub.v1#publishrequest),
     * for example `projects/PROJECT_ID/topics/TOPIC_ID`.
     * The topic must be in the same project as the Cloud Scheduler job.
     *
     * Generated from protobuf field <code>string topic_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $topic_name = '';
    /**
     * The message payload for PubsubMessage.
     * Pubsub message must contain either non-empty data, or at least one
     * attribute.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     */
    protected $data = '';
    /**
     * Attributes for PubsubMessage.
     * Pubsub message must contain either non-empty data, or at least one
     * attribute.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 4;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic_name
     *           Required. The name of the Cloud Pub/Sub topic to which messages will
     *           be published when a job is delivered. The topic name must be in the
     *           same format as required by Pub/Sub's
     *           [PublishRequest.name](https://cloud.google.com/pubsub/docs/reference/rpc/google.pubsub.v1#publishrequest),
     *           for example `projects/PROJECT_ID/topics/TOPIC_ID`.
     *           The topic must be in the same project as the Cloud Scheduler job.
     *     @type string $data
     *           The message payload for PubsubMessage.
     *           Pubsub message must contain either non-empty data, or at least one
     *           attribute.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Attributes for PubsubMessage.
     *           Pubsub message must contain either non-empty data, or at least one
     *           attribute.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Scheduler\V1\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Cloud Pub/Sub topic to which messages will
     * be published when a job is delivered. The topic name must be in the
     * same format as required by Pub/Sub's
     * [PublishRequest.name](https://cloud.google.com/pubsub/docs/reference/rpc/google.pubsub.v1#publishrequest),
     * for example `projects/PROJECT_ID/topics/TOPIC_ID`.
     * The topic must be in the same project as the Cloud Scheduler job.
     *
     * Generated from protobuf field <code>string topic_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTopicName()
    {
        return $this->topic_name;
    }

    /**
     * Required. The name of the Cloud Pub/Sub topic to which messages will
     * be published when a job is delivered. The topic name must be in the
     * same format as required by Pub/Sub's
     * [PublishRequest.name](https://cloud.google.com/pubsub/docs/reference/rpc/google.pubsub.v1#publishrequest),
     * for example `projects/PROJECT_ID/topics/TOPIC_ID`.
     * The topic must be in the same project as the Cloud Scheduler job.
     *
     * Generated from protobuf field <code>string topic_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTopicName($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic_name = $var;

        return $this;
    }

    /**
     * The message payload for PubsubMessage.
     * Pubsub message must contain either non-empty data, or at least one
     * attribute.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The message payload for PubsubMessage.
     * Pubsub message must contain either non-empty data, or at least one
     * attribute.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Attributes for PubsubMessage.
     * Pubsub message must contain either non-empty data, or at least one
     * attribute.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Attributes for PubsubMessage.
     * Pubsub message must contain either non-empty data, or at least one
     * attribute.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

}

