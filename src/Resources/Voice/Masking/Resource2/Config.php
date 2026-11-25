<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\Masking\Resource2;

final class Config extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/voice/masking/2/config',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Collections\\Voice\\Masking\\Resource2\\Config\\Get\\Resource2ConfigCollection',
    ];

    /**
     * Get number masking configurations
     *
     * This method allows you to get all Voice number masking configurations.
     */
    public function get(): \InfobipSDK\Collections\Voice\Masking\Resource2\Config\Get\Resource2ConfigCollection
    {
        /** @var \InfobipSDK\Collections\Voice\Masking\Resource2\Config\Get\Resource2ConfigCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/voice/masking/2/config',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\NumberMaskingSetupResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\NumberMaskingSetupRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create number masking configuration
     *
     * This method allows you to create a masking configuration.
     */
    public function post(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupRequest $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse
    {
        /** @var \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_KEY = [
        'method' => 'DELETE',
        'path' => '/voice/masking/2/config/{key}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete number masking configuration
     *
     * This method allows you to delete a Voice number masking configuration.
     */
    public function deleteByKey(string $key): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_KEY), path: ['key' => $key]);
        return;
    }

    private const array GET_BY_KEY = [
        'method' => 'GET',
        'path' => '/voice/masking/2/config/{key}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\NumberMaskingSetupResponse',
    ];

    /**
     * Get number masking configuration
     *
     * This method allows you to get a Voice number masking configuration.
     */
    public function getByKey(string $key): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse
    {
        /** @var \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_KEY), path: ['key' => $key]);
        return $result;
    }

    private const array PUT_BY_KEY = [
        'method' => 'PUT',
        'path' => '/voice/masking/2/config/{key}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\NumberMaskingSetupResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\NumberMaskingSetupRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update number masking configuration
     *
     * This method allows you to update a Voice number masking configuration.
     */
    public function putByKey(string $key, \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupRequest $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse
    {
        /** @var \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\NumberMaskingSetupResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_KEY), $payload, path: ['key' => $key]);
        return $result;
    }
}
