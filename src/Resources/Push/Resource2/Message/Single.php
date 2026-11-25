<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource2\Message;

final class Single extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/push/2/message/single',
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
            400 => '\\InfobipSDK\\DTOs\\N676955110d1a0dfd70a111f0d54754844fb76cec84585649da79c94c1af5f6bc\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N676955110d1a0dfd70a111f0d54754844fb76cec84585649da79c94c1af5f6bc\\ApiException',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send single Push notification
     *
     * Use this method to send a single Push notification to one or multiple recipients.
     *
     * @deprecated
     */
    public function post(\InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushRequest $payload): \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushResponse
    {
        /** @var \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
