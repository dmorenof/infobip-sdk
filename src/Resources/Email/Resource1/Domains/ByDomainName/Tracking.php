<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\Domains\ByDomainName;

final class Tracking extends \InfobipSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/email/1/domains/{domainName}/tracking',
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
            400 => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N73f6910bb0f0a3f1f6a9e6796ff94e4b37e388cd86d56d7e974197854e7020f7\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\\DomainResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\\TrackingEventRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update domain tracking events
     *
     * API to update tracking events for the provided domain. Tracking events can be updated only for CLICKS, OPENS and UNSUBSCRIBES.
     */
    public function put(string $domainName, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\TrackingEventRequest $payload): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse
    {
        /** @var \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['domainName' => $domainName]);
        return $result;
    }
}
