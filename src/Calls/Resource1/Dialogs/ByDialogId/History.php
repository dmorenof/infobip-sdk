<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ByDialogId;

final class History extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/dialogs/{dialogId}/history [operationId: get-dialog-history] */
    /**
     * Get dialog history
     *
     * Get a single dialog history. Dialog history retention period is 5 days.
     */
    public static function get(string $dialogId): \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogLogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId\History::class)->get($dialogId);
    }
}
