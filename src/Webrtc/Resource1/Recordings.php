<?php

declare(strict_types=1);

namespace InfobipSDK\Webrtc\Resource1;

final class Recordings extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /webrtc/1/recordings [operationId: get-webrtc-recordings] */
    /**
     * Get WebRTC recordings
     *
     * This method allows searching and filtering based on various recording data properties.
     */
    public static function get(?\InfobipSDK\GetParams\Webrtc\Resource1\Recordings $params = null): \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\WebrtcRecordingPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Recordings::class)->get($params);
    }

    /** DELETE /webrtc/1/recordings/{id} [operationId: delete-webrtc-recording-by-id] */
    /**
     * Delete WebRTC recording by ID
     *
     * This method allows deleting call recordings based on their ID.
     */
    public static function deleteById(string $id, ?\InfobipSDK\DeleteParams\Webrtc\Resource1\Recordings\ById $params = null): \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\RecordingResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\Recordings::class)->deleteById($id, $params);
    }
}
