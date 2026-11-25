<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Recordings\Dialogs\ByDialogId;

final class Compose extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/recordings/dialogs/{dialogId}/compose [operationId: compose-dialog-recording] */
    /**
     * Compose dialog recording on calls
     *
     * Compose dialog recording on calls. Both calls will be merged into a single audio or video file.
     */
    public static function post(string $dialogId, ?\InfobipSDK\PostParams\Calls\Resource1\Recordings\Dialogs\ByDialogId\Compose $params = null): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Dialogs\ByDialogId\Compose::class)->post($dialogId, $params);
    }
}
