<?php

declare(strict_types=1);

namespace InfobipSDK\Callrouting\Resource1;

final class Recordings extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /callrouting/1/recordings [operationId: delete-by-correlation-id] */
    /**
     * Delete by correlation ID
     *
     * This method allows deleting call recordings based on correlation ID.
     */
    public static function delete(\InfobipSDK\DeleteParams\Callrouting\Resource1\Recordings $params): \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallRoutingRecordingApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Recordings::class)->delete($params);
    }

    /** GET /callrouting/1/recordings [operationId: search-call-routing-recording] */
    /**
     * Get recordings
     *
     * This method allows searching and filtering based on various recording data properties.
     */
    public static function get(?\InfobipSDK\GetParams\Callrouting\Resource1\Recordings $params = null): \InfobipSDK\DTOs\Aa157138bc28697f89db8325cc3d3ce20c0f3c72c30b6831a5435f3f2d211cfe\CallRoutingRecordingPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Recordings::class)->get($params);
    }

}
