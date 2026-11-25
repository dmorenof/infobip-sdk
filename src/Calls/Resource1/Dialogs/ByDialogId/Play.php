<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ByDialogId;

final class Play extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/dialogs/{dialogId}/play [operationId: dialog-play-file] */
    /**
     * Play file
     *
     * Play an audio file on a dialog.
     */
    public static function post(string $dialogId, \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogPlayRequest $payload): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId\Play::class)->post($dialogId, $payload);
    }

}
