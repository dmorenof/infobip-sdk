<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1;

final class Queues extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/1/queues [operationId: get-queues] */
    /**
     * Get queues
     *
     * Use this method to get a list of queues with pagination and filtering options. Using a filter is optional.
     * The result can be filtered by one or many optional filters described in the parameters.
     * <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Queues $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\QueueResultPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Queues::class)->get($params);
    }

    /** POST /ccaas/1/queues [operationId: create-queue] */
    /**
     * Create queue
     *
     * Use this method to create a queue.
     * Queues help manage conversations in a timely manner by organizing the team based on workload and knowledge.
     * <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public static function post(\InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateQueueApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\QueueApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Queues::class)->post($payload);
    }

    /** DELETE /ccaas/1/queues/{queueId} [operationId: delete-queue] */
    /**
     * Delete queue
     *
     * Use this method to delete a queue. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public static function deleteByQueueId(string $queueId): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Queues::class)->deleteByQueueId($queueId);
    }

    /** PUT /ccaas/1/queues/{queueId} [operationId: update-queue] */
    /**
     * Update queue
     *
     * Use this method to update the queue. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public static function putByQueueId(string $queueId, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\UpdateQueueApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\QueueApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\Queues::class)->putByQueueId($queueId, $payload);
    }
}
