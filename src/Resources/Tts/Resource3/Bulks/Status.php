<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Tts\Resource3\Bulks;

final class Status extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/tts/3/bulks/status',
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
        'responseType' => '\\InfobipSDK\\DTOs\\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\\BulkStatusResponse',
    ];

    /**
     * Get sent bulk's status
     *
     * This method allows you to get status of scheduled TTS bulk.
     */
    public function get(\InfobipSDK\GetParams\Tts\Resource3\Bulks\Status $params): \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkStatusResponse
    {
        /** @var \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkStatusResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/tts/3/bulks/status',
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
        'responseType' => '\\InfobipSDK\\DTOs\\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\\BulkStatusResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\\BulkStatusRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Manage sent bulk's status
     *
     * This method allows you to manage statuses of scheduled TTS bulk. Messages scheduled with the sendAt or sending speed parameter can be paused, resumed or canceled by changing the message status, or rescheduled using the bulkId parameter as an identifier. Only voice messages that were not already sent can be canceled.
     */
    public function put(\InfobipSDK\PutParams\Tts\Resource3\Bulks\Status $params): \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkStatusResponse
    {
        /** @var \InfobipSDK\DTOs\A15a35d4e9d79ecb7047887a88973e9a539c66701b3c993c3c3be69782dd8aba\BulkStatusResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), parameters: $params);
        return $result;
    }

}
