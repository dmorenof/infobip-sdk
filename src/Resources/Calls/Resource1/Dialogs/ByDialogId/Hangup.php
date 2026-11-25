<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1\Dialogs\ByDialogId;

final class Hangup extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/calls/1/dialogs/{dialogId}/hangup',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\\DialogResponse',
    ];

    /**
     * Hangup dialog
     *
     * Hang up a dialog. This action also hangs up all calls in the dialog.
     */
    public function post(string $dialogId): \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogResponse
    {
        /** @var \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['dialogId' => $dialogId]);
        return $result;
    }

}
