<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ByDialogId\Transfer;

final class Reject extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/dialogs/{dialogId}/transfer/reject [operationId: dialog-transfer-reject] */
    /**
     * Dialog transfer reject
     *
     * Rejects a dialog transfer request received in a `DIALOG_TRANSFER_REQUESTED` event.
     */
    public static function post(string $dialogId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ActionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId\Transfer\Reject::class)->post($dialogId);
    }
}
