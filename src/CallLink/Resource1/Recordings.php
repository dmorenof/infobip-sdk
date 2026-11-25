<?php

declare(strict_types=1);

namespace InfobipSDK\CallLink\Resource1;

final class Recordings extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /call-link/1/recordings [operationId: get-call-link-recordings] */
    /**
     * Get call link recordings
     *
     * Use this method to filter and retrieve call link recordings.
     */
    public static function get(?\InfobipSDK\GetParams\CallLink\Resource1\Recordings $params = null): \InfobipSDK\DTOs\D32f709b8e696d073f5212b1e1d90721a8fd1118bf2c8abce078bf2baf7d1707\RecordingPage
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Recordings::class)->get($params);
    }

    /** DELETE /call-link/1/recordings/{id} [operationId: delete-call-link-recording] */
    /**
     * Delete call link recording
     *
     * Use this method to delete a call link recording by its ID.
     */
    public static function deleteById(string $id, ?\InfobipSDK\DeleteParams\CallLink\Resource1\Recordings\ById $params = null): \InfobipSDK\DTOs\N73e6f414ccb2e1e41274c061b50cf5765f69b642a3e0cca54b0248eb3baf086d\RecordingResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Recordings::class)->deleteById($id, $params);
    }
}
