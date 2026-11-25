<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource3;

final class Send extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/email/3/send',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\\SendResponse',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'ampHtml' => [
                'contentType' => 'text/plain',
            ],
            'applicationId' => [
                'contentType' => 'text/plain',
            ],
            'attachment' => [
                'contentType' => null,
                'filename' => 'attachment.bin',
            ],
            'bcc' => [
                'contentType' => 'text/plain',
            ],
            'bulkId' => [
                'contentType' => 'text/plain',
            ],
            'callbackData' => [
                'contentType' => 'text/plain',
            ],
            'campaignReferenceId' => [
                'contentType' => 'text/plain',
            ],
            'cc' => [
                'contentType' => 'text/plain',
            ],
            'clientPriority' => [
                'contentType' => 'text/plain',
            ],
            'defaultPlaceholders' => [
                'contentType' => 'text/plain',
            ],
            'entityId' => [
                'contentType' => 'text/plain',
            ],
            'from' => [
                'contentType' => 'text/plain',
            ],
            'headers' => [
                'contentType' => 'text/plain',
            ],
            'html' => [
                'contentType' => 'text/plain',
            ],
            'inlineImage' => [
                'contentType' => null,
                'filename' => 'inlineImage.bin',
            ],
            'intermediateReport' => [
                'contentType' => 'text/plain',
            ],
            'ipPoolId' => [
                'contentType' => 'text/plain',
            ],
            'landingPageId' => [
                'contentType' => 'text/plain',
            ],
            'landingPagePlaceholders' => [
                'contentType' => 'text/plain',
            ],
            'messageId' => [
                'contentType' => 'text/plain',
            ],
            'notifyContentType' => [
                'contentType' => 'text/plain',
            ],
            'notifyUrl' => [
                'contentType' => 'text/plain',
            ],
            'preserveRecipients' => [
                'contentType' => 'text/plain',
            ],
            'replyTo' => [
                'contentType' => 'text/plain',
            ],
            'sendAt' => [
                'contentType' => 'text/plain',
            ],
            'skipActiveStorage' => [
                'contentType' => 'text/plain',
            ],
            'skipPassiveStorage' => [
                'contentType' => 'text/plain',
            ],
            'subject' => [
                'contentType' => 'text/plain',
            ],
            'templateId' => [
                'contentType' => 'text/plain',
            ],
            'templateLanguageVersion' => [
                'contentType' => 'text/plain',
            ],
            'text' => [
                'contentType' => 'text/plain',
            ],
            'to' => [
                'contentType' => 'text/plain',
            ],
            'track' => [
                'contentType' => 'text/plain',
            ],
            'trackClicks' => [
                'contentType' => 'text/plain',
            ],
            'trackOpens' => [
                'contentType' => 'text/plain',
            ],
            'trackingPixelPosition' => [
                'contentType' => 'text/plain',
            ],
            'trackingUrl' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Send fully featured email
     *
     * Send an email or multiple emails to a recipient or multiple recipients with CC/BCC enabled.
     */
    public function post(?\InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SendRequestSchema $payload = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SendResponse
    {
        /** @var \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\SendResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
