<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1;

final class Connect extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/calls/1/connect',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
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
        'responseType' => '\\InfobipSDK\\DTOs\\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\\Conference',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\\ConnectRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Connect calls
     *
     * Connect calls in a conference.
     */
    public function post(\InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ConnectRequest $payload): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference
    {
        /** @var \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
