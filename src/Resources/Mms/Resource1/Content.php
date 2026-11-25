<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mms\Resource1;

final class Content extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mms/1/content',
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
            400 => '\\InfobipSDK\\Responses\\Errors\\Mms\\Resource1\\Content\\PostStatus400Response',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Mms\\Resource1\\Content\\PostStatus400Response',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\\UploadBinaryResult',
        'requestMediaType' => 'application/octet-stream',
        'requestBody' => [
            'type' => 'stream',
            'nullable' => false,
            'required' => true,
            'rules' => [],
            'encoding' => 'binary',
        ],
    ];

    /**
     * Upload binary content
     *
     * This method allows you to upload binary content that you can reference when sending MMS messages.
     */
    public function post(\InfobipSDK\PostParams\Mms\Resource1\Content $params): \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\UploadBinaryResult
    {
        /** @var \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\UploadBinaryResult $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
