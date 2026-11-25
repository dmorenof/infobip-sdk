<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ByDialogId;

final class StopPlay extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/dialogs/{dialogId}/stop-play [operationId: dialog-stop-playing-file] */
    /**
     * Stop playing file
     *
     * Stop playing an audio file on a dialog.
     */
    public static function post(string $dialogId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId\StopPlay::class)->post($dialogId);
    }
}
