<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListRepoTriggerRecord
 *
 * @method string getInstanceId()
 * @method string getTriggerRecordId()
 */
class ListRepoTriggerRecordRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2018-12-01',
            'ListRepoTriggerRecord',
            'acr'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $triggerRecordId
     *
     * @return $this
     */
    public function setTriggerRecordId($triggerRecordId)
    {
        $this->requestParameters['TriggerRecordId'] = $triggerRecordId;
        $this->queryParameters['TriggerRecordId'] = $triggerRecordId;

        return $this;
    }
}
