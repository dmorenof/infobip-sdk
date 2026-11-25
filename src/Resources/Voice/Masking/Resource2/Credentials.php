<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\Masking\Resource2;

final class Credentials extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/voice/masking/2/credentials',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
     * Delete number masking credentials
     *
     * This method allows you to delete Voice number masking credentials.
     */
    public function delete(): void
    {
        $this->executeOperation(self::operation(self::DELETE));
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/voice/masking/2/credentials',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\CredentialsResponse',
    ];

    /**
     * Get number masking credentials
     *
     * This method allows you to get Voice number masking credentials.
     */
    public function get(): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse
    {
        /** @var \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/voice/masking/2/credentials',
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
        'success' => [
            201,
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
        'responseType' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\CredentialsResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\CredentialsBody',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create number masking credentials
     *
     * This method allows you to create Voice number masking credentials.
     */
    public function post(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsBody $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse
    {
        /** @var \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/voice/masking/2/credentials',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\CredentialsResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\\CredentialsBody',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update number masking credentials
     *
     * This method allows you to update Voice number masking credentials.
     */
    public function put(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsBody $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse
    {
        /** @var \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
