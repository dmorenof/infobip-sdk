<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class Dialogs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/dialogs [operationId: get-dialogs] */
    /**
     * Get dialogs
     *
     * Get dialogs with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Dialogs $params = null): \InfobipSDK\DTOs\F0c12807aec90d20a332deb5d4c4ff89651a8119eb6a5fa7e1d6e803f3c0e71b\DialogPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs::class)->get($params);
    }

    /** POST /calls/1/dialogs [operationId: create-dialog] */
    /**
     * Create dialog
     *
     * Create a dialog.
     */
    public static function post(\InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogRequest $payload): \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs::class)->post($payload);
    }

    /** GET /calls/1/dialogs/{dialogId} [operationId: get-dialog] */
    /**
     * Get dialog
     *
     * Get a single dialog.
     */
    public static function getByDialogId(string $dialogId): \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Dialogs::class)->getByDialogId($dialogId);
    }
}
