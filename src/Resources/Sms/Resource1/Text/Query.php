<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource1\Text;

final class Query extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/1/text/query',
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Cb1ef9a380a46bb9d49281818dd22b206a7f89260670bd103daadd3abc4386a3\\QuerySmsResponse',
        'querySerialization' => [
            'to' => 'multi',
        ],
    ];

    /**
     * Send SMS message over query parameters
     *
     * All message parameters of the message can be defined in the query string. Use this method only if [Send SMS message](#channels/sms/send-sms-message) is not an option for your use case!<br>**Note:** Make sure that special characters and user credentials are properly encoded. Use a [URL encoding reference](https://www.w3schools.com/tags/ref_urlencode.asp) as a guide.
     * Documentation: https://www.infobip.com/docs/sms
     *
     * @deprecated
     */
    public function get(\InfobipSDK\GetParams\Sms\Resource1\Text\Query $params): \InfobipSDK\DTOs\Cb1ef9a380a46bb9d49281818dd22b206a7f89260670bd103daadd3abc4386a3\QuerySmsResponse
    {
        /** @var \InfobipSDK\DTOs\Cb1ef9a380a46bb9d49281818dd22b206a7f89260670bd103daadd3abc4386a3\QuerySmsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
