<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Dialogs\ByDialogId;

final class Hangup extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/dialogs/{dialogId}/hangup [operationId: hangup-dialog] */
    /**
     * Hangup dialog
     *
     * Hang up a dialog. This action also hangs up all calls in the dialog.
     */
    public static function post(string $dialogId): \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId\Hangup::class)->post($dialogId);
    }

}
