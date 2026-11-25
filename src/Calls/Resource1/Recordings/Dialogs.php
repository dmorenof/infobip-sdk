<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Recordings;

final class Dialogs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/recordings/dialogs [operationId: get-dialogs-recordings] */
    /**
     * Get dialogs recordings
     *
     * Get the recordings of dialogs with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Dialogs $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\DialogRecordingPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Dialogs::class)->get($params);
    }

    /** DELETE /calls/1/recordings/dialogs/{dialogId} [operationId: delete-dialog-recordings] */
    /**
     * Delete dialog recordings
     *
     * Delete the recordings for a single dialog.
     */
    public static function deleteByDialogId(string $dialogId, ?\InfobipSDK\DeleteParams\Calls\Resource1\Recordings\Dialogs\ByDialogId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicDialogRecording
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Dialogs::class)->deleteByDialogId($dialogId, $params);
    }

    /** GET /calls/1/recordings/dialogs/{dialogId} [operationId: get-dialog-recordings] */
    /**
     * Get dialog recordings
     *
     * Get the recordings for a single dialog.
     */
    public static function getByDialogId(string $dialogId, ?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Dialogs\ByDialogId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicDialogRecording
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Recordings\Dialogs::class)->getByDialogId($dialogId, $params);
    }
}
