<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\KakaoBrandMessages\Resource1\Templates;

final class Single extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/kakao-brand-messages/1/templates/single',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\\GetTemplateResponse',
    ];

    /**
     * Get Brand Message template
     *
     * Get Brand Message template
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#chingu-talk
     */
    public function get(\InfobipSDK\GetParams\KakaoBrandMessages\Resource1\Templates\Single $params): \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\GetTemplateResponse
    {
        /** @var \InfobipSDK\DTOs\N58b7723d552ea7166ae4b26f13a2e9dab0154f96a724621e17ccb41009cc81fb\GetTemplateResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
