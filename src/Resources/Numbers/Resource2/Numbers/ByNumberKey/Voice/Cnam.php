<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice;

final class Cnam extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/numbers/2/numbers/{numberKey}/voice/cnam',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\\Cnam',
    ];

    /**
     * Delete CNAM
     *
     * Delete CNAM configuration.
     */
    public function delete(string $numberKey): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        /** @var \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['numberKey' => $numberKey]);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/numbers/2/numbers/{numberKey}/voice/cnam',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\\Cnam',
    ];

    /**
     * Get CNAM
     *
     * Get CNAM configuration.
     */
    public function get(string $numberKey): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        /** @var \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['numberKey' => $numberKey]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/numbers/2/numbers/{numberKey}/voice/cnam',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\\Cnam',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\\Cnam',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create CNAM
     *
     * Create CNAM configuration.
     *
     * This is currently available only for United States and Canada numbers.
     *
     */
    public function post(string $numberKey, \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $payload): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        /** @var \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['numberKey' => $numberKey]);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/numbers/2/numbers/{numberKey}/voice/cnam',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\\Cnam',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\\Cnam',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update CNAM
     *
     * Update a CNAM configuration.
     */
    public function put(string $numberKey, \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $payload): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        /** @var \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['numberKey' => $numberKey]);
        return $result;
    }

}
