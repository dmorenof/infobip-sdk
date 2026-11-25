<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Voice\Resource2\Recording;

final class Download extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /ccaas/voice/2/recording/download/{recordingId} [operationId: download-call-recording] */
    /**
     * Download call recording
     *
     * Use this endpoint to download a call recording using recordingId.
     *
     * @deprecated
     */
    public static function getByRecordingId(string $recordingId, ?\InfobipSDK\GetParams\Ccaas\Voice\Resource2\Recording\Download\ByRecordingId $params = null): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Voice\Resource2\Recording\Download::class)->getByRecordingId($recordingId, $params);
    }
}
