<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\Domains\ByDomainName;

final class Verify extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/email/1/domains/{domainName}/verify',
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
            202,
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
    ];

    /**
     * Verify domain
     *
     * API request to verify records(TXT, MX, DKIM) associated with the provided domain.
     */
    public function post(string $domainName): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['domainName' => $domainName]);
        return;
    }

}
