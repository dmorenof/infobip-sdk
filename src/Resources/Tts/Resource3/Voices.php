<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Tts\Resource3;

final class Voices extends \InfobipSDK\Client
{
    private const array GET_BY_LANGUAGE = [
        'method' => 'GET',
        'path' => '/tts/3/voices/{language}',
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
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\\GetVoicesResponse',
    ];

    /**
     * Get Voices
     *
     * This method allows you to retrieve all voices for the given language
     */
    public function getByLanguage(string $language, ?\InfobipSDK\GetParams\Tts\Resource3\Voices\ByLanguage $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GetVoicesResponse
    {
        /** @var \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\GetVoicesResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_LANGUAGE), path: ['language' => $language], parameters: $params);
        return $result;
    }

}
