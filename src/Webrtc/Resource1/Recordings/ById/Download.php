<?php

declare(strict_types=1);

namespace InfobipSDK\Webrtc\Resource1\Recordings\ById;

final class Download extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /webrtc/1/recordings/{id}/download [operationId: download-webrtc-recording-by-id] */
    /**
     * Download WebRTC recording file
     *
     * This method allows downloading a WebRTC recording file based on its ID.
     */
    public static function get(string $id, ?\InfobipSDK\GetParams\Webrtc\Resource1\Recordings\ById\Download $params = null): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Recordings\ById\Download::class)->get($id, $params);
    }
}
