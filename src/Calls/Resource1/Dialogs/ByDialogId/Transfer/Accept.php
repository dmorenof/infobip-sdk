<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ByDialogId\Transfer;

final class Accept extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/dialogs/{dialogId}/transfer/accept [operationId: dialog-transfer-accept] */
    /**
     * Dialog transfer accept
     *
     * Accepts a dialog transfer request received in a `DIALOG_TRANSFER_REQUESTED` event.
     */
    public static function post(string $dialogId, \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogAcceptTransferRequest $payload): \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId\Transfer\Accept::class)->post($dialogId, $payload);
    }
}
