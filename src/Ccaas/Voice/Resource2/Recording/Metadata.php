<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Recording;

final class Metadata extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/recording/metadata [operationId: get-conversations-recording-metadata] */
    /**
     * Get recording metadata
     *
     * Use this method to retrieve a pageable list of recording metadata based on parameters.
     */
    public static function get(?\InfobipSDK\GetParams\Ccaas\Voice\Resource2\Recording\Metadata $params = null): \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\RecordingMetadataApiModel
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Recording\Metadata::class)->get($params);
    }

}
