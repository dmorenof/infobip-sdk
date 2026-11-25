<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Number\Resource1;

final class Logs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/number/1/logs',
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
            400 => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d\\NcLogResponse',
        'querySerialization' => [
            'bulkId' => 'multi',
            'messageId' => 'multi',
        ],
    ];

    /**
     * Get Number Context logs
     *
     * This method allows you to get logs of sent Number Context requests.
     */
    public function get(?\InfobipSDK\GetParams\Number\Resource1\Logs $params = null): \InfobipSDK\DTOs\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d\NcLogResponse
    {
        /** @var \InfobipSDK\DTOs\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d\NcLogResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
