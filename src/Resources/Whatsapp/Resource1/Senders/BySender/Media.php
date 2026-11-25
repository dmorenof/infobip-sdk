<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender;

final class Media extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/whatsapp/1/senders/{sender}/media',
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
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            404 => [
                'type' => null,
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
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2\\UrlDeletionRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete media
     *
     * Delete WhatsApp media. May be outbound or inbound media.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function delete(string $sender, \InfobipSDK\DTOs\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2\UrlDeletionRequest $payload): void
    {
        $this->executeBody(self::operation(self::DELETE), $payload, path: ['sender' => $sender]);
        return;
    }

    private const array GET_BY_MEDIA_ID = [
        'method' => 'GET',
        'path' => '/whatsapp/1/senders/{sender}/media/{mediaId}',
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
            302 => null,
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            302 => [
                'type' => null,
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
                'type' => null,
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
        'responseType' => 'string',
        'responseMediaType' => '*/*',
        'validation' => [
            'mediaId' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Download inbound media
     *
     * Download WhatsApp media sent by end-users.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function getByMediaId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Media\ByMediaId $identifier): string
    {
        /** @var string $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MEDIA_ID), path: $identifier);
        return $result;
    }

    private const array HEAD_BY_MEDIA_ID = [
        'method' => 'HEAD',
        'path' => '/whatsapp/1/senders/{sender}/media/{mediaId}',
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
            401 => null,
            403 => null,
            404 => null,
            429 => null,
            500 => null,
        ],
        'errorResponses' => [
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseHeaders' => [
            200 => [
                'Content-Length' => [
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'validation' => [
            'mediaId' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Get media metadata
     *
     * Get metadata of WhatsApp media sent by end-users to check media type and the size of a file without downloading the content.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function headByMediaId(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Media\ByMediaId $identifier): void
    {
        $this->executeArguments(self::operation(self::HEAD_BY_MEDIA_ID), path: $identifier);
        return;
    }

}
