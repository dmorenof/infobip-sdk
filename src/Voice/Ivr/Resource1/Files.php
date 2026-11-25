<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Ivr\Resource1;

final class Files extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /voice/ivr/1/files [operationId: search-voice-ivr-recorded-files] */
    /**
     * Search Voice IVR Recorded Files
     *
     * This method allows you to search Voice IVR Recorded Audio Files.
     */
    public static function get(?\InfobipSDK\GetParams\Voice\Ivr\Resource1\Files $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\RecordedAudioFilesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Files::class)->get($params);
    }

    /** GET /voice/ivr/1/files/{id} [operationId: search-voice-ivr-recorded-file] */
    /**
     * Download Voice IVR Recorded File.
     *
     * This method allows you to download Voice IVR Recorded Audio File. The returned audio data is encoded as PCM 16bit 8kHz WAVE audio. The files are available on Infobip servers for 2 months.
     */
    public static function getById(string $id): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Files::class)->getById($id);
    }

}
