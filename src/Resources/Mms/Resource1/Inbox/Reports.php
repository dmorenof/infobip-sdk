<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mms\Resource1\Inbox;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/mms/1/inbox/reports',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\\MMSMoReportResponse',
    ];

    /**
     * Get inbound MMS messages
     *
     * If for some reason you are unable to receive incoming MMS at the endpoint of your choice in real time, you can use this API call to fetch messages. Each request will return a batch of received messages - only once. The following API request will return only new messages that arrived since the last API request.
     */
    public function get(?\InfobipSDK\GetParams\Mms\Resource1\Inbox\Reports $params = null): \InfobipSDK\DTOs\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\MMSMoReportResponse
    {
        /** @var \InfobipSDK\DTOs\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\MMSMoReportResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
